<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->get();
        return view("backend.users.index", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        $request->validated();
        User::create($request->all());
        return redirect()->route("users.index")->with("success", "User created successfully");
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
        $user = User::findOrFail($id);
        if(!$user)
        {
            return redirect()->route("users.index")->with("error", "User not found");
        }
        return view('backend.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        if(!$user)
        {
            return redirect()->route("users.index")->with("error", "User not found");
        }
        $user->update($request->all());
        return redirect()->route("users.index")->with("success", "User updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        if(!$user)
        {
            return redirect()->route("users.index")->with("error", "User not found");
        }
        $user->delete();
        return redirect()->route("users.index")->with("success", "User deleted successfully");
    }
}
