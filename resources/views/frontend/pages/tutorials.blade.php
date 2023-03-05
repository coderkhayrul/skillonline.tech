@extends('frontend.layouts.master')
@section('frontend_content')
<div class="page-content">
    <!-- inner page banner -->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
        style="background-image:url({{ asset('frontend') }}/images/background/bg3.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Category Tutorial</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('web.home') }}"> Home</a></li>
                        <li class="breadcrumb-item">Category Tutorial</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- inner page banner End-->

    <!-- Blog Large -->
    <section class="content-inner-1 bg-img-fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="dz-blog style-1 bg-white m-b30 blog-half">
                        <div class="dz-media dz-img-effect zoom">
                            <img src="{{ asset('frontend') }}/images/blog/large/blog2.jpg" alt="">
                        </div>
                        <div class="dz-info">
                            <h4 class="dz-title">
                                <a href="single-tutorial.html">Unconventional Knowledge About Library, You Can't
                                    Learn From Books</a>
                            </h4>
                            <p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi
                                feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam.
                                Integer dolor arcu.</p>
                            <div class="dz-meta meta-bottom">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March,
                                        2022</li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                            href="javascript:void(0);"> Author</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i
                                                class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dz-blog style-1 bg-white m-b30 blog-half">
                        <div class="dz-media dz-img-effect zoom">
                            <img src="{{ asset('frontend') }}/images/blog/large/blog1.jpg" alt="">
                        </div>
                        <div class="dz-info">
                            <h4 class="dz-title">
                                <a href="single-tutorial.html">You Should Experience Library At Least Once In
                                    Your
                                    Lifetime.</a>
                            </h4>
                            <p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi
                                feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam.
                                Integer dolor arcu.</p>
                            <div class="dz-meta meta-bottom">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March,
                                        2022</li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                            href="javascript:void(0);"> Author</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i
                                                class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dz-blog style-1 bg-white m-b30 blog-half">
                        <div class="dz-media dz-img-effect zoom">
                            <img src="{{ asset('frontend') }}/images/blog/large/blog1.jpg" alt="">
                        </div>
                        <div class="dz-info">
                            <h4 class="dz-title">
                                <a href="single-tutorial.html">You Should Experience Library At Least Once In
                                    Your
                                    Lifetime.</a>
                            </h4>
                            <p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi
                                feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam.
                                Integer dolor arcu.</p>
                            <div class="dz-meta meta-bottom">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March,
                                        2022</li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                            href="javascript:void(0);">
                                            Author</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i
                                                class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dz-blog style-1 bg-white m-b30 blog-half">
                        <div class="dz-media dz-img-effect zoom">
                            <img src="{{ asset('frontend') }}/images/blog/large/blog1.jpg" alt="">
                        </div>
                        <div class="dz-info">
                            <h4 class="dz-title">
                                <a href="single-tutorial.html">You Should Experience Library At Least Once In
                                    Your
                                    Lifetime.</a>
                            </h4>
                            <p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi
                                feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam.
                                Integer dolor arcu.</p>
                            <div class="dz-meta meta-bottom">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March,
                                        2022</li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                            href="javascript:void(0);">
                                            Author</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i
                                                class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dz-blog style-1 bg-white m-b30 blog-half">
                        <div class="dz-media dz-img-effect zoom">
                            <img src="{{ asset('frontend') }}/images/blog/large/blog1.jpg" alt="">
                        </div>
                        <div class="dz-info">
                            <h4 class="dz-title">
                                <a href="single-tutorial.html">You Should Experience Library At Least Once In
                                    Your
                                    Lifetime.</a>
                            </h4>
                            <p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi
                                feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam.
                                Integer dolor arcu.</p>
                            <div class="dz-meta meta-bottom">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March,
                                        2022</li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                            href="javascript:void(0);">
                                            Author</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i
                                                class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dz-blog style-1 bg-white m-b30 blog-half">
                        <div class="dz-media dz-img-effect zoom">
                            <img src="{{ asset('frontend') }}/images/blog/large/blog1.jpg" alt="">
                        </div>
                        <div class="dz-info">
                            <h4 class="dz-title">
                                <a href="single-tutorial.html">You Should Experience Library At Least Once In
                                    Your
                                    Lifetime.</a>
                            </h4>
                            <p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi
                                feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam.
                                Integer dolor arcu.</p>
                            <div class="dz-meta meta-bottom">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March,
                                        2022</li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                            href="javascript:void(0);">
                                            Author</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i
                                                class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dz-blog style-1 bg-white m-b30 blog-half">
                        <div class="dz-media dz-img-effect zoom">
                            <img src="{{ asset('frontend') }}/images/blog/large/blog1.jpg" alt="">
                        </div>
                        <div class="dz-info">
                            <h4 class="dz-title">
                                <a href="single-tutorial.html">You Should Experience Library At Least Once In
                                    Your
                                    Lifetime.</a>
                            </h4>
                            <p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi
                                feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam.
                                Integer dolor arcu.</p>
                            <div class="dz-meta meta-bottom">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March,
                                        2022</li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                            href="javascript:void(0);">
                                            Author</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i
                                                class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dz-blog style-1 bg-white m-b30 blog-half">
                        <div class="dz-media dz-img-effect zoom">
                            <img src="{{ asset('frontend') }}/images/blog/large/blog1.jpg" alt="">
                        </div>
                        <div class="dz-info">
                            <h4 class="dz-title">
                                <a href="single-tutorial.html">You Should Experience Library At Least Once In
                                    Your
                                    Lifetime.</a>
                            </h4>
                            <p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi
                                feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam.
                                Integer dolor arcu.</p>
                            <div class="dz-meta meta-bottom">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March,
                                        2022</li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                            href="javascript:void(0);">
                                            Author</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i
                                                class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dz-blog style-1 bg-white m-b30 blog-half">
                        <div class="dz-media dz-img-effect zoom">
                            <img src="{{ asset('frontend') }}/images/blog/large/blog1.jpg" alt="">
                        </div>
                        <div class="dz-info">
                            <h4 class="dz-title">
                                <a href="single-tutorial.html">You Should Experience Library At Least Once In
                                    Your
                                    Lifetime.</a>
                            </h4>
                            <p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi
                                feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam.
                                Integer dolor arcu.</p>
                            <div class="dz-meta meta-bottom">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March,
                                        2022</li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                            href="javascript:void(0);">
                                            Author</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i
                                                class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dz-blog style-1 bg-white m-b30 blog-half">
                        <div class="dz-media dz-img-effect zoom">
                            <img src="{{ asset('frontend') }}/images/blog/large/blog1.jpg" alt="">
                        </div>
                        <div class="dz-info">
                            <h4 class="dz-title">
                                <a href="single-tutorial.html">You Should Experience Library At Least Once In
                                    Your
                                    Lifetime.</a>
                            </h4>
                            <p class="m-b0">Sed auctor magna lacus, in placerat nisl sollicitudin ut. Morbi
                                feugiat ante velit, eget convallis arcu iaculis vel. Fusce in rhoncus quam.
                                Integer dolor arcu.</p>
                            <div class="dz-meta meta-bottom">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 March,
                                        2022</li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                            href="javascript:void(0);">
                                            Author</a></li>
                                    <li class="post-comment"><a href="javascript:void(0);"><i
                                                class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <nav aria-label="Blog Pagination">
                        <ul class="pagination text-center p-t20 style-1 m-b30">
                            <li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <aside class="side-bar sticky-top mt-lg-0 mt-md-5">
                        <div class="widget">
                            <div class="search-bx">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="text" class="form-control" placeholder="Search"
                                            type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-search">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                </svg></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget widget_categories">
                            <h4 class="widget-title">Category</h4>
                            <ul>
                                <li class="cat-item cat-item-26"><a href="blog-list-sidebar.html">Audio</a> (3)
                                </li>
                                <li class="cat-item cat-item-36"><a href="blog-list-sidebar.html">Beauty</a> (4)
                                </li>
                                <li class="cat-item cat-item-43"><a href="blog-list-sidebar.html">Fashion</a>
                                    (3)</li>
                                <li class="cat-item cat-item-27"><a href="blog-list-sidebar.html">Images</a> (1)
                                </li>
                                <li class="cat-item cat-item-40"><a href="blog-list-sidebar.html">Lifestyle</a>
                                    (3)</li>
                            </ul>
                        </div>
                        <div class="widget recent-posts-entry">
                            <h4 class="widget-title">Recent Posts</h4>
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="dz-media">
                                        <a href="single-tutorial.html"><img
                                                src="{{ asset('frontend') }}/images/blog/recent-blog/blog1.jpg" alt=""></a>
                                    </div>
                                    <div class="dz-info">
                                        <h6 class="title"><a href="single-tutorial.html">Omg! The Best Library
                                                Ever!</a></h6>
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="post-date"> 7 March, 2022 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dz-media">
                                        <a href="single-tutorial.html"><img
                                                src="{{ asset('frontend') }}/images/blog/recent-blog/blog2.jpg" alt=""></a>
                                    </div>
                                    <div class="dz-info">
                                        <h6 class="title"><a href="single-tutorial.html">The Miracle Of Library
                                                In
                                                Mind.</a></h6>
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="post-date"> 7 March, 2022 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dz-media">
                                        <a href="single-tutorial.html"><img
                                                src="{{ asset('frontend') }}/images/blog/recent-blog/blog3.jpg" alt=""></a>
                                    </div>
                                    <div class="dz-info">
                                        <h6 class="title"><a href="single-tutorial.html">So many books, so
                                                little
                                                time.</a></h6>
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="post-date"> 7 March, 2022 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                <a href="javascript:void(0);">Business</a>
                                <a href="javascript:void(0);">News</a>
                                <a href="javascript:void(0);">Brand</a>
                                <a href="javascript:void(0);">Website</a>
                                <a href="javascript:void(0);">Internal</a>
                                <a href="javascript:void(0);">Strategy</a>
                                <a href="javascript:void(0);">Brand</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
