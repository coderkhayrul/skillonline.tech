@extends('backend.layouts.layout')

@section('admin-title', 'NewsCategories')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="mt-2 bg-white card-header">
                            <h3>All NewsCategories
                                <a href="{{ route('admin.news.category.create') }}"
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
                                                    src="{{ empty($category->ncat_thumbnail) ? asset('media/no-image.png') : asset($category->ncat_thumbnail) }}"
                                                    alt="">
                                            </td>
                                            <td width="40%">{{ $category->ncat_name }}</td>
                                            <td width="15%" class="text-center">
                                                @if ($category->ncat_status == 1)
                                                    <a href="{{ route('admin.news.category.deactive', $category->ncat_slug) }}"
                                                        class="btn btn-sm btn-success waves-effect waves-light">
                                                        <i class="bx bx-like font-size-16 align-middle me-2"></i> Active
                                                    </a>
                                                @else
                                                    <a href="{{ route('admin.news.category.active', $category->ncat_slug) }}"
                                                        class="btn btn-sm btn-danger waves-effect waves-light">
                                                        <i class="bx bxs-dislike font-size-16 align-middle me-2"></i> In
                                                        Active
                                                    </a>
                                                @endif
                                            </td>

                                            <td width="20%" class="text-center">
                                                <a title="Edit"
                                                    href="{{ route('admin.news.category.edit', $category->ncat_slug) }}"
                                                    class="btn btn-sm btn-primary"><i
                                                        class="bx bx-edit-alt label-icon"></i></a>
                                                <a href="{{ route('admin.news.category.destroy', $category->ncat_slug) }}"
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
