<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Support\Facades\Input;
use View;
use Validator;
use Redirect;

class PagesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
public function home()
{/*
	$count = DB::table('registration')->get();
*/	//if(count($count)>0)
	if(true)
	{
	return \View::make('index_reg');
	}
	else
	{
	return \View::make('index_full');

	}
}
public function register()
{
	$data = Input::all();

	 $rules = array('name' => 'required','admission_number' => 'required','email'=>'required|unique:registration','mobile'=>'required','choose'=>'required','attend'=>'required');
      $validator = Validator::make($data, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('/')->withInput()->withErrors($validator->errors());
  }
  else 
  	{
  		DB::table('registration')->insert(['name'=>$data['name'],'email'=>$data['email'],'mobile'=>$data['mobile'],'admission_number'=>$data['admission_number'],'choose'=>$data['choose'],'attend'=>$data['attend']]);
		$dat = "Thank you for registering! See you soon :)";
		return \View::make('success',['data'=>$dat]);
	}
}


}
