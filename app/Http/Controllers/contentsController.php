<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentsController extends Controller
{
    public function index(){
        $title = "Contents";
        $data = "this page works fine";
        
        return view('contents/content', compact('title','data'));
    }
    
    public function images(){
        $title = "Content-images";
        $data = "this page works fine";
        
        return view('contents/content-image', compact('title','data'));
    }

    public function videos(){
        $title = "Content-videos";
        $data = "this page works fine";
        
        return view('contents/content-video', compact('title','data'));
    }

    public function texts(){
        $title = "Content-texts";
        $data = "this page works fine";
        
        return view('contents/content-text', compact('title','data'));
    }
}
