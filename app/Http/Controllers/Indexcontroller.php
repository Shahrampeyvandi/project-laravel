<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;

class Indexcontroller extends Controller
{
    public function main(){

        $header=Header::first(); //fetch as database
        
        return view('index',compact('header'));

    }
}
