<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    use HasFactory;

    public static function NewProducts() {
        $sNow = date('Y-m-d H:i:s');
        $sNextWeek = date('Y-m-d H:i:s', strtotime($sNow . ' + 1 week'));
        return Product::where(DB::raw('date_format(updated_at,
        "%Y-%m-%d")'), '>=', date('Y-m-d', strtotime($sNow)))
        ->where('updated_at', '<=', date('Y-m-d', strtotime($sNextWeek)))
        ->get();
    }

    public static function Offerings() {
        $currentTime = date('Y-m-d H:i:s');
        return self::where(function ($query) use ($currentTime) {
            $query->where(DB::raw("'$currentTime'"), '>=', DB::raw('discountStart_at'))
                ->where(DB::raw("'$currentTime'"), '<=', DB::raw('discountEnd_at'));
        })->get();
    }

    public function hasDiscount() {
        $currentTime = date('Y-m-d H:i:s');
        $hasDiscount = $this->where('id', $this->id)
            ->where(DB::raw("'$currentTime'"), '>=', DB::raw('discountStart_at'))
            ->where(DB::raw("'$currentTime'"), '<=', DB::raw('discountEnd_at'))
            ->whereNotNull('discountPercent')
            ->where('discountPercent', '>', 0)
            ->exists();

        return $hasDiscount;
}
}
