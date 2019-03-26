<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\User;

class ThreadController extends Controller
{
    //CRUD threads table via Thread model

    public function getThread(){
    	return Thread::all();
    }

    public function createThread(Request $request){
    	$data = new Thread();
    	$data['title']			= $request->input('title');
    	// $data['user_id']		= $request->user()->id;
    	$data['user_id']		= $request->input('user_id');
    	$data['is_found']		= $request->input('is_found');
    	$data['description']	= $request->input('description');
    	$data['picture']			= $request->input('picture');
    	$data['location']		= $request->input('location');
    	$data['time']			= $request->input('time');
    	$data->save();

    	return response([
    		'msg' => 'success',
    	], 200);
    }

    public function updateThread(Request $request){
    	Thread::where('id', '=', $request->input('id'))
    	->update([
    		'title'				=> $request->input('title'),
    		'is_found'			=> $request->input('is_found'),
    		'description'		=> $request->input('description'),
    		'picture'			=> $request->input('picture'),
    		'location'			=> $request->input('location'),
    		'time'				=> $request->input('time')
    	]);

    	return response([
    		'msg' => 'success'
    		]);
    }

    public function deleteThread(Request $request){
    	Thread::where('id', '=', $request->input('id'))->delete();
    }


}
