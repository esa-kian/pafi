<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsModel;

class NewsController extends Controller
{
    //
    public function all(){
    	$news= NewsModel::select('title','body','id')->orderby('id','desc')->get();
    	return view('layouts.news.All',compact('news'));
    }
    public function show($id){
    	$news= NewsModel::select('title','body','id')->where('id',$id)->get();
    	return view('layouts.news.news',compact('news'));
    }


}
