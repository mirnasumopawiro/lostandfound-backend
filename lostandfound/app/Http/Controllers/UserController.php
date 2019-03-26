<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //CRUD users table via User model

    public function getUser(){
    	return User::all();
    }

    public function insertUser(Request $request){
    	$data = new User();
    	$data['username']		= $request->input('username');
    	$data['password']		= $request->input('password');
    	$data['email']			= $request->input('email');
    	$data['gender']			= $request->input('gender');
    	$data['birthdate']		= $request->input('birthdate');
    	$data->save();

    	return response([
    		'msg' => 'success',
    	], 200);
    }

    public function updateUser(Request $request){
    	User::where('id', '=', $request->input('id'))
    	->update([
    		'username'			=> $request->input('username'),
    		'password'			=> $request->input('password'),
    		'email'				=> $request->input('email'),
    		'gender'			=> $request->input('gender'),
    		'birthdate'			=> $request->input('birthdate')
    	]);

    	return response([
    		'msg' => 'success'
    		]);
    }

    public function deleteUser(Request $request){
    	User::where('id', '=', $request->input('id'))->delete();
    }
}
