<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index() {
        $question = Question::paginate(10);
        $category = Category::all();
        return view('admin.question', compact('question','category'));
    }
    public function create(Request $request) {
        $request->validate([
            'question' => 'required',
            'point' => 'required|integer',
            'category_id' => 'required',
        ]);
        Question::create([
            'question' => $request->question,
            'point' => $request->point,
            'category_id' => $request->category_id,
        ]);
        // dd($request);
        return redirect()->back();
    }
    public function edit(Request $request){
        $request->validate([
            'question' => 'required',
            'point' => 'required|integer',
            'category_id' => 'required',
        ]);

        $question = Question::find($request->id);
        $question->question = $request->question;
        $question->point = $request->point;
        $question->category_id = $request->category_id;
        $question->save();
        return redirect()->back();
    }

    public function delete($id){
        $question = Question::find($id);
        $question->delete();

        return redirect()->back();
    }
}
