<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function post()
    {
        return view('finish');
    }

	public function write1(Request $moji)
	{
	    $data1 = $moji->all();
	    return view('content',compact('data1'));
	}

}