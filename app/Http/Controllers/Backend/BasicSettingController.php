<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicSetting;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class BasicSettingController extends Controller
{
    public function index()
    {
        $setting = BasicSetting::first();
        return view('backend.pages.setting.basicsetting.index', compact('setting'));
    }
    public function update(Request $request)
    {
        //Logo
        if ($request->hasFile('bs_logo')) {
            if (File::exists($request->old_bs_logo)) {
                File::delete($request->old_bs_logo);
            }
            $image = $request->file('bs_logo');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/setting/' . $image_name);
            $bs_logo = 'media/setting/' . $image_name;
        }
         else {
            $bs_logo = $request->old_bs_logo;
        }
        //footer logo
        if ($request->hasFile('bs_f_logo')) {
            if (File::exists($request->old_bs_f_logo)) {
                File::delete($request->old_bs_f_logo);
            }
            $image = $request->file('bs_f_logo');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/setting/' . $image_name);
            $bs_f_logo = 'media/setting/' . $image_name;
        }
         else {
            $bs_f_logo = $request->old_bs_f_logo;
        }
        //fabicon Logo
        if ($request->hasFile('bs_fabicon')) {
            if (File::exists($request->old_bs_fabicon)) {
                File::delete($request->old_bs_fabicon);
            }
            $image = $request->file('bs_fabicon');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/setting/' . $image_name);
            $bs_fabicon = 'media/setting/' . $image_name;
        }
         else {
            $bs_fabicon = $request->old_bs_fabicon;
        }
        //favicon Logo
        if ($request->hasFile('bs_favicon')) {
            if (File::exists($request->old_bs_favicon)) {
                File::delete($request->old_bs_favicon);
            }
            $image = $request->file('bs_favicon');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('media/setting/' . $image_name);
            $bs_favicon = 'media/setting/' . $image_name;
        }
         else {
            $bs_favicon = $request->old_bs_favicon;
        }
        $setting= BasicSetting::where('bs_id', 1)->update([
            'bs_company' => $request->bs_company,
            'bs_url' => $request->bs_url,
            'bs_title' => $request->bs_title,
            'bs_logo' => $bs_logo,
            'bs_f_logo' => $bs_f_logo,
            'bs_fabicon' => $bs_fabicon,
            'bs_favicon' => $bs_favicon,
        ]);
        $notification = array(
            'message' => 'Basic Setting Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
