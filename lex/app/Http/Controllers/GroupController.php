<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    public function group(Request $request){
        if($request->session()->get('user')){
            return view('makeplan.group.group');
        }
        else{
            return redirect('/index');
        }
    }

    public function addgroup(Request $request){
    	$name = $request->uname;
    	$member = $request->member;
    	$firstmember = $request->firstmember;
    	$secondmember = $request->secondmember;
    	$thirdmember = $request->thirdmember;
    	$fourthmember = $request->fourthmember;
    	$day = $request->day;
    	$place = $request->place;
    	$date = $request->date;
    	$email = $request->email;

    	$result = DB::table('groupplan')
    	                   ->insert([
    	                   	'username' => $name,
    	                   	'member' => $member,
    	                   	'firstmember' => $firstmember,
    	                   	'secondmember' => $secondmember,
    	                   	'thirdmember' => $thirdmember,
    	                   	'fourthmember' => $fourthmember,
    	                   	'days' => $day,
    	                   	'place' => $place,
    	                   	'date' => $date,
    	                   	'email' => $email
    	                   ]);
        return redirect('/index');
    }

    public function makeplanhistory(){
    	$result = DB::table('groupplan')
    	                    ->where('username', session('user'))
    	                    ->get();
    	return view('makeplan.group.makeplanhistory', ['history' => $result]);
    }

    public function joingroup(){
    	$result = DB::table('groupplan')
    	                   ->get();
    	                   //['result1' => $result];
    	//$firstmember = $result1->firstmember;
    	//$secondmember = $result1->secondmember;
    	//$thirdmember = $result1->thirdmember;
    	//$fourthmember = $result1->fourthmember;

    	//if($firstmember=='' || $secondmember=='' || $thirdmember=='' || $fourthmember==''){
    	return view('makeplan.joingroup.joingroup', ['group' => $result]);    		
    	
    }

   

    /*public function join(Request $request){
    	$joiner = $request->joiner;

    	$result = DB::table('groupplan')
    	                   //->where('firstmember', null)
    	                   //->orWhere('secondmember', null)
    	                   //->orWhere('thirdmember', null)
    	                   //->orWhere('fourthmember', null)
    	                   //->update([
    	                   	//'firstmember' => $joiner,
    	                   	//'secondmember' => $joiner,
    	                   	//'thirdmember' => $joiner,
    	                   	//'fourthmember' => $joiner
    	                   //]);
                              ->whereNull('firstmember')
                              ->orWhereNull('secondmember')
                              ->orWhereNull('thirdmember')
                              ->orWhereNull('fourthmember')
                              ->update([
                                'firstmember' => 
                              ])

                          }*/

        public function joinpage(Request $request,$id){
            if($request->session()->has('user')){
                return view('makeplan.joingroup.join',compact('id'));
            }
            else{
                return redirect('login');
            }
        }

        public function join(Request $request, $id){
            $name = $request->joinname;
            $check = DB::table('groupplan')->where('id',$id)->first();
            $arr = ['firstmember','secondmember','thirdmember','fourthmember'];
            foreach ($arr as $item) {
               if($check->{$item} == null){
                DB::table('groupplan')
            ->where('id', $id)
            ->update([$item => $name]);
            return redirect('index');
               }
            }
        
            // $result = DB::table('groupplan')
            //                    ->where('firstmember', '')
            //                    ->orWhere('secondmember', '')
            //                    ->orWhere('thirdmember', '')
            //                    ->orWhere('fourthmember', '')
            //                     if(['firstmember' == ''
            //                         ->update
            //                     ])
            //                    ]);
           

        }







}











