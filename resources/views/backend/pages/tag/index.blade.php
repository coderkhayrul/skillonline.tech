@extends('backend.layouts.layout')

@section('admin-title', 'tags')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="mt-2 bg-white card-header">
                            <h3>All Tags
                                <a href="{{ Route('admin.tag.create') }}"
                                    class="btn btn-sm btn-success waves-effect btn-label waves-light" style="float: right;"><i
                                        class="bx bx-plus-medical label-icon"></i> Create</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive wrap w-100">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <th>Name</th>
                                        <th>Orderby</th>
                                        <th>Active</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($tags as $key => $tag)
                                        <tr>
                                            <td width="5%" class="text-center">{{ $key + 1 }}</td>
                                            <td width="50%">{{ $tag->tag_name }}</td>
                                            <td width="10%">{{ $tag->tag_orderby }}</td>
                                            <td width="15%" class="text-center">
                                                @if ($tag->tag_active == 0)
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
                                            </td>
                                            <td width="20%" class="text-center">
                                                <a title="Edit"
                                                    href="#"
                                                    class="btn btn-sm btn-primary"><i
                                                        class="bx bx-edit-alt label-icon"></i></a>
                                                <a href="#"
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
    </div><!-- End Page-content -->
@endsection
