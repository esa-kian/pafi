<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news= NewsModel::select('title','body','id')->take(6)->orderby('id','desc')->get();
        return view('home',compact('news'));
    }
}
