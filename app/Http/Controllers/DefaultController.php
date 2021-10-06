<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function newUser(){
        
        return view('backend.allQuotation');
        
    }
}
