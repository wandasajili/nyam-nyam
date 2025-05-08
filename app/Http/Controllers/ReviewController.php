<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function indexFe(Request $request){
        $reviews = review::all(); // atau bisa gunakan where, paginate, dsb.
        return view('review.index', compact('reviews'));
       
    }

    public function index(Request $request){
        $reviews = review::get();
        return view('admin.review.index', compact('reviews'));
    }

    public function create(Request $request){
        return view('admin.review.create');
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required",
            "review_text" => "required",
        ]);

        review::create([
            "name" => $request->name,
            "review_text" => $request->review_text,
        ]);
        return redirect()->route('review.index')->with('success', 'Item added succesfully');
    }

    public function edit(Request $request, $id){
        $review = review::find($id);
        return view('admin.review.edit', compact('review'));
    }

    public function update(Request $request, $id){
      
        $request->validate([
            "name" => "required",
            "review_text" => "required",
        ]);

        $review = review::find($id);
        
        $review->update([
            "name" => $request->name,
            "review_text" => $request->review_text,
        ]);
     
        return redirect()->route('review.index')->with('success', 'Item updated successfully');
    }

    public function destroy(Request $request, $id){
        $review = review::findOrFail($id); // akan otomatis 404 jika tidak ada
        $review->delete();
        return redirect()->route('review.index')->with('success', 'Item deleted successfully');
    }
}
