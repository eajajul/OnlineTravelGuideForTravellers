<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function hotels(Request $request, $id){

    	$result = DB::table('hotel')
    	               ->where('location', $id)
    	               ->get();

    	return view('service.hotels.showhotel') 
    	           ->with(['hotels' => $result]);

    }

    public function hotelbooking(Request $request, $name){
        $result = DB::table('hotel')->where('name', $name)->first();
        if($request->session()->has('user')){
            return view('service.hotels.hotelbooking', ['info' => $result]);
        }
        else{
            $id = 'Login First & Go For Booking Again';
            return redirect()->route('hotelindex', ['id' => $id]);
        }

    }

    public function hotelindex(Request $request, $id){
        return view('user.index', ['id' => $id]);
    }

    public function flight(){
    	return view('service.flight.flight');
    }

    public function showflight(Request $request){
    	$from = $request->from;
    	$to = $request->to;
    	$result = DB::table('flight')
    	               ->where('home', $from)
    	               ->where('away', $to)
    	               ->get();
    	return view('service.flight.showflights', ['flight' => $result]);
    }


    public function flightbook(Request $request, $from, $to){
        $result = DB::table('flight')
                           ->where('home', $from)
                           ->where('away', $to)
                           ->first();
        return view('service.flight.flightbook', ['info' => $result]);
    }  

    public function hotelbookingdata(Request $request){
        $username = $request->uname;
        $hotelname = $request->hotelname;
        $rate = $request->rate;
        $date = $request->date;
        $email = $request->email;

        $result = DB::table('hotelbooking')
                            ->insert([
                                'username' => $username,
                                'hotel' => $hotelname,
                                'rate' => $rate,
                                'date' => $date,
                                'email' => $email
                            ]);
        return redirect('/index');
    }

    public function hotelhistory(Request $request){
        if($request->session()->has('user')){
        $result = DB::table('hotelbooking')
                            ->where('username', session('user'))
                            ->get();
        return view('service.hotels.hotelhistory', ['hotel' => $result]);
        }
        else{
            return redirect('login');
        }
    }

    public function flightbookdata(Request $request){
        $username = $request->uname;
        $from = $request->from;
        $to = $request->to;
        $rate = $request->rate;
        $date = $request->date;
        $time = $request->time;

        $result = DB::table('flightbook')
                            ->insert([
                                'username' => $username,
                                'home' => $from,
                                'away' => $to,
                                'rate' => $rate,
                                'date' => $date,
                                'time' => $time
                            ]);
        return redirect('/index');
    }  

    public function flighthistory(Request $request){
        if($request->session()->has('user')){
        $result = DB::table('flightbook')
                           ->where('username', session('user'))
                           ->get();
        return view('service.flight.flighthistory', ['flight' => $result]);
        }
        else{
            return redirect('login');
        }
    }

    public function update_hotelinfo(Request $request, $id){
        if($request->session()->has('user')){
            $result = DB::table('hotelbooking')->where('id', $id)->first();
            return view('service.hotels.update_hotel', ['info' => $result]);
        }
        else{
            return redirect('login');
        }
    }

    public function delete_hotelinfo($id){
        $result = DB::table('hotelbooking')->where('id', $id)->delete();
        return redirect('hotelhistory');
    }

     public function delete_flightinfo($id){
        $result = DB::table('flightbook')->where('id', $id)->delete();
        return redirect('flighthistory');
    }





}


















