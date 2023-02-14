<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::where('bc_status', 1)->latest()->get();
        return view('backend.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.category.create');
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
            'bc_name' => 'required',
        ]);
        // Brand Image Upload
        if ($request->hasFile('bc_image')) {
            $image = $request->file('bc_image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/category/' . $image_name);
            $bc_image = 'media/category/' . $image_name;
        } else {
            $bc_image = null;
        }
        $insert = BlogCategory::create([
            'bc_name' => $request->bc_name,
            'bc_url' => Str::slug($request->bc_name, '-'),
            'bc_slug' => uniqid(),
            'bc_orderby' => $request->bc_orderby,
            'bc_remarks' => $request->bc_remarks,
            'bc_image' =>  $bc_image,
        ]);
        if ($insert) {
            $notification = array(
                'message' => 'Category Inserted Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Category Inserted Failed',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
