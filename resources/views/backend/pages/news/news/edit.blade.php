@extends('backend.layouts.layout')
@push('custom-style')
    <!-- tagsinput -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-tagsinput.css') }}">
@endpush
@section('admin-title', 'News Update')

@section('backend-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- end page title -->
            <div class="row">
                <div class="p-0 m-auto col-md-12">
                    <div class="card">
                        <div class="mt-2 bg-white card-header">
                            <h3><i class="bx bx-pin text-primary"></i> Update News
                                <a href="{{ route('admin.news.index') }}"
                                    class="btn btn-sm btn-primary waves-effect btn-label waves-light" style="float: right;"><i
                                        class="bx bx-arrow-back label-icon"></i> Back</a>
                            </h3>
                        </div>
                        <div class="card-body bg-light">
                            <form action="{{ route('admin.news.update', $news->news_slug) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input name="old_news_thumbnail" type="hidden" value="{{ $news->news_thumbnail }}">
                                <input name="old_news_image" type="hidden" value="{{ $news->news_image }}">
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <input type="hidden"  name="news_author_id" value="{{ Auth::user()->id }}">
                                        <div class="form-group mb-2">
                                            <label for="" class="form-label">News Category Name</label>
                                            <select name="ncat_id" class="form-control @error('ncat_id') is-invalid @enderror"  id="" required>
                                                <option label="Select Category"></option>
                                                @foreach($news_categories as $category)
                                                <option value="{{$category->ncat_id}}" @if($category->ncat_id == $news->ncat_id) selected @endif>{{$category->ncat_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('ncat_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="">News Title</label>
                                            <input name="news_title" type="text" class="form-control @error('news_title') is-invalid @enderror"
                                                placeholder="News Title" value="{{ $news->news_title }}" required>
                                            @error('news_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-------- Thumbnail------>
                                        <div class="form-group mb-2">
                                            <label for="" >Thumbnail</label>
                                            <input id="input_image" name="news_thumbnail" type="file" class="form-control">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for=""></label>
                                            <img id="input_image_preview" class="mt-3"  width="200px"
                                                src="{{ asset($news->news_thumbnail) }}" alt="">
                                        </div>
                                        <!-----------Image------------->
                                        <div class="form-group mb-2">
                                            <label for="" >Image</label>
                                            <input id="input_image-2" name="news_image" type="file" class="form-control">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for=""></label>
                                            <img id="input_image_preview-2" class="mt-3"  width="200px"
                                                src="{{ empty($news->news_image) ? asset('media/no-image.png') : asset($news->news_image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group mb-2">
                                            <label for="">Short Description</label>
                                                <textarea class="form-control" name="news_shortDetails" id="summernote">{{ $news->news_shortDetails }}</textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="">News Details</label>
                                                <textarea class="form-control" name="news_details" id="summernote2">{{ $news->news_details }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="user_skill">Skills</label>
                                            <input data-role="tagsinput" type="text" class="form-control"
                                                name="news_tags" placeholder="Enter Skills" value="{{ $news->news_tags }}">
                                         </div>
                                    </div>
                                    <div class="row justify-content-end mt-4">
                                        <div class="col-md-2 offset-md-10 ">
                                            <div>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                                    <i class="align-middle bx bx-sync font-size-16 me-2"></i> Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
@push('custom-script')
    <!-- tagsinput -->
    <script src="{{ asset('backend/assets/js/bootstrap-tagsinput.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote2').summernote({
                height: 200,
                tabsize: 2
            });
        });
    </script>

@endpush
