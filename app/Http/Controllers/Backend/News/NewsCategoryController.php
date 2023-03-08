<?php

namespace App\Http\Controllers\Backend\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = NewsCategory::latest()->get();
        return view('backend.pages.news.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.news.category.create');
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
            'ncat_name' => 'required',
        ]);
        // Brand Image Upload
        if ($request->hasFile('ncat_thumbnail')) {
            $image = $request->file('ncat_thumbnail');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/news/category/' . $image_name);
            $ncat_thumbnail = 'media/news/category/' . $image_name;
        } else {
            $ncat_thumbnail = null;
        }
        $insert = NewsCategory::create([
            'ncat_name' => $request->ncat_name,
            'ncat_url' => Str::slug($request->ncat_name, '-'),
            'ncat_slug' => uniqid(),
            'ncat_order' => $request->ncat_order,
            'ncat_details' => $request->ncat_details,
            'ncat_thumbnail' =>  $ncat_thumbnail,
        ]);
        if ($insert) {
            $notification = array(
                'message' => 'NewsCategory Created Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'NewsCategory Created Failed',
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
