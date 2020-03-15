<?php

namespace App\Http\Controllers;

use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UploadPhotoRequest;
use App\Content;
use App\Tag;

class contentsController extends Controller
{
    public function index(){
        $title = "Contents";
        $data = "this page works fine";
        
        return view('contents/content', compact('title','data'));
    }

    // for the contents
    public function contents(Request $request){
        $title = "Content";
        $data = "this page works fine";

        $contents = Content::all()->toArray();
        $tags = Tag::all()->toArray();
        
        return view('contents/content-text', compact('title','data','contents','tags'));
    }


    public function storeContents(request $request){
        $file = $request['file'];
        if ($file) {
            // get file name with extension
            $fileNameWithExt = $file->getClientOriginalName();

            // get file name alone
            $fileNm = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // get file extension
            $ext = $file->getClientOriginalExtension();
            
            // file name to store
            $fileNames = $fileNm.'_'.time().'.'.$ext;
            
            $files = $request->file->storeAs('public/contents', $fileNames);
            // print($request->video->store('public/videoCont'));
            // $urrl = Storage::url($image);
            
            
        }else{
        //     print("please select a video");
        };

        // create the new image
        $textCont = new Content;
        $textCont->title = $request['title'];
        $textCont->content = $request['content'];   
        $textCont->tag = $request['tag']; 
        print($textCont->tag);  
        $textCont->file =  $fileNames;
        $textCont->save();


        return redirect('content');
    }

    public function storeTags(request $request){
        $newTag = new Tag;
        $newTag->name = $request['name'];
        $newTag->save();

        return redirect('content');
    }
}