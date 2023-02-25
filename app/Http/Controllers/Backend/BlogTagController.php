<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = BlogTag::latest()->get();
        return view('backend.pages.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.tag.create');
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
            'tag_name' => 'required',
        ]);
        $insert = BlogTag::create([
            'tag_name' => $request->tag_name,
            'tag_url' => Str::slug($request->tag_name, '-'),
            'tag_slug' => uniqid(),
            'tag_orderby' => $request->tag_orderby,
        ]);
        if ($insert) {
            $notification = array(
                'message' => 'Tag Inserted Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Tag Inserted Failed',
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
        $tags= BlogTag::where('tag_slug', $slug)->first();
        if(!$tags){
            return redirect()->route('admin.tag.index');
        }
        return view('backend.pages.tag.edit', compact('tags'));
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
        $tags= BlogTag::where('tag_slug', $slug)->first();
        if(!$tags){
            abort(404);
        }
        $request->validate([
            'tag_name' => 'required',
        ]);
        $update =BlogTag::where('tag_slug', $slug)->update([
            'tag_name' => $request->tag_name,
            'tag_url' => Str::slug($request->tag_name, '-'),
            'tag_slug' => uniqid(),
            'tag_orderby' => $request->tag_orderby,
        ]);
        if ($update) {
            $notification = array(
                'message' => 'Tag Updated Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Tag Updated Failed',
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
        $tags= BlogTag::where('tag_slug', $slug)->first();
        if(!$tags){
            abort(404);
        }
        $delete =BlogTag::where('tag_slug', $slug)->delete();
        if ($delete) {
            $notification = array(
                'message' => 'Tag Deleted Successfully',
                'alert-type' => 'success'
            );
        }
        else {
            $notification = array(
                'message' => 'Tag Deleted Failed',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function active($slug)
    {
        $tags = BlogTag::where('tag_slug', $slug)->update(['tag_status' => 1]);
        return redirect()->back();
    }
    public function deactive($slug)
    {
        $tags = BlogTag::where('tag_slug', $slug)->update(['tag_status' => 0]);
        return redirect()->back();
    }
}
