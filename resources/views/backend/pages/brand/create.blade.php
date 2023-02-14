@extends('backend.layouts.layout')

@section('admin-title', 'Brand Create')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- end page title -->
            <div class="row">
                <div class="card">
                    <div class="mt-2 bg-white card-header">
                        <h3>All Brands
                            <a href="{{ route('admin.brand.index') }}"
                                class="btn btn-sm btn-primary waves-effect btn-label waves-light" style="float: right;"><i
                                    class="bx bx-arrow-back label-icon"></i> Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="p-0 m-auto col-md-6">
                                <form action="{{ route('admin.brand.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4 row">
                                        <label for="" class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input name="brand_name" type="text"
                                                class="form-control @error('brand_name') is-invalid @enderror"
                                                placeholder="Brand Name" required>
                                            @error('brand_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <label for="" class="col-sm-3 col-form-label">Order By</label>
                                        <div class="col-sm-9">
                                            <input name="brand_orderby" type="number" class="form-control"
                                                placeholder="Order By">
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <label for="" class="col-sm-3 col-form-label">Remarks</label>
                                        <div class="col-sm-9">
                                            <input name="brand_remarks" type="text" class="form-control"
                                                placeholder="Remarks">
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <label for="" class="col-sm-3 col-form-label">Features</label>
                                        <div class="col-sm-9">
                                            <input name="brand_feature" type="number" class="form-control"
                                                placeholder="Features">
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <label for="" class="col-sm-3 col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input id="input_image" name="brand_image" type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <label for="" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <img id="input_image_preview" class="rounded me-2" width="200"
                                                src="{{ asset('media/no-image.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">
                                            <div>
                                                <button type="submit" class="btn btn-success w-md">Submit</button>
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
