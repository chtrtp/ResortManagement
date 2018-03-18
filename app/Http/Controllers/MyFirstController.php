<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function indexResort()
    {
        $resort = \App\Todo::all();
        return view('index')->with(compact('resort'));
    }
}
