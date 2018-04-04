<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function content()
    {
    	return view('content');
    }
    public function detail()
    {
    	return view('detail');
    }
}
