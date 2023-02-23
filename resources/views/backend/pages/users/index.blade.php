@extends('backend.layouts.layout')

@section('admin-title', 'Categories')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            {{-- <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">All user</h4>
                        <div class="page-title-right">
                            <ol class="m-0 breadcrumb">
                                <li class="breadcrumb-item active">user</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- end page title -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="mt-2 bg-white card-header">
                            <h3>All User
                                <a href="{{ route('admin.user.create') }}"
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
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @forelse ($users as $key => $user)
                                        <tr>
                                            <td width="5%" class="text-center">{{ $key + 1 }}</td>
                                            <td width="10%" class="text-center">
                                                <img class="rounded avatar-md"
                                                    src="{{ empty($user->image) ? asset('media/no-image.png') : asset($user->image) }}"
                                                    alt="">
                                            </td>
                                            <td width="10%">{{ $user->name }}</td>
                                            <td width="10%">{{ $user->email }}</td>
                                            <td width="10%">{{ optional($user->role)->role_name }}</td>
                                            <td width="10%">{{ $user->phone }}</td>
                                            <td width="10%" class="text-center">
                                                @if ($user->bc_active == 1)
                                                    <a href="#"
                                                        class="btn btn-sm btn-success waves-effect waves-light">
                                                        <i class="align-middle bx bx-like font-size-16 me-2"></i> Active
                                                    </a>
                                                @else
                                                    <a href="#"
                                                        class="btn btn-sm btn-danger waves-effect waves-light">
                                                        <i class="align-middle bx bxs-dislike font-size-16 me-2"></i> In
                                                        Active
                                                    </a>
                                                @endif
                                            </td>

                                            <td width="10%" class="text-center">
                                                <a title="Edit" href="#" class="btn btn-sm btn-primary"><i
                                                        class="bx bx-edit-alt label-icon"></i></a>
                                                <a href="#" title="Delete" class="btn btn-sm btn-danger"
                                                    id="delete">
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
