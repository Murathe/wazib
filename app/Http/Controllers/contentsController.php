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
    
    public function images(Request $request){
        $title = "Content-images";
        $data = "this page works fine";

        $name = $request['imageName'];
        $description = $request['description'];
        $image = $request['image'];


        return view('contents/content-image', compact('title','data'));
    }

    public function videos(Request $request){
        $title = "Content-videos";
        $data = "this page works fine";
        
        $name = $request['imageName'];
        $description = $request['description'];
        $image = $request['image'];

        return view('contents/content-video', compact('title','data'));
    }

    public function texts(Request $request){
        $title = "Content-texts";
        $data = "this page works fine";

        $name = $request['imageName'];
        $description = $request['description'];
        $image = $request['image'];
        
        return view('contents/content-text', compact('title','data'));
    }

    public function audios(Request $request){
        $title = "Content-audio";
        $data = "this page works fine";

        $name = $request['imageName'];
        $description = $request['description'];
        $image = $request['image'];
        
        return view('contents/content-audio', compact('title','data')); 
    }
}
