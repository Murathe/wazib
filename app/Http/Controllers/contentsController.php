<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentsController extends Controller
{
    public function index(){
        $title = "Contents";

        return view('contents', compact('title'));
    }
}
