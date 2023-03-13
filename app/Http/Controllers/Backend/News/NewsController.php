<?php

namespace App\Http\Controllers\Backend\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();
        return view('backend.pages.news.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news_categories = NewsCategory::where('ncat_status', 1)->get();
        return view('backend.pages.news.news.create', compact('news_categories'));
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
            'ncat_id' => 'required',
            'news_title' => 'required',
            'news_thumbnail' => 'required',
        ]);
        if ($request->hasFile('news_thumbnail')) {
            $image = $request->file('news_thumbnail');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/news/news/' . $image_name);
            $news_thumbnail = 'media/news/news/' . $image_name;
        }
        if ($request->hasFile('news_image')) {
            $image = $request->file('news_image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/news/news/' . $image_name);
            $news_image = 'media/news/news/' . $image_name;
        }
        else{
            $news_image= null;
        }
        $insert= News::create([
            'news_author_id' => $request->news_author_id,
            'ncat_id' => $request->ncat_id,
            'news_title' => $request->news_title,
            'news_url' => Str::slug($request->news_title, '-'),
            'news_slug' => uniqid(),
            'news_thumbnail' => $news_thumbnail,
            'news_image' => $news_image,
            'news_shortDetails' => $request->news_shortDetails,
            'news_details' => $request->news_details,
            'news_tags' => $request->news_tags,
        ]);
        if ($insert) {
            $notification = array(
                'message' => 'News Created Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'News Created Failed',
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
        $news= News::where('news_slug', $slug)->first();
        if(!$news){
            return redirect()->route('admin.news.index');
        }
        return view('backend.pages.news.news.edit', compact('news'));
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
        $news= News::where('news_slug', $slug)->first();
        if(!$news){
            abort(404);
        }
        $request->validate([
            'news_title' => 'required',
            'news_thumbnail' => 'required',
        ]);
        if ($request->hasFile('news_thumbnail')) {
            if (File::exists($request->old_news_thumbnail)) {
                File::delete($request->old_news_thumbnail);
            }
            $image = $request->file('news_thumbnail');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/news/news/' . $image_name);
            $news_thumbnail = 'media/news/news/' . $image_name;
        }
        else{
            $news_thumbnail = $request->old_news_thumbnail;
        }
        if ($request->hasFile('news_image')) {
            if (File::exists($request->old_news_image)) {
                File::delete($request->old_news_image);
            }
            $image = $request->file('news_image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/news/news/' . $image_name);
            $news_image = 'media/news/news/' . $image_name;
        }
        else{
            $news_image = $request->old_news_image;
        }
        $update= News::where('news_slug', $slug)->update([
            'news_author_id' => $request->news_author_id,
            'news_title' => $request->news_title,
            'news_url' => Str::slug($request->news_title, '-'),
            'news_slug' => uniqid(),
            'news_thumbnail' => $news_thumbnail,
            'news_image' => $news_image,
            'news_shortDetails' => $request->news_shortDetails,
            'news_details' => $request->news_details,
            'news_tags' => $request->news_tags,
        ]);
        // if ($update) {
        //     $notification = array(
        //         'message' => 'News Updated Successfully',
        //         'alert-type' => 'success'
        //     );
        // } else {
        //     $notification = array(
        //         'message' => 'News Updated Failed',
        //         'alert-type' => 'error'
        //     );
        // }
        // return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $news = News::where('news_slug', $slug)->first();
        if(!$news){
            abort(404);
        }
        if(File::exists($news->news_thumbnail)){
           File::delete($news->news_thumbnail);
        }
        $delete = News::where('news_slug', $slug)->delete();
        if ($delete) {
            $notification = array(
                'message' => 'News Deleted Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'News Deleted Failed',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }
    public function active($slug){
        $news = News::where('news_slug', $slug)->update(['news_publish' => 1]);
        return redirect()->back();
    }
    public function deactive($slug){
        $news = News::where('news_slug', $slug)->update(['news_publish' => 0]);
        return redirect()->back();
    }
    //News Feature
    public function on($slug){
        $news = News::where('news_slug', $slug)->update(['news_feature' => 1]);
        return redirect()->back();
    }
    public function off($slug){
        $news = News::where('news_slug', $slug)->update(['news_feature' => 0]);
        return redirect()->back();
    }
}
