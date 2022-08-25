<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(20);
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'required|mimes:png,jpg'
        ]);

        $getname = generateFileName($request->image->getClientOriginalName());
        $request->image->move(public_path(env('BLOG_IMAGE_UPLOAD_PATH')), $getname);

        Blog::create([
            'title' => $request->title,
            'text' => $request->text,
            'image' =>  $getname
        ]);


        alert()->success('مقاله با موفقیت ایجاد شد', '');
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        $blog->update([
            'title' => $request->title,
            'text' => $request->text
        ]);

        if($request->has('image')){
            $getname = generateFileName($request->image->getClientOriginalName());
            $request->image->move(public_path(env('BLOG_IMAGE_UPLOAD_PATH')), $getname);

            $blog->update(['image' => $getname]);
        }


        alert()->success('مقاله با موفقیت ویرایش شد', '');
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->back();
    }
}
