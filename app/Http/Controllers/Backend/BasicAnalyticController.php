<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\BasicAnalytic;

class BasicAnalyticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $analytic= BasicAnalytic::first();
        return view('backend.pages.setting.analytic.index', compact('analytic'));
    }

    public function update(Request $request)
    {
        $analytic= BasicAnalytic::where('analytic_id', 1)->update([
            'google_analytic' => $request->google_analytic,
            'facebook_pixel' => $request->facebook_pixel,
            'bing_analytic' => $request->bing_analytic,
            'google_site_verification' => $request->google_site_verification,
            'facebook_site_verification' => $request->facebook_site_verification,
            'bing_site_verification' => $request->bing_site_verification,
            'domain_verification' => $request->domain_verification,
            'custom_header_script' => $request->custom_header_script,
            'custom_footer_script' => $request->custom_footer_script,
        ]);
        $notification = array(
            'message' => 'Basic Analytic Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
