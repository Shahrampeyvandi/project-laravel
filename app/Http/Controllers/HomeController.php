<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     Create a new controller instance.
     
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //قبل از هدایت شدن به صفحه ابتدا وارد صفحه لاگین میشویم
        $this->middleware('admin');
    }

    /**
    
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_user = auth() -> user();  //یوزری که لاگین کرده را برمیگرداند    ...
        if ($current_user -> admin) {
            return view('dashboard.admin');
        } else {
            
            return view('dashboard.user');

        }
    }
}
