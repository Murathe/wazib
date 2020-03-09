<?php

namespace App\Http\Controllers;
use App\Question;
use App\Result;
use App\Test;
use App\User;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function laraquizIndex()
    {
        $questions = Question::count();
        $users = User::whereNull('role_id')->count();
        $quizzes = Test::count();
        $average = Test::avg('result');
        return view('laraquiz/home', compact('questions', 'users', 'quizzes', 'average'));
    }


    public function addNewTherapistToDB(Request $request){
        \DB::table('therapists')->insert([
            'therapists_name' => $request->input('therapist_name'),
            'therapists_email' => $request->input('therapist_email'),
            'therapists_categories' => $request->input('therapist_category'),
        ]);
        echo"Therapist Has Been Saved!!";
    }

    public function displayAllTherapists(Request $request){
        $therapists = \DB::table('therapists')->get();
        return view('display_therapists', ['therapists' => $therapists]);
    }

    public function createAssessment(Request $request){
        return view('create_assessment');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/home');
    }
}
