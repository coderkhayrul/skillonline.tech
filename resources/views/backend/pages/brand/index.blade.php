@extends('backend.layouts.layout')

@section('admin-title', 'brands')

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
            <div class="row">
                <div class="card">
                    <div class="mt-2 bg-white card-header">
                        <h3>All Brands
                            <a href="#"
                                class="btn btn-sm btn-success waves-effect btn-label waves-light" style="float: right;"><i
                                    class="bx bx-plus-medical label-icon"></i> Create</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive wrap w-100">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Url</th>
                                    <th>Active</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @forelse ($brands as $brand)
                                    <tr>
                                        <td width="10%" class="text-center">
                                            <img class="rounded avatar-md"
                                                src="{{ asset($brand->brand_image) }}"
                                                alt="">
                                        </td>
                                        <td>{{ $brand->brand_name }}</td>
                                        <td>{{ $brand->brand_url }}</td>
                                        <td>{{ $brand->brand_active }}</td>
                                        <td class="text-center">
                                            <a title="Edit" href="#"
                                                class="btn btn-sm btn-primary"><i class="bx bxs-pencil label-icon"></i></a>
                                            <a href="#" title="Delete" class="btn btn-sm btn-danger"><i
                                                    class="bx bxs-trash-alt label-icon"></i></b>
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
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
