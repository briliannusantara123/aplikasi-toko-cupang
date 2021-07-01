<?php

namespace App\Http\Controllers;
use Auth;
use App\Daftar;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login()
    {
    	return view('auths.login');
    }
    public function postlogin(Request $request)
    {
    	if(Auth::attempt($request->only('email','password'))){
    		return redirect('/ikan');
    	}
    	return redirect('/login');
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }
    public function daftar()
    {
    	$daftar = Daftar::all();
    	return view('auths.daftar',compact('daftar'));
    }
    public function create(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $daftar = Daftar::create($request->all());
        $user = new \App\User;
        $user->name = $daftar->name;
        $user->email = $daftar->email;
        $user->password = bcrypt($daftar->password);
        $user->remember_token = bcrypt($daftar->password);
        $user->save();

        return redirect('/login')->with('success','Berhasil Melakukan Registrasi');
    }
}
