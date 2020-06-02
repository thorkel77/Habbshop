<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Voyager;
use Hash;
use Auth;

class UserController extends Controller
{
    public function edit(){
    	return view('theme::user.edit');
    }

    public function edit_post(Request $request){
    	$user = User::find(Auth::user()->id);

    	// if the user has changed their email address
    	if($request->email != $user->email){
    		// Check if the email already exists with another user
    		$email_exists = User::where('email', '=', $request->email)->first();
    		if(count($email_exists) >= 1){
    			return redirect('/edit_profile')->with( array('alert' => 'Sorry, this email address is already in use by another user.', 'alert-type' => 'danger') );
    		}
    	}

    	$user->name = $request->name;
    	$user->email = $request->email;

    	if(isset($request->password) && !empty($request->password)){
    		$user->password = Hash::make($request->password);
    	}

    	$user->save();

    	return redirect('/edit_profile')->with( array('alert' => 'Your user information has been successfully updated!', 'alert-type' => 'success') );
    }
}
