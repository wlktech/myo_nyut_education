<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::latest()->get();
        return view("backend.reviews.index", compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(["image" => 'required']);

        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid('reviews') . '.' . $ext;
        $image->move(public_path('assets/img/reviews/'), $filename);

        Review::create(['image' => $filename]);
        return redirect()->route('reviews.index')->with('success', "Review Uploaded Successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Review::find($id);
        if(!$review){
            return redirect()->route('reviews.index')->with('error', "Review Not Found.");
        }
        return view('backend.reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $review = Review::find($id);
        if(!$review){
            return redirect()->route('reviews.index')->with('error', "Review Not Found.");
        }
        return view('backend.reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $review = Review::find($id);
        if(!$review){
            return redirect()->route('reviews.index')->with('error', "Review Not Found.");
        }
        $request->validate(["image" => "required"]);
        
        File::delete(public_path('assets/img/banners/') . $review->image);

        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid('review') . '.' . $ext;
        $image->move(public_path('assets/img/reviews/'), $filename);
        $review->update(["image" => $filename]);

        return redirect()->route('reviews.index')->with('success', "Review Updated Successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::find($id);
        if(!$review){
            return redirect()->route('reviews.index')->with('error', "Review Not Found.");
        }
        File::delete(public_path('assets/img/banners/') . $review->image);
        $review->delete();
        return redirect()->route('reviews.index')->with('success', "Review Deleted Successfully.");
    }
}
