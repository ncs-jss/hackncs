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
    public function subscribe()
    {
    	$data = array('email' => Input::get('email'));
    	 $rules = array('email'=>'required|unique:subscription');
      $validator = Validator::make($data, $rules);
   if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('/')->withInput()->withErrors($validator->errors());
  }
  else 
  	{
  		DB::table('subscription')->insert(['email'=>$data['email']]);
		$dat = "Thank You for Subscribing! Will Keep You Updated :)";
		return \View::make('success',['data'=>$dat]);
	}


    }
    public function feed()
    {
	$data = Input::all();

	 $rules = array('name' => 'required','admission_number' => 'required','email'=>'required|unique:registration','feedback'=>'required','lab'=>'required');
      $validator = Validator::make($data, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('/')->withInput()->withErrors($validator->errors());
  }
  else 
  	{
  		DB::table('feedback')->insert(['name'=>$data['name'],'email'=>$data['email'],'admission_number'=>$data['admission_number'],'feedback'=>$data['feedback'],'lab'=>$data['lab']]);
		$dat = "Thank you for feedback! See you soon :)";
		return \View::make('success',['data'=>$dat]);
	}


    }
    public function index()
    {
    	return \View::make('index');
    }
     public function feedback()
    {
    	return \View::make('feedback');
    }
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
