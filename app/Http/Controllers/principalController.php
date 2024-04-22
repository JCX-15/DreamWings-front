<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class principalController extends Controller
{
    public function home(){ 
        return view('principal');
    }
}
