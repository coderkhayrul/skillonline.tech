<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialmedia= SocialMedia::first();
        return view('backend.pages.setting.socialmedia.index', compact('socialmedia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        $socialmedia= SocialMedia::first();
        $socialmedia-> sm_facebook = $request->sm_facebook;
        $socialmedia-> sm_twitter = $request->sm_twitter;
        $socialmedia-> sm_youtube = $request->sm_youtube;
        $socialmedia-> sm_instagram = $request->sm_instagram;
        $socialmedia-> sm_linkedin = $request->sm_linkedin;
        $socialmedia-> sm_pinterest = $request->sm_pinterest;
        $socialmedia->update();
        $notification = array(
                'message' => 'SocialMedia Updated Successfully',
                'alert-type' => 'success'
            );
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
