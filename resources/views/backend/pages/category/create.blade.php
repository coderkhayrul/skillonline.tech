@extends('backend.layouts.layout')

@section('admin-title', 'Category Create')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- end page title -->
            <div class="row">
                <div class="p-0 m-auto col-md-8">
                    <div class="card">
                        <div class="mt-2 bg-white card-header">
                            <h3><i class="bx bx-pin text-primary"></i> All Categories
                                <a href="{{ route('admin.category.index') }}"
                                    class="btn btn-sm btn-primary waves-effect btn-label waves-light" style="float: right;"><i
                                        class="bx bx-arrow-back label-icon"></i> Back</a>
                            </h3>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="p-0 m-auto col-md-6">
                                    <form action="{{ route('admin.category.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input name="bc_name" type="text"
                                                    class="form-control @error('bc_name') is-invalid @enderror"
                                                    placeholder="Category Name" required>
                                                @error('bc_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-3 col-form-label">Order By</label>
                                            <div class="col-sm-9">
                                                <input name="bc_orderby" type="number" class="form-control"
                                                    placeholder="Order By">
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-3 col-form-label">Remarks</label>
                                            <div class="col-sm-9">
                                                <input name="bc_remarks" type="text" class="form-control"
                                                    placeholder="Remarks">
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-3 col-form-label">Image</label>
                                            <div class="col-sm-9">
                                                <input id="input_image" name="bc_image" type="file" class="form-control">
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

            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
