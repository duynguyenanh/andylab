<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(Request $request){
    	$newContact = Contact::create([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'phone'=>$request->phone,
    		'message'=>$request->message
    	]);

    	return view('welcome');
    }
}
