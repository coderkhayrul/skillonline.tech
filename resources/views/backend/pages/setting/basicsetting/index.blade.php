@extends('backend.layouts.layout')

@section('admin-title', 'BasicSetting')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Basic Setting</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="card">
                    <div class="card-body px-2">
                        <form role="form" action="{{ Route('admin.setting.basicsetting.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row  align-items-center p-3">
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Website Name</label>
                                            <input class="form-control" type="text" name="bs_company" placeholder="Enter Website Name"
                                                value="{{ $setting->bs_company }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Website Url</label>
                                            <input class="form-control" type="text" name="bs_url" placeholder="website.com"
                                                value="{{ $setting->bs_url }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Website Title</label>
                                            <input class="form-control" type="text" name="bs_title" placeholder="Enter Website Title"
                                                value="{{ $setting->bs_title }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <div class="form-group mb-2">
                                            <label class="form-label" style="float: left;">Logo</label>
                                            <input name="old_bs_logo" type="hidden" value="{{ $setting->bs_logo }}">
                                            <input id="input_image" class="form-control" type="file" name="bs_logo">
                                                <img id="input_image_preview" class="mt-3" width="120px" height="120px"
                                                    src="{{ empty($setting->bs_logo) ? asset('media/no-image.png') : asset($setting->bs_logo) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <div class="form-group mb-2">
                                            <label class="form-label" style="float: left;">Favicon Logo</label>
                                            <input name="old_bs_favicon" type="hidden" value="{{ $setting->bs_favicon }}">
                                            <input id="input_image-2" class="form-control" type="file" name="bs_favicon">
                                            <img id="input_image_preview-2" class="mt-3" width="120px" height="120px"
                                                 src="{{ empty($setting->bs_favicon) ? asset('media/no-image.png') : asset($setting->bs_favicon) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer p-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bx bx-save w-2"></i> Setting Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
