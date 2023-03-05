<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
    public function edit($slug)
    {
        $category = BlogCategory::where('bc_slug', $slug)->first();
        if (!$category) {
            return redirect()->route('admin.category.index');
        }
        return view('backend.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $category = BlogCategory::where('bc_slug', $slug)->first();
        if (!$category) {
            abort(404);
        }

        $request->validate([
            'bc_name' => 'required',
        ]);
        // Category Image Upload
        if ($request->hasFile('bc_image')) {
            if (File::exists($request->old_image)) {
                File::delete($request->old_image);
            }
            $image = $request->file('bc_image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/category/' . $image_name);
            $bc_image = 'media/category/' . $image_name;
        } else {
            $bc_image = $request->old_image;
        }

        $update = BlogCategory::where('bc_slug', $slug)->update([
            'bc_name' => $request->bc_name,
            'bc_url' => Str::slug($request->bc_name, '-'),
            'bc_slug' => uniqid(),
            'bc_orderby' => $request->bc_orderby,
            'bc_remarks' => $request->bc_remarks,
            'bc_image' =>  $bc_image,
        ]);
        if ($update) {
            $notification = array(
                'message' => 'Category Updated Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Category Updated Failed',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $category = BlogCategory::where('bc_slug', $slug)->first();
        if (!$category) {
            abort(404);
        }
        if (File::exists($category->bc_image)) {
            File::delete($category->bc_image);
        }
        $delete = BlogCategory::where('bc_slug', $slug)->delete();
        if ($delete) {
            $notification = array(
                'message' => 'Category Deleted Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Category Deleted Failed',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }
    //Category active status
    public function active($slug)
    {
        $category = BlogCategory::where('bc_slug', $slug)->update(['bc_active' => 1]);
        return redirect()->back();
    }
    public function deactive($slug)
    {
        $category = BlogCategory::where('bc_slug', $slug)->update(['bc_active' => 0]);
        return redirect()->back();
    }
}
