<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//To use DB::raw
use DB;
use App\Models\Company;

class Product extends Model
{
    use HasFactory;
    public static function Offerings()
    {
        $currentTime = date('Y-m-d H:i:s');
        return self::where(function ($query) use ($currentTime) {
            $query->where(DB::raw("'$currentTime'"), '>=', DB::raw('discountStart_at'))
                ->where(DB::raw("'$currentTime'"), '<=', DB::raw('discountEnd_at'));
        })->get();
    }
    
    static function NewProducts() {
        $sNow = date('Y-m-d H:i:s');
        $sNextWeek = date('Y-m-d H:i:s', strtotime($sNow . ' + 1 week'));
        return Product::where(DB::raw('date_format(updated_at,
        "%Y-%m-%d")'), '>=', date('Y-m-d', strtotime($sNow)))
        ->where('updated_at', '<=', date('Y-m-d', strtotime($sNextWeek)))
        ->get();
    }

    public function hasDiscount()
    {
        $currentTime = date('Y-m-d H:i:s');
        return $this->discountStart_at <= $currentTime && $this->discountEnd_at >= $currentTime && isset($this->discount) && $this->discount > 0;
    }

    //Relation 1 Company --> N Products
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}