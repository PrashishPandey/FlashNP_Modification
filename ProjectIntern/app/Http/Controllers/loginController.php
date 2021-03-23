<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userInfo;
use Validator;
use Auth;
class loginController extends Controller
{
    //
    public function checklogins(Request $request){

    	print_r($request->input());

    	$this->validate($request,[
    		'name'=> 'name',
    		'gp'=>'gp',
    		'pwd'=>'pwd'
    	]);

    }
}
