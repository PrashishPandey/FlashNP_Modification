<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userInfo;
class ViewController extends Controller
{
    public function listuser(){

    	//return userInfo::all();
    	$data=userInfo::all(); // store in varibal data

    	return view('userview',['data'=>$data]);// redirect to userview.blade.php and pass value of data
    }
}
