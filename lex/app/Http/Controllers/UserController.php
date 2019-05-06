<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Route;

class UserController extends Controller
{
	public function data(Request $request){
      $user = $request->username;
      $pass = $request->password;
      // $request->validate([
      //   'username' => 'required|max:8',
      //   'password' => 'required',
      // ]);
        //return redirect()->route('login');
      
      /*return view('user.data')
        ->with(['text' => '<b>You are logged in</b>'])
        ->with('uname', $user)
        ->with('pass', $pass);*/
        $username = DB::table('users')
                    ->where('uname', $user)
                    ->where('password', $pass)
                    ->first();
                    //->where('password', $pass)->first();
        if($username){
        	$request->session()->put('user',$user);

        	return redirect()->route('home', [$user]);
        	/*return view('user.data')
               ->with(['text' => '<b>You are logged in</b>'])
               ->with('uname', $user)
               ->with('pass', $pass);*/
        }
        else{
        	return redirect('/login?Invalid User=Invalid user and password');
        }
  }

  public function update(Request $request){
    if($request->session()->has('user')){ 
    return view('user.update');
    }
    else{
      return redirect('login');
    }
  }

  public function updatedata(Request $request){
    if($request->pass == $request->cpass){
      $this->validate($request,[
        //'id' => 'required|max:20',
        'name' => 'required|max:10',
        'uname' => 'required',
        'pass' => 'required|max:10',
        'cpass' => 'required|max:10',
        'email' => 'required|max:20',
    ]);
    $result = DB::table('users')
                       ->where('uname', session('user'))
                       ->update([
                        'name' => $request->name,
                        'uname' => $request->uname,
                        'password' => $request->pass,
                        'cpassword' => $request->cpass,
                        'email' => $request->email
                       ]);
    return redirect('index');
    }
    else{
      return redirect('userProfile/update?Password Not Matched');
    }
  }

  public function logout(Request $request){
    $request->session()->flush();
    return redirect('/');
  }

}
