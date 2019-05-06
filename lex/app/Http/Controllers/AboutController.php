<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function about(){
    	$result = DB::table('about')->pluck('information');
    	return view('about.about', ['infos' => $result]);
    }

    public function aboutedit(Request $request){
    	$result = DB::table('about')->pluck('information');
    	if($request->session()->has('scout')){
    		return view('about.aboutedit', ['infos' => $result]);
    	}
    	else{
    		return redirect('admin_login');
    	}
    }

    public function abouteditdata(Request $request){
    	$about = $request->about;
    	$result = DB::table('about')
    	              ->pluck('information');
    	              //$info = ['info' => $result];
    	$result1 = DB::table('about')
    	              ->where('information', $result)
    	              ->update([
    	              	'information' => $about
    	              ]);
    	return redirect('about');
    }
}
