<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth; //don't forget this line.

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['posts' => Auth::user()->posts()->orderBy('created_at', 'DESC')]);
    }
}
