<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $request->validated();

        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid('posts') . '.' . $ext;
        $image->move(public_path('assets/img/posts/'), $filename);

        Post::create([
            'title' => $request->title,
            'image' => $filename,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }
        return view('backend.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }
        return view('backend.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }
        $request->validate([
            "title" => "required",
            "content" => "required",
        ]);
        if(!$request->file('image')){
            $post->update(["title" => $request->title, "content" => $request->content]);
            return redirect()->route('posts.index')->with('success', 'Post updated successfully');
        }else{
            $request->validate([
                "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            ]);

            File::delete(public_path('assets/img/posts/') . $post->image);

            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $filename = uniqid('posts') . '.' . $ext;
            $image->move(public_path('assets/img/posts/'), $filename);
    
            $post->update([
                'title' => $request->title,
                'image' => $filename,
                'content' => $request->content,
            ]);
            return redirect()->route('posts.index')->with('success', 'Post updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }
        File::delete(public_path('assets/img/posts/') . $post->image);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}
