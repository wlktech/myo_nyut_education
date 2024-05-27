<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('backend.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['image' => 'required']);

        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid('banners') . '.' . $ext;
        $image->move(public_path('assets/img/banners/'), $filename);

        Banner::create(['image' => $filename]);
        return redirect()->route('banners.index')->with('success', "Banner Uploaded Successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = Banner::find($id);
        if(!$banner)
        {
            return redirect()->route('banners.index')->with('error', "Banner not found.");
        }
        return view('backend.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);
        if(!$banner)
        {
            return redirect()->route('banners.index')->with('error', "Banner not found.");
        }
        $request->validate(['image' => 'required']);

        File::delete(public_path('assets/img/banners/') . $banner->image);

        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid('banners') . '.' . $ext;
        $image->move(public_path('assets/img/banners/'), $filename);
        $banner->update(["image" => $filename]);

        return redirect()->route('banners.index')->with('success', "Banner Updated Successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        if(!$banner)
        {
            return redirect()->route('banners.index')->with('error', "Banner not found.");
        }
        File::delete(public_path('assets/img/banners/') . $banner->image);
        $banner->delete();
        return redirect()->route('banners.index')->with('success', "Banner Deleted Successfully.");
    }
}
