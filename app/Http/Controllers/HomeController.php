<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;

class HomeController extends Controller
{
    
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('home');
    }
    
}
