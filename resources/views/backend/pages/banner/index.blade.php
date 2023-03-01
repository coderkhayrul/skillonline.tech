@extends('backend.layouts.layout')

@section('admin-title', 'Banner')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            {{-- <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">All Category</h4>
                        <div class="page-title-right">
                            <ol class="m-0 breadcrumb">
                                <li class="breadcrumb-item active">Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- end page title -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="mt-2 bg-white card-header">
                            <h3>All Brands
                                <a href="{{ route('admin.banner.create') }}"
                                    class="btn btn-sm btn-success waves-effect btn-label waves-light" style="float: right;"><i
                                        class="bx bx-plus-medical label-icon"></i> Create</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive wrap w-100">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Active</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($banners as $key => $banner)
                                        <tr>
                                            <td width="5%" class="text-center">{{ $key + 1 }}</td>
                                            <td width="10%" class="text-center">
                                                <img class="rounded avatar-md" src="{{ asset($banner->banner_image) }}"
                                                    alt="">
                                            </td>
                                            <td width="40%">{{ $banner->banner_title }}</td>
                                            <td width="15%">{{ $banner->category_id }}</td>
                                            <td width="15%" class="text-center">
                                                @if ($banner->banner_status == 1)
                                                    <a href="#"
                                                        class="btn btn-sm btn-success waves-effect waves-light">
                                                        <i class="bx bx-like font-size-16 align-middle me-2"></i> Active
                                                    </a>
                                                @else
                                                    <a href="#"
                                                        class="btn btn-sm btn-danger waves-effect waves-light">
                                                        <i class="bx bxs-dislike font-size-16 align-middle me-2"></i> In
                                                        Active
                                                    </a>
                                                @endif
                                            <td width="15%" class="text-center">
                                                <a title="Edit" href="#"
                                                    class="btn btn-sm btn-primary"><i class="bx bxs-pencil label-icon"></i></a>
                                                <a id="delete" href="#"
                                                    title="Delete" class="btn btn-sm btn-danger"><i
                                                        class="bx bxs-trash-alt label-icon"></i></a>
                                            </td>
                                            </form>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
