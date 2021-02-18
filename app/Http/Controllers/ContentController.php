<?php

namespace App\Http\Controllers;

class ContentController extends Controller
{
    public function content()
    {
        return view('content');
    }

    public function index()
    {
        $data = [
            'training_content' => '本文',
        ];
        return view('content', $data);
    }

}