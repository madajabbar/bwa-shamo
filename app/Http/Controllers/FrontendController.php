<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $question = Question::all()->first();
        $answer = Answer::limit(3)->first();
        return view('frontend.form', compact('question'));
    }
    public function answer() {
        $answer = Answer::all()->first();
        return view('frontend.answer',compact('answer'));
    }
}
