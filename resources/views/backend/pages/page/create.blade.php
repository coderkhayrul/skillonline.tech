@extends('backend.layouts.layout')

@section('admin-title', 'Page Create')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- end page title -->
            <div class="row">
                    <div class="card">
                        <div class="mt-2 bg-white card-header">
                            <h3><i class="bx bx-pin text-primary"></i> Create Pages
                                <a href="{{ route('admin.page.index') }}"
                                    class="btn btn-sm btn-primary waves-effect btn-label waves-light" style="float: right;"><i
                                        class="bx bx-arrow-back label-icon"></i> Back</a>
                            </h3>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="p-0 m-auto col-md-8">
                                    <form action="{{ route('admin.page.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-3 col-form-label">Page Name</label>
                                            <div class="col-sm-9">
                                                <input name="page_name" type="text"
                                                    class="form-control @error('tag_name') is-invalid @enderror"
                                                    placeholder="Page Name" required>
                                                @error('page_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-3 col-form-label">Page Url</label>
                                            <div class="col-sm-9">
                                                <input name="page_url" type="text" class="form-control"
                                                    placeholder="Page Url">
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-3 col-form-label">Page Content</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="page_content" id="summernote"></textarea>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-success waves-effect waves-light w-md">
                                                        <i class="align-middle bx bx-save font-size-16 me-2"></i>
                                                        Save
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
