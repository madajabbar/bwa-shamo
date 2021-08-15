<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index() {
        $answer = Answer::all();
        $category = Category::all();

        return view('admin.answer',compact('answer','category'));
    }
    public function create(Request $request) {
        $request->validate([
            'answer' => 'required',
            'category_id' => 'required'
        ]);
        Answer::create([
            'answer' => $request->answer,
            'category_id' => $request->category_id,
        ]);
        // dd($request);
        return redirect()->back();
    }
    public function edit(Request $request){
        $request->validate([
            'answer' => 'required',
            'category_id' => 'required'
        ]);

        $Answer = Answer::find($request->id);
        $Answer->answer = $request->answer;
        $Answer->category_id = $request->category_id;
        $Answer->save();
        return redirect()->back();
    }

    public function delete($id){
        $Answer = Answer::find($id);
        $Answer->delete();

        return redirect()->back();
    }


}
