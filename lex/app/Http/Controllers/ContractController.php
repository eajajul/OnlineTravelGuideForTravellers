<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{
    public function contract(Request $request){

    $result = DB::table('contract')->get();
    return view('contract.contract', ['infos' => $result]);
  }

   public function addcontract(Request $request){
   	if($request->session()->has('scout')){
   		return view('contract.addcontract');
   	}
   	else{
   		return redirect('/admin_login');
   	}
  }

  public function addcontractdata(Request $request){
    $this->validate($request,[
        //'id' => 'required|max:20',
        'name' => 'required|max:10',
        'position' => 'required',
        'number' => 'required|max:10',
        'email' => 'required|max:20',
    ]);
  	$name = $request->name;
  	$position = $request->position;
  	$number = $request->number;
  	$email = $request->email;
  	$result = DB::table('contract')
  	                   ->insert([
  	                   	'name' => $name,
  	                   	'position' => $position,
  	                   	'number' => $number,
  	                   	'email' => $email
  	                   ]);
  	return redirect('/contract');
  }

  public function editcontract(Request $request, $name){
    if($request->session()->has('scout')){
   	return view('contract.editcontract', ['name' => $name]);
    }
    else{
      return redirect('admin_login');
    }
  }



  public function editcontractdata(Request $request){
    

  	$name = $request->name;
  	$position = $request->position;
  	$number = $request->number;
  	$email = $request->email;

  	$result = DB::table('contract')
  	                  ->where('name', $name)
  	                   ->update([
  	                   	'name' => $name,
  	                   	'position' => $position,
  	                   	'number' => $number,
  	                   	'email' => $email
  	                   ]);

  	return redirect('contract');
  }  












}
