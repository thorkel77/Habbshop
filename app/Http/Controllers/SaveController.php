<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Save;
use Auth;
use Voyager;

class SaveController extends Controller
{
    public function redirect_to_login(){
    	return redirect('login'); // with message
    }

    public function toggle(Request $request){
    	
    	if($request->ajax()){
    		if(!Auth::guest()){

    			if( !Auth::user()->saves->contains($request->product_id) ){
	    			Auth::user()->saves()->attach($request->product_id);
	    			$toggle = 'on';
	    		} else {
	    			Auth::user()->saves()->detach($request->product_id);
	    			$toggle = 'off';
	    		}
    			return response()->json(array('redirect' => false, 'toggle' => $toggle));
    		}
    	}

    	return response()->json(array('redirect' => true, 'url' => '/login'));
    }

    public function saves(){
    	if(Auth::guest()){
    		return redirect('/')->with( array('alert' => 'Please login before viewing your saves', 'alert-type' => 'danger') );
    	}
    	$user = Auth::user();
        $saved_products = $user->saves()->orderBy('product_saves.created_at', 'DESC')->paginate(15);
    	return view('theme::user.saves', compact('user', 'saved_products'));
    }
}
