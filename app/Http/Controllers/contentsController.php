<?php

namespace App\Http\Controllers;

use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Image;

class contentsController extends Controller
{
    public function index(){
        $title = "Contents";
        $data = "this page works fine";
        
        return view('contents/content', compact('title','data'));
    }
    
    // For the image contents save new and retrieve**********************
    public function images(Request $request){
        $title = "Content-images";
        $data = "this page works fine";

        

        return view('contents/content-image', compact('title','data'));
    }

    public function storeImages(Request $request){
        // $fileName = '';
        $image = $request['image'];
        if ($image) {
            // get file name with extension
            $fileNameWithExt = $image->getClientOriginalName();

            // get file name alone
            $file = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // get file extension
            $ext = $image->getClientOriginalExtension();
            
            // file name to store
            $fileName = $file.'_'.time().'.'.$ext;
            
            $image = $request->image->storeAs('public/imageCont', $fileName);
            // $urrl = Storage::url($image);
            
            // *****to be enabled once running******
            // return redirect('images');
        }else{
            $fileName = "noimage.png";
            print("please select an image");
        }

        // create the post
        $imgCont = new Image;
        $imgCont->title = $request['title'];
        $imgCont->description = $request['description'];
        $imgCont->imageName =  $fileName;
        $imgCont->save();
    }




    public function deleteImageContent($id){
        // get the image name
        $imageContent = Image::select('image')->where('id',$id)->first();

        // get path
        $image_path = 'imageCont/';

        // deleting from the folder
        if(file_exists($image_path.$imageContent->image)){
            unlink($image_path.$imageContent->image);
        };

        // deleting from the db
        Image::where('id',$id)->update(['image'=>'']);

    }



    // *************For Video Content**********************
    public function videos(Request $request){
        $title = "Content-videos";
        $data = "this page works fine";
        
        $name = $request['videoName'];
        $description = $request['description'];
        $video = $request['video'];
        print($video);
        $urrl = '';
        if ($video) {
            // $video = $request->video->store('public/videoCont');
            print($request->video->store('public/videoCont'));
            // print(Storage::putFile('public',$request->file('image')));
            
            // $urrl = Storage::url($video);
            // print($urrl);

            // return $urrl;

            // *****to be enabled once running******
            // return redirect('images');
        }else{
        //     print("please select a video");
        };

        return view('contents/content-video', compact('title','data'));
    }




    // for the text contents
    public function texts(Request $request){
        $title = "Content-texts";
        $data = "this page works fine";

        $title = $request['title'];
        $description = $request['description'];
        $textContent = $request['textContent'];
        $file = $request['file'];
        print($file);

        if($file){
            print($request->file->store('public/textCont'));
        }

        
        return view('contents/content-text', compact('title','data'));
    }

    public function audios(Request $request){
        $title = "Content-audio";
        $data = "this page works fine";

        $title = $request['title'];
        $description = $request['description'];
        $file = $request['file'];
        

        if($file){
            print($request->file->store('public/audioCont'));
        }
        
        return view('contents/content-audio', compact('title','data')); 
    }
}
