@extends('backend.layouts.layout')

@section('admin-title', 'Categories')

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
                            <h3>All Categories
                                <a href="{{ route('admin.category.create') }}"
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
                                        <th>Name</th>
                                        <th>Active</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @forelse ($categories as $key => $category)
                                        <tr>
                                            <td width="5%" class="text-center">{{ $key + 1 }}</td>
                                            <td width="10%" class="text-center">
                                                <img class="rounded avatar-md"
                                                    src="{{ empty($category->bc_image) ? asset('media/no-image.png') : asset($category->bc_image) }}"
                                                    alt="">
                                            </td>
                                            <td width="50%">{{ $category->bc_name }}</td>
                                            <td width="15%" class="text-center">
                                                @if ($category->bc_active == 1)
                                                    <a href="{{ route('admin.category.deactive', $category->bc_slug) }}"
                                                        class="btn btn-sm btn-success waves-effect waves-light">
                                                        <i class="bx bx-like font-size-16 align-middle me-2"></i> Active
                                                    </a>
                                                @else
                                                    <a href="{{ route('admin.category.active', $category->bc_slug) }}"
                                                        class="btn btn-sm btn-danger waves-effect waves-light">
                                                        <i class="bx bxs-dislike font-size-16 align-middle me-2"></i> In
                                                        Active
                                                    </a>
                                                @endif
                                            </td>

                                            <td width="10%" class="text-center">
                                                <a title="Edit"
                                                    href="{{ route('admin.category.edit', $category->bc_slug) }}"
                                                    class="btn btn-sm btn-primary"><i
                                                        class="bx bx-edit-alt label-icon"></i></a>
                                                <a href="{{ route('admin.category.destroy', $category->bc_slug) }}"
                                                    title="Delete" class="btn btn-sm btn-danger" id="delete">
                                                    <i class="bx bxs-trash-alt label-icon"></i>
                                                </a>
                                            </td>
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
