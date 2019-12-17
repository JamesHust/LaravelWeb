<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function getLogin(){
    	return view ('backend.login');
    }
    public function postLogin(Request $Request){
    	$arr = [
    			'email' => $Request->email,
    			'password' => $Request->password
    	];
    	if($Request->remember = 'Remember Me'){
    		$remember = true;
    	}else{
    		$remember = false;
    	}
    	if(Auth::attempt($arr,$remember)){
    		return redirect()->intended('admin/home');
    	}else{
    		return back()->withInput()->with('error','Tài khoản đăng nhập sai!');
    	}
    }
}
