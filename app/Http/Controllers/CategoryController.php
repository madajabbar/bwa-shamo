<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::paginate(10);
        return view('admin.category',compact('category'));
    }

    public function create(Request $request) {
        $request->validate([
            'feeling' => 'required'
        ]);
        Category::create([
            'feeling' => $request->feeling,
        ]);
        // dd($request);
        return redirect()->back();
    }
    public function edit(Request $request){
        $request->validate([
            'feeling' => 'required'
        ]);

        $category = Category::find($request->id);
        $category->feeling = $request->feeling;
        $category->save();
        return redirect()->back();
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();

        return redirect()->back();
    }
}
//
