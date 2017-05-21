<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\users;

class userController extends Controller
{
	public function getDashboard(){
		return view('dashboard');
	}

    public function registerview(){
    	return view('register');
    }

    public function homeView(){
    	return view('welcome');
    }

    public function store(Request $request)
	{
		$store_obj = new users;

		$store_obj->name = $request->username;
		$store_obj->email = $request->email;
		$store_obj->password = bcrypt($request->password);
		$store_obj->save();

		return redirect()->route('dashboard');

	}

	public function signIn(Request $request){
		if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
			return redirect()->route('dashboard');
		}
			return redirect()->back();
		}	
}
