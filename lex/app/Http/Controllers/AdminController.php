<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	public function admin_index(Request $request){
		$admin = $request->adminname;
		$apass = $request->adminpassword;

		$result = DB::table('admin')
		                   ->where('AdminName', $admin)
		                   ->where('Password', $apass)
		                   ->first();
		if($result)
		{
			if($result->type=="admin")
			{
                $request->session()->put('admin', 'Okey');
			    return view('admin.homepage');
			}
			else
			{
				$request->session()->put('scout', 'Ok');
			    return view('admin.scout');

			}
			
		}
		else{
		    return view('admin.admin');	
		}

	}

	public function admin_homepage(Request $request){
		if($request->session()->has('admin')){
			return view('admin.homepage');
		}
		else{
			return redirect('admin_login');
		}
  }

	public function local_user(Request $request){

		if($request->session()->has('admin')){
			$result = DB::table('users')->pluck('uname');
     		return view('admin.localuser', ['users' => $result]);
     	}
     	else{
     		return redirect('admin_login');
     	}
	}

	public function profile_user(Request $request, $name){
		if($request->session()->get('admin')){
		$result = DB::table('users')
		                   ->where('uname', $name)
		                   ->first();
		                   //dd($result);
		return view('admin.profileuser', ['profile' => $result]);
		}
		else{
			return redirect('admin_login');
		}
	}

	public function delete_user($id){

		$result = DB::table('users')
		          ->where('uname', $id)
		          ->delete();
		$result1 = DB::table('users')->pluck('uname');
		return view('admin.localuser', ['users' => $result1]);

	}

	public function addhotel(Request $request){

		if($request->session()->has('admin')){
			return view('admin.addhotel');
		}
		else{
			return redirect('admin_login');
		}
	}

	public function addhoteldata(Request $request){

		



		$id = $request->id;
		$name = $request->name;
		$location = $request->location;
		$address = $request->address;
		$rate = $request->rate;

		$result = DB::table('hotel')
		                 ->insert([
		                 	'id' => $id,
		                 	'name' => $name,
		                 	'location' => $location,
		                 	'address' => $address,
		                 	'rate' => $rate
		                 ]);
		return redirect()->route('aindex', ['added']);
	}

	public function showhotel(Request $request){
		if($request->session()->has('admin')){
		$result = DB::table('hotel')
		                   ->get();
		return view('admin.showhotel', ['hotel' => $result]);
	    }
	    else{
	    	return redirect('admin_login');
	    }
	}

	public function edit_hotel(Request $request, $name){
		if($request->session()->has('admin')){
			$result = DB::table('hotel')->where('name', $name)->first();
			return view('admin.edithotel', ['hotel' => $result]);
		}
		else{
			return redirect('admin_login');
		}
	}

	public function edit_hotel_data(Request $request, $name){
		$this->validate($request,[
		//'id' => 'required|max:20',
        'name' => 'required|max:10',
        'location' => 'required',
        'address' => 'required|max:10',
        'rate' => 'required|max:20',
    ]);
		$result = DB::table('hotel')
		                   ->where('name', $name)
		                   ->update([
		                   	'id' => $request->id,
		                   	'name' => $request->name,
		                   	'location' => $request->location,
		                   	'address' => $request->address,
		                   	'rate' => $request->rate
		                   ]);
		return redirect('admin_index');
	}

	public function delete_hotel($name){
		$result = DB::table('hotel')->where('name', $name)->delete();
		return redirect('ShowAllHotel');
	}

	public function addflight(Request $request){
		if($request->session()->has('admin')){
			return view('admin.addflight');
		}
		else{
			return redirect('admin_login');
		}
	}

	public function addflightdata(Request $request){

		$from = $request->from;
		$to = $request->to;
		$rate = $request->rate;
		$time = $request->time;

		$result = DB::table('flight')
		                 ->insert([
		                 	'home' => $from,
		                 	'away' => $to,
		                 	'rate' => $rate,
		                 	'time' => $time
		                 ]);
		return redirect()->route('aindex', ['added']);
	}

	public function showflight(Request $request){
		if($request->session()->has('admin')){
		$result = DB::table('flight')
		                   ->get();
		return view('admin.showflight', ['flight' => $result]);
	    }
	    else{
	    	return redirect('admin_login');
	    }
	}

	public function showgroups(Request $request){
		if($request->session()->has('admin')){
			$result = DB::table('groupplan')
			                   ->get();
	    return view('admin.showgroup', ['group' => $result]);
		}
		else{
			return redirect('admin_login');
		}
	}

	public function delete_group($id){
		$result = DB::table('groupplan')->where('id', $id)->delete();
		return redirect('ShowGroups');
	}


	public function logout(Request $request){
		$request->session()->flush();
		return redirect('/admin_login');
	}

}








