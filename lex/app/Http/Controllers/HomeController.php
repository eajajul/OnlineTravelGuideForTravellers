<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
  public function home(){
    return view('home.homepage');
  }

  public function admin_index(){
      return view('admin.admin');
  }

  public function index(){
		return view('user.index');
	}

	public function signup(){
		return view('user.signup');
	}

  public function home_user(Request $request){
    if($request->session()->get('user')){
      return view('user.data');
    }
    else{
      return redirect('login?LoginFirst');
    }
    //return view('user.data');
  }

  public function hotel(Request $request){
      return view('service.hotels.hotel');
  }
  
      
    	//return response
    	  //   ->with($value = $request->cookie('name'));
    	    //echo $value;
            //echo $value;
    	//return $request->all();

    
}
