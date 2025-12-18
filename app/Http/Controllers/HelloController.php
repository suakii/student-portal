<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function hello() 
    {
        return "Hello Suakii";
    }

    public function view() 
    {
        return view('hello');
    }

    public function data() 
    {
        return view('hello', [
            'school' => '경기과학고',
            'year' => 2025,
        ]);
    }
}
