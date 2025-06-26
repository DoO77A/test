<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        try {
            $blog = Blog::create([
                'title' => $request->title,
                'content' => $request->content,
                // 'created_at' is automatically set by Laravel, no need to include
            ]);

            return back()->with('success', 'Blog created successfully!');
        } catch (Exception $e) {
            Log::error('Creating blog error : '  . $e->getMessage());
            return back()->with('error', 'Error creating blog: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('dashboard.blogs.show' , compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blogs.edit', compact('blog'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        try {
            $blog->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);

            return back()->with('success', 'Blog updated successfully!');
        } catch (Exception $e) {
            Log::error('Update blog error : '  . $e->getMessage());
            return back()->with('error', 'Error updating blog: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        try {
            if($blog){

                $blog->delete();
            }
            return back()->with('success', 'Blog deleted successfully!');
        } catch (Exception $e) {
            Log::error('delete blog error : '  . $e->getMessage());
            return back()->with('error', 'Error deleting blog: ' . $e->getMessage());
        }

    }
}
