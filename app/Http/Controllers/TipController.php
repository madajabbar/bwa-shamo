<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tip;
use Illuminate\Http\Request;

class TipController extends Controller
{
    public function index() {
        $answer = Tip::all();
        $category = Category::all();

        return view('admin.answer',compact('answer','category'));
    }
    public function create(Request $request) {
        $request->validate([
            'answer' => 'required',
            'category_id' => 'required'
        ]);
        Tip::create([
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

        $tip = Tip::find($request->id);
        $tip->answer = $request->answer;
        $tip->category_id = $request->category_id;
        $tip->save();
        return redirect()->back();
    }

    public function delete($id){
        $tip = Tip::find($id);
        $tip->delete();

        return redirect()->back();
    }
}
