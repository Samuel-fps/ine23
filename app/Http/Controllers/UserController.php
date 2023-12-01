<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Desconecta al usuario y redirecciona a la página raíz.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }
    /**
     * Muestra el formulario para editar el usuario.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit() {
        return view('user.edit');
    }
    //Update, recieves a $request Request and for now, it only executes dd($request->all()) to see what it recieves.
    public function update(Request $request) {
        //dd($request->all());
        $user = Auth::user();
        
        if ($request->oldPass != "") {
        if (!Hash::check($request->oldPass, $user->password))
        return back()->withInput()->withErrors(['oldPass' =>
        ['La contraseña original no coincide.']]);
        else if ($request->newPass == ""
        || $request->newPass != $request->repeatedPass)
        return back()->withInput()->withErrors(['newPass' =>
        ['La nueva contraseña está vacía o mal repetida.']]);
        else
        $user->password = Hash::make($request->newPass);
        }
        $user->name = $request->name;
        $user->save();
        return back()->with(['success' =>
        ['Los datos han sido modificados.']]);
            
    }

}

