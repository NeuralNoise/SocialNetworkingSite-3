<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class userController extends Controller
{
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
		$store_obj->password = $request->password;
		$store_obj->save();

	}

}
