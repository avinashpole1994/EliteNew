<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Excel;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use Validator;
use Redirect;

class LoginController extends Controller
{	  
	public function checklogin(Request $request){
		if(!$request->session()->exists('username')){
		    return view('login-elite');
		}else{
		    return redirect('/dashboard');
		}
	}

public function login(Request $request){

   /*	print_r($request->all());
   	exit();*/

	$validator = Validator::make($request->all(), [
	'email' => 'required|max:100',
	'password' => 'required|max:100',
	]);

	if ($validator->fails()) {
		return redirect('/')
		->withErrors($validator)
		->withInput();
	}else{
	$query=DB::select('call user_login(?,?)',array($request->email,$request->password));
	
	if($query){
		$val=$query[0];
		$request->session()->flush();
		$request->session()->put('username',$val->email);

		return redirect()->intended('dashboard');
	}else{
		Session::flash('msg', "Invalid email or password. Please Try again! ");
		return Redirect::back();
	}
	}
}

	public function logout(Request $req) {
	  $req->session()->flush();
	  return redirect('/');
	}
}