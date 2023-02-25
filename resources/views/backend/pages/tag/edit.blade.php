@extends('backend.layouts.layout')

@section('admin-title', 'Tag Edit')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- end page title -->
            <div class="row">
                <div class="p-0 m-auto col-md-8">
                    <div class="card">
                        <div class="mt-2 bg-white card-header">
                            <h3><i class="bx bx-pin text-primary"></i> Edit Tags
                                <a href="{{ route('admin.tag.index') }}"
                                    class="btn btn-sm btn-primary waves-effect btn-label waves-light" style="float: right;"><i
                                        class="bx bx-arrow-back label-icon"></i> Back</a>
                            </h3>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="p-0 m-auto col-md-6">
                                    <form action="{{ route('admin.tag.update', $tags->tag_slug) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input name="tag_name" type="text"
                                                    class="form-control @error('tag_name') is-invalid @enderror"
                                                    placeholder="Tag Name" value="{{ $tags->tag_name }}" required>
                                                @error('tag_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="" class="col-sm-3 col-form-label">Order By</label>
                                            <div class="col-sm-9">
                                                <input name="tag_orderby" type="number" class="form-control"
                                                    placeholder="Order By" value="{{ $tags->tag_orderby }}">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <div>
                                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                                        <i class="align-middle bx bx-sync font-size-16 me-2"></i> Update
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
