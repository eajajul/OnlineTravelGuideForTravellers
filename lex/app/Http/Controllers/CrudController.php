<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use app\http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function signup(Request $request){
        $this->validate($request,[
        //'id' => 'required|max:20',
        'name' => 'required|max:10',
        'uname' => 'required',
        'pass' => 'required|max:10',
        'email' => 'required|max:20',
    ]);
    	$name = $request->name;
    	$username = $request->uname;
    	$pass = $request->pass;
    	$cpass = $request->cpass;
    	$email = $request->email;

    	$result = DB::table('users')
    	            ->where('uname', $username)->first();

    	if($pass == $cpass){
    		if($result){
    			return redirect('/signup?User=User is Exists');
    		}
    		else{
    			$insert = DB::table('users')
    			             ->insert([
    			             	'name' => $name,
    			             	'uname' => $username,
    			             	'password' => $pass,
    			             	'cpassword' => $cpass,
    			             	'email' => $email
    			             ]);
    			return redirect('/login');
    		}
    	}
    	else{
    		return redirect('/signup?password=Password Not Matched');
    	}
    }
}
