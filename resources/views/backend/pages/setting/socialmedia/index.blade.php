@extends('backend.layouts.layout')

@section('admin-title', 'SocialMedia')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Social Media Setting</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="card">
                    <div class="card-body px-2">
                        <form role="form" action="{{ Route('admin.setting.socialmedia.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row  align-items-center p-3">
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Facebook Link</label>
                                            <input class="form-control" type="text" name="sm_facebook" placeholder="Enter Facebook Link"
                                                value="{{ $socialmedia->sm_facebook }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Instagram Link</label>
                                            <input class="form-control"type="text" name="sm_instagram" placeholder="Enter Instagram Link"
                                                value="{{ $socialmedia->sm_instagram }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Twitter Link</label>
                                            <input class="form-control" type="text" name="sm_twitter" placeholder="Enter Twitter Link"
                                                value="{{ $socialmedia->sm_twitter }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Linkedin Link</label>
                                            <input class="form-control" type="text" name="sm_linkedin" placeholder="Enter Linkedin Link"
                                                value="{{ $socialmedia->sm_linkedin }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Youtube Link</label>
                                            <input class="form-control" type="text" name="sm_youtube" placeholder="Enter Youtube Link"
                                                value="{{ $socialmedia->sm_youtube }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Pinterest Link</label>
                                            <input class="form-control" type="text" name="sm_pinterest" placeholder="Enter Pinterest Link"
                                                value="{{ $socialmedia->sm_pinterest }}">
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer p-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bx bx-save w-2"></i> Social Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
