@extends('frontend.layouts.master')
@section('frontend_content')
<div class="page-content bg-grey">
    <div class="content-inner-1 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <!-- Books Filtering -->
                    <div class="shop-filter">
                        <div class="d-flex justify-content-between">
                            <h4 class="title">Filter Option</h4>
                            <a href="javascript:void(0);" class="panel-close-btn"><i
                                    class="flaticon-close"></i></a>
                        </div>
                        <div class="accordion accordion-filter" id="accordionExample">

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" id="headingThree" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Select Year
                                </button>
                                <div id="collapseThree" class="accordion-collapse collapse accordion-body"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="widget dz-widget_services col d-flex justify-content-between">
                                        <div class="">
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox22">
                                                <label class="form-check-label" for="productCheckBox22">
                                                    2020
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox23">
                                                <label class="form-check-label" for="productCheckBox23">
                                                    2021
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox24">
                                                <label class="form-check-label" for="productCheckBox24">
                                                    2022
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox25">
                                                <label class="form-check-label" for="productCheckBox25">
                                                    2019
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox26">
                                                <label class="form-check-label" for="productCheckBox26">
                                                    2018
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox27">
                                                <label class="form-check-label" for="productCheckBox27">
                                                    2017
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox28">
                                                <label class="form-check-label" for="productCheckBox28">
                                                    2016
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox29">
                                                <label class="form-check-label" for="productCheckBox29">
                                                    2015
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox30">
                                                <label class="form-check-label" for="productCheckBox30">
                                                    2014
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox31">
                                                <label class="form-check-label" for="productCheckBox31">
                                                    2013
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox32">
                                                <label class="form-check-label" for="productCheckBox32">
                                                    2012
                                                </label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox33">
                                                <label class="form-check-label" for="productCheckBox33">
                                                    2011
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox34">
                                                <label class="form-check-label" for="productCheckBox34">
                                                    2010
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox35">
                                                <label class="form-check-label" for="productCheckBox35">
                                                    2009
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox36">
                                                <label class="form-check-label" for="productCheckBox36">
                                                    2008
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox37">
                                                <label class="form-check-label" for="productCheckBox37">
                                                    2007
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox38">
                                                <label class="form-check-label" for="productCheckBox38">
                                                    2006
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox39">
                                                <label class="form-check-label" for="productCheckBox39">
                                                    2005
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox40">
                                                <label class="form-check-label" for="productCheckBox40">
                                                    2004
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox41">
                                                <label class="form-check-label" for="productCheckBox41">
                                                    2003
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox42">
                                                <label class="form-check-label" for="productCheckBox42">
                                                    2002
                                                </label>
                                            </div>
                                            <div class="form-check search-content">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="productCheckBox43">
                                                <label class="form-check-label" for="productCheckBox43">
                                                    2001
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row filter-buttons">
                            <div>
                                <a href="javascript:void(0);"
                                    class="btn btn-secondary btnhover mt-4 d-block">Refine Search</a>
                                <a href="javascript:void(0);"
                                    class="btn btn-outline-secondary btnhover mt-3 d-block">Reset Filter</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="title">Category Books</h4>
                        <a href="javascript:void(0);" class="btn btn-primary panel-btn">Filter</a>
                    </div>
                    <div class="filter-area m-b30">
                        <div class="grid-area">
                            <div class="shop-tab">
                                <ul class="nav text-center product-filter justify-content-end" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link" href="books.html">
                                            {{-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22ZM13 4H20V11H13V4ZM13 13H20V20H13V13ZM4 4H11V20H4V4Z"
                                                    fill="#AAAAAA"></path>
                                            </svg> --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="#AAAAAA" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                              </svg>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="category">
                            <div class="filter-category">
                                <a data-bs-toggle="collapse" href="#collapseExample" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-list me-2"></i>
                                    Categories
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row book-grid-row">
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book14.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault1">
                                    <label class="form-check-label" for="flexCheckDefault1">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book15.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book4.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault3">
                                    <label class="form-check-label" for="flexCheckDefault3">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book9.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault4">
                                    <label class="form-check-label" for="flexCheckDefault4">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book7.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault5">
                                    <label class="form-check-label" for="flexCheckDefault5">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book13.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault6">
                                    <label class="form-check-label" for="flexCheckDefault6">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book11.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault7">
                                    <label class="form-check-label" for="flexCheckDefault7">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book10.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault8">
                                    <label class="form-check-label" for="flexCheckDefault8">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book16.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault9">
                                    <label class="form-check-label" for="flexCheckDefault9">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book3.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault10">
                                    <label class="form-check-label" for="flexCheckDefault10">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book5.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault11">
                                    <label class="form-check-label" for="flexCheckDefault11">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
                                        </div>
                                        <a href="shop-cart.html"
                                            class="btn btn-secondary box-btn btnhover btnhover2">
                                            <i class="fa-solid fa-book-open m-r10"></i>
                                            View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-book style-2">
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend') }}/images/books/grid/book12.jpg" alt="book">
                                </div>
                                <div class="bookmark-btn style-2">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault12">
                                    <label class="form-check-label" for="flexCheckDefault12">
                                        <i class="flaticon-heart"></i>
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
                                            <span class="price-num">FREE</span>
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

    <!-- Newsletter -->
    <section class="py-5 newsletter-wrapper"
        style="background-image: url('{{ asset('frontend') }}/images/background/bg1.jpg'); background-size: cover;">
        <div class="container">
            <div class="subscride-inner">
                <div
                    class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                    <div class="col-xl-7 col-lg-12">
                        <div class="section-head mb-0">
                            <h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books
                                updates</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <form class="dzSubscribe style-1"
                            action="https://bookland.dexignzone.com/xhtml/script/mailchamp.php" method="post">
                            <div class="dzSubscribeMsg"></div>
                            <div class="form-group">
                                <div class="input-group mb-0">
                                    <input name="dzEmail" required="required" type="email"
                                        class="form-control bg-transparent text-white"
                                        placeholder="Your Email Address">
                                    <div class="input-group-addon">
                                        <button name="submit" value="Submit" type="submit"
                                            class="btn btn-primary btnhover">
                                            <span>SUBSCRIBE</span>
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter End -->

</div>
@endsection
