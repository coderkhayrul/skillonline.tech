<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::where('brand_status', 1)->latest()->get();
        return view('backend.pages.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brand.create');
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
            'brand_name' => 'required',
        ]);
        // Brand Image Upload
        if ($request->hasFile('brand_image')) {
            $image = $request->file('brand_image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/brand/' . $image_name);
            $brand_image = 'media/brand/' . $image_name;
        } else {
            $brand_image = null;
        }
        $insert = Brand::create([
            'brand_name' => $request->brand_name,
            'brand_url' => Str::slug($request->brand_name, '-'),
            'brand_slug' => uniqid(),
            'brand_orderby' => $request->brand_orderby,
            'brand_remarks' => $request->brand_remarks,
            'brand_feature' => $request->brand_feature,
            'brand_image' =>  $brand_image,
        ]);
        if ($insert) {
            $notification = array(
                'message' => 'Brand Created Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'brand Created Failed',
                'alert-type' => 'error'
            );
        }
        return redirect()->back();
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
        $brand = Brand::where('brand_slug', $slug)->first();
        if (!$brand) {
            return redirect()->route('admin.brand.index');
        }
        return view('backend.pages.brand.edit', compact('brand'));
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
        $brand = Brand::where('brand_slug', $slug)->first();
        if (!$brand) {
            abort(404);
        }

        $request->validate([
            'brand_name' => 'required',
        ]);

        // Brand Image Upload
        if ($request->hasFile('brand_image')) {
            if (File::exists($request->old_image)) {
                File::delete($request->old_image);
            }
            $image = $request->file('brand_image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/brand/' . $image_name);
            $brand_image = 'media/brand/' . $image_name;
        } else {
            $brand_image = $request->old_image;
        }

        $update = Brand::where('brand_slug', $slug)->update([
            'brand_name' => $request->brand_name,
            'brand_url' => Str::slug($request->brand_name, '-'),
            'brand_slug' => uniqid(),
            'brand_orderby' => $request->brand_orderby,
            'brand_remarks' => $request->brand_remarks,
            'brand_feature' => $request->brand_feature,
            'brand_image' =>  $brand_image,
        ]);
        if ($update) {
            $notification = array(
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'brand Updated Failed',
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
    public function destroy($id)
    {
        //
    }
}
