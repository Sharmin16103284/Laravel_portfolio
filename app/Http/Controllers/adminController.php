<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact; 

class adminController extends Controller
{
	// admin index
    function index()
    {
    	return view('admin/admin_index');
    }
    // admin new message
    function new_message()
    {
    	$msgs = contact::all();
    	return view('admin/new_msg',compact('msgs'));
    }
    // arch_message
    function arch_message()
    {
    	
    	return view('admin/arch_message');
    }




}
