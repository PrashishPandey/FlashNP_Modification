<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userInfo;
class Registerontroller extends Controller
{
    //
    function insertuser(Request $request){
    	//print_r($request->input());//show form data
    	$user=new userInfo;

    	$user->user_name= $request->name;
    	$user->user_email = $request->Email;
    	$user->user_pwd = $request->password;
    	$user->user_display = $request->dis_name;
    	$user->user_group = $request->gp;
    	$user->user_contact = $request->mobile;

    	$user->save();//insert the data of regisration
    	return redirect('/listuser');//->with('status',"Insert successfully")
    }
    
}
