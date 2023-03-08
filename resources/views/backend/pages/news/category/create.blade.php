@extends('backend.layouts.layout')

@section('admin-title', 'NewsCategory Create')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- end page title -->
            <div class="row">
                <div class="p-0 m-auto col-md-12">
                    <div class="card">
                        <div class="mt-2 bg-white card-header">
                            <h3><i class="bx bx-pin text-primary"></i> Create News Categories
                                <a href="{{ route('admin.news.category.index') }}"
                                    class="btn btn-sm btn-primary waves-effect btn-label waves-light" style="float: right;"><i
                                        class="bx bx-arrow-back label-icon"></i> Back</a>
                            </h3>
                        </div>
                        <div class="card-body bg-light">
                            <form action="{{ route('admin.news.category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="form-group mb-2">
                                            <label for="">Name</label>
                                            <input name="ncat_name" type="text" class="form-control @error('ncat_name') is-invalid @enderror"
                                                placeholder="NewsCategory Name" required>
                                            @error('ncat_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="">Order By</label>
                                            <input name="ncat_order" type="number" class="form-control"
                                                placeholder="Order By">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="" >Image</label>
                                            <input id="input_image" name="ncat_thumbnail" type="file" class="form-control">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for=""></label>
                                            <img id="input_image_preview" class="mt-3"  width="200px"
                                                src="{{ asset('media/no-image.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group mb-2">
                                            <label for="">News Content</label>
                                                <textarea class="form-control" name="ncat_details" id="summernote"></textarea>

                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-md-1 offset-md-11">
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-success waves-effect waves-light w-md">
                                                    <i class="align-middle bx bx-save font-size-16 me-2"></i>
                                                    Save
                                                </button>
                                            </div>
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
