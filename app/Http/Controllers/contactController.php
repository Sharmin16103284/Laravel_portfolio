<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class contactController extends Controller
{
    function contact()
    {
    	return view('index');
    }

    function insert(Request $request)
    {
    	contact::insert([
    		'userName'=> $request-> userName,
    		'userEmail'=> $request-> userEmail,
    		'userPhone'=> $request-> userPhone,
    		'userMsg'=> $request-> userMsg,
    	]);

    	return back();
    }

    function viewdata() 
    {
    	$datas = contact::all();
    	return view('viewContact',compact('datas'));
    }

    function single_view($contact_id)
    {
    	$single_view = contact::findOrFail($contact_id);
    	return view('single_view',compact('single_view'));
    }

    function update(Request $request)
    {
    	contact::findOrFail($request->id)->update([
    		'userName'=> $request-> userName,
    		'userEmail'=> $request-> userEmail,
    		'userPhone'=> $request-> userPhone,
    		'userMsg'=> $request-> userMsg,
    	]); 
    	return back();
    }

    function delete($delete_id)
    {
    	contact::findOrFail($delete_id)->delete();

    	return back();
    }

    //end
}
