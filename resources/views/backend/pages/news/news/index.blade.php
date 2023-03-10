@extends('backend.layouts.layout')

@section('admin-title', 'News')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="mt-2 bg-white card-header">
                            <h3>All News
                                <a href="{{ route('admin.news.create') }}"
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
                                        <th>Publish</th>
                                        <th>Feature</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @forelse ($news as $key => $news)
                                        <tr>
                                            <td width="5%" class="text-center">{{ $key + 1 }}</td>
                                            <td width="10%" class="text-center">
                                                <img class="rounded avatar-md"
                                                    src="{{ empty($news->news_thumbnail) ? asset('media/no-image.png') : asset($news->news_thumbnail) }}"
                                                    alt="">
                                            </td>
                                            <td width="35%">{{ $news->news_title }}</td>
                                            <td width="15%" class="text-center">
                                                @if ($news->news_publish == 1)
                                                    <a href="{{ route('admin.news.deactive', $news->news_slug) }}"
                                                        class="btn btn-sm btn-success waves-effect waves-light">
                                                        <i class="bx bx-like font-size-16 align-middle me-2"></i> Publish
                                                    </a>
                                                @else
                                                    <a href="{{ route('admin.news.active', $news->news_slug) }}"
                                                        class="btn btn-sm btn-warning waves-effect waves-light">
                                                        <i class="bx bxs-dislike font-size-16 align-middle me-2"></i> Pending
                                                    </a>
                                                @endif
                                            </td>
                                            <td width="15%" class="text-center">
                                                @if ($news->news_feature == 1)
                                                    <a href="{{ route('admin.news.off', $news->news_slug) }}"
                                                        class="btn btn-sm btn-success waves-effect waves-light">
                                                        <i class="bx bx-like font-size-16 align-middle me-2"></i> On
                                                    </a>
                                                @else
                                                    <a href="{{ route('admin.news.on', $news->news_slug) }}"
                                                        class="btn btn-sm btn-danger waves-effect waves-light">
                                                        <i class="bx bxs-dislike font-size-16 align-middle me-2"></i>Off
                                                    </a>
                                                @endif
                                            </td>
                                            <td width="20%" class="text-center">
                                                <a title="Edit"
                                                    href="{{ route('admin.news.edit', $news->news_slug) }}"
                                                    class="btn btn-sm btn-primary"><i
                                                        class="bx bx-edit-alt label-icon"></i></a>
                                                <a href="{{ route('admin.news.destroy', $news->news_slug) }}"
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
