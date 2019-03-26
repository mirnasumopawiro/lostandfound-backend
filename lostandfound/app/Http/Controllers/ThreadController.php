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
    	$data['user_id']		= $request->user()->id;
    	$data['description']	= $request->input('description');
    	$data['photo']			= $request->input('photo');
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
    		'description'		=> $request->input('description'),
    		'photo'				=> $request->input('photo'),
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
