<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function show($id){
    	// echo($id);
    	return view('login',['user' => $id]);
    }
}
