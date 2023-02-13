@extends('backend.layouts.layout')

@section('admin-title', 'Dashboard')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Welcome @auth {{ Auth::user()->name }} @endauth
                        </h4>
                        <div class="page-title-right">
                            <ol class="m-0 breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->



        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
