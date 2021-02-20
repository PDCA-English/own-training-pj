<?php

namespace App\Http\Controllers;
use Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = [
            'ビジネスA' => 'ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。',
            'ビジネスB' => 'ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。',
            'ビジネスC' => 'ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。ビジネスの説明が入ります。',
        ];
        return view('home', ['data' => $data]);
    }
    public function post()
    {
        return view('finish');
    }

	public function write1(Request $moji)
	{
	    $data1 = $moji::all();
	    return view('content',compact('data1'));
	}

}