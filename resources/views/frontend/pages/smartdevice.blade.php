@extends('frontend.layouts.master')
@section('frontend_content')
<div class="page-content bg-grey">
    <!-- inner page banner -->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
        style="background-image:url({{ asset('frontend') }}/images/background/bg3.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Smart Device Category</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('web.home') }}"> Home</a></li>
                        <li class="breadcrumb-item">Smart Device Category</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- inner page banner End-->
    <div class="content-inner-1 border-bottom">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row book-grid-row">
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book14.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault1">
                                    <label class="form-check-label" for="flexCheckDefault1">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Thunder Stunt</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">ADVANTURE,</a></li>
                                        <li><a href="books-grid-view.html">SCIENCE,</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book15.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Battler Drive</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">RACING,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book4.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault3">
                                    <label class="form-check-label" for="flexCheckDefault3">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Take Out Tango</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book9.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault4">
                                    <label class="form-check-label" for="flexCheckDefault4">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Missadventure</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">ADVENTURE</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book7.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault5">
                                    <label class="form-check-label" for="flexCheckDefault5">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Thunder Stunt</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">ADVANTURE,</a></li>
                                        <li><a href="books-grid-view.html">SCIENCE</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book13.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault6">
                                    <label class="form-check-label" for="flexCheckDefault6">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Battler Drive</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">RACING,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book11.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault7">
                                    <label class="form-check-label" for="flexCheckDefault7">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Take Out Tango</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book10.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault8">
                                    <label class="form-check-label" for="flexCheckDefault8">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Missadventure</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">ADVENTURE</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book16.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault9">
                                    <label class="form-check-label" for="flexCheckDefault9">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Thunder Stunt</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">ADVANTURE</a></li>
                                        <li><a href="books-grid-view.html">SCIENCE</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book3.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault10">
                                    <label class="form-check-label" for="flexCheckDefault10">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Battler Drive</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">RACING,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book5.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault11">
                                    <label class="form-check-label" for="flexCheckDefault11">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Take Out Tango</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book smart-device">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book12.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault12">
                                    <label class="form-check-label" for="flexCheckDefault12">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </label>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Missadventure</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">ADVENTURE</a></li>
                                    </ul>
                                    <ul class="dz-rating">
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-yellow"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                        <li><i class="flaticon-star text-muted"></i></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="price">
                                            <span class="price-num">$10,000</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row page mt-0">
                        <div class="col-md-6">
                            <p class="page-text">Showing 12 from 50 data</p>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="Blog Pagination">
                                <ul class="pagination style-1 p-t20">
                                    <li class="page-item"><a class="page-link prev"
                                            href="javascript:void(0);">Prev</a></li>
                                    <li class="page-item"><a class="page-link active"
                                            href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link next"
                                            href="javascript:void(0);">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Client Start-->
    <div class="bg-white py-5">
        <div class="container">
            <!--Client Swiper -->
            <div class="swiper client-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('frontend') }}/images/client/client1.svg" alt="client"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend') }}/images/client/client2.svg" alt="client"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend') }}/images/client/client3.svg" alt="client"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend') }}/images/client/client4.svg" alt="client"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend') }}/images/client/client5.svg" alt="client"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client End-->

    <!-- Feature Box -->
    <section class="content-inner">
        <div class="container">
            <div class="row sp15">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="icon-bx-wraper style-2 m-b30 text-center">
                        <div class="icon-bx-lg">
                            <i class="fa-solid fa-users icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h2 class="dz-title counter m-b0">125,663</h2>
                            <p class="font-20">Happy Users</p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="icon-bx-wraper style-2 m-b30 text-center">
                        <div class="icon-bx-lg">
                            <i class="fa-solid fa-book icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h2 class="dz-title counter m-b0">50,672</h2>
                            <p class="font-20">Book Collections</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="icon-bx-wraper style-2 m-b30 text-center">
                        <div class="icon-bx-lg">
                            <i class="fa-solid fa-store icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h2 class="dz-title counter m-b0">1,562</h2>
                            <p class="font-20">Our Stores</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="icon-bx-wraper style-2 m-b30 text-center">
                        <div class="icon-bx-lg">
                            <i class="fa-solid fa-leaf icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h2 class="dz-title counter m-b0">457</h2>
                            <p class="font-20">Famous Writers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Box End -->

</div>
@endsection
