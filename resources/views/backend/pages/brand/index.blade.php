@extends('backend.layouts.layout')

@section('admin-title', 'Brand')

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
                                <a href="{{ route('admin.brand.create') }}"
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
                                        <th>feature</th>
                                        <th>Active</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($brands as $key => $brand)
                                        <tr>
                                            <td width="5%" class="text-center">{{ $key + 1 }}</td>
                                            <td width="10%" class="text-center">
                                                <img class="rounded avatar-md" src="{{ asset($brand->brand_image) }}"
                                                    alt="">
                                            </td>
                                            <td width="40%">{{ $brand->brand_name }}</td>
                                            <td width="15%">
                                                @if ($brand->brand_feature == 1)
                                                    <a href="{{ route('admin.brand.off', $brand->brand_slug) }}"
                                                        class="btn btn-sm btn-success waves-effect waves-light">
                                                        <i class="bx bx-like font-size-16 align-middle me-2"></i> On
                                                    </a>
                                                @else
                                                    <a href="{{ route('admin.brand.on', $brand->brand_slug) }}"
                                                        class="btn btn-sm btn-danger waves-effect waves-light">
                                                        <i class="bx bxs-dislike font-size-16 align-middle me-2"></i>Off
                                                    </a>
                                                @endif
                                            <td width="15%" class="text-center">
                                                @if ($brand->brand_active == 1)
                                                    <a href="{{ route('admin.brand.deactive', $brand->brand_slug) }}"
                                                        class="btn btn-sm btn-success waves-effect waves-light">
                                                        <i class="bx bx-like font-size-16 align-middle me-2"></i> Active
                                                    </a>
                                                @else
                                                    <a href="{{ route('admin.brand.active', $brand->brand_slug) }}"
                                                        class="btn btn-sm btn-danger waves-effect waves-light">
                                                        <i class="bx bxs-dislike font-size-16 align-middle me-2"></i> In
                                                        Active
                                                    </a>
                                                @endif
                                            <td width="15%" class="text-center">
                                                <a title="Edit" href="{{ route('admin.brand.edit', $brand->brand_slug) }}"
                                                    class="btn btn-sm btn-primary"><i class="bx bxs-pencil label-icon"></i></a>
                                                <a id="delete" href="{{ route('admin.brand.destroy', $brand->brand_slug) }}"
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
