<?php

namespace App\Http\Controllers;

use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class contentsController extends Controller
{
    public function index(){
        $title = "Contents";
        $data = "this page works fine";
        
        return view('contents/content', compact('title','data'));
    }
    
    // For the image contents**********************
    public function images(Request $request){
        $title = "Content-images";
        $data = "this page works fine";

        $name = $request['imageName'];
        $description = $request['description'];
        $image = $request['image'];
        $urrl = '';
        if ($image) {
            $image = $request->image->store('public/imageCont');
            print($request->image->store('public/imageCont'));
            // print(Storage::putFile('public',$request->file('image')));
            
            $urrl = Storage::url($image);
            // print($urrl);

            // return $urrl;

            // *****to be enabled once running******
            // return redirect('images');
        }else{
            print("please select an image");
        }

        // if ($request['image']) {
        //     $image = $request['image'];

        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('images/' . $filename);

        //     File::make($image)->resize(800, 400)->save($location);

        //     $image = $filename;
        //     print($filename);
        // }

        return view('contents/content-image', compact('title','data','urrl'));
    }

    public function deleteImageContent($id){
        // get the image name
        $imageContent = Table_Name::select('image')->where('id',$id)->first();

        // get path
        $image_path = 'imageCont/';

        // deleting from the folder
        if(file_exists($image_path.$imageContent->image)){
            unlink($image_path.$imageContent->image);
        };

        // deleting from the db
        tableName::where('id',$id)->update(['image'=>'']);

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
