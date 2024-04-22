<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tablaController extends Controller
{
    public function tabla(){
        return view('tabla');
    }
}
