@include('frontend.includes.header')

<body>

	<div class="page-wraper">
		<!-- Loader -->
        @include('frontend.includes.loader')

		<!-- Header -->
		<header class="site-header mo-left header style-1">
			<!-- Top Main Header -->
			@include('frontend.includes.topheader')
			<!-- Top Main Header End -->

			<!-- Main Header -->
			@include('frontend.includes.navbar')
			<!-- Main Header End -->
		</header>
		<!-- Header End -->

		<div class="page-content bg-white">
			<!--Swiper Banner Start -->
			@include('frontend.includes.slider')
			<!--Swiper Banner End-->

			<!-- Client Start-->
			@include('frontend.includes.client')
			<!-- Client End-->

			<!-- Latest Tutorials -->
			<section class="content-inner-2">
				<div class="container">
					<div class="section-head book-align">
						<h2 class="title mb-0">Latest Tutorials</h2>
						<div class="pagination-align style-1">
							<div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i>
							</div>
							<div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i>
							</div>
						</div>
					</div>
					<div class="swiper-container book-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
									<div class="dz-media">
										<a href="books-detail.html"><img src="{{ asset('frontend') }}/images/blog/blog5.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<h4 class="dz-title"><a href="books-detail.html">SECONDS [Part I]</a></h4>
										<div class="dz-meta">
											<ul class="dz-tags">
												<li><a href="books-detail.html">BIOGRAPHY</a></li>
												<li><a href="books-detail.html">THRILLER</a></li>
												<li><a href="books-detail.html">HORROR</a></li>
											</ul>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore.</p>
										<div class="bookcard-footer">
											<a href="single-tutorial.html"
												class="btn btn-primary m-t15 btnhover btnhover2">
												<i class="fa-brands fa-readme m-r10"></i>
												Read More</a>
											<div class="price-details text-warning">
												FREE
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.2s">
									<div class="dz-media">
										<a href="books-detail.html"><img src="{{ asset('frontend') }}/images/blog/blog6.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<h4 class="dz-title"><a href="books-detail.html">Terrible Madness</a></h4>
										<div class="dz-tags">
											<ul>
												<li><a href="books-detail.html">BIOGRAPHY</a></li>
												<li><a href="books-detail.html">THRILLER</a></li>
												<li><a href="books-detail.html">HORROR</a></li>
											</ul>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore.</p>
										<div class="bookcard-footer">
											<a href="single-tutorial.html"
												class="btn btn-primary m-t15 btnhover btnhover2">
												<i class="fa-brands fa-readme m-r10"></i>
												Read More</a>
											<div class="price-details text-warning">
												FREE
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.3s">
									<div class="dz-media">
										<a href="books-detail.html"><img src="{{ asset('frontend') }}/images/blog/blog7.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<h4 class="dz-title"><a href="books-detail.html">REWORK</a></h4>
										<div class="dz-tags">
											<ul>
												<li><a href="books-detail.html">BIOGRAPHY</a></li>
												<li><a href="books-detail.html">THRILLER</a></li>
												<li><a href="books-detail.html">HORROR</a></li>
											</ul>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore.</p>
										<div class="bookcard-footer">
											<a href="single-tutorial.html"
												class="btn btn-primary m-t15 btnhover btnhover2">
												<i class="fa-brands fa-readme m-r10"></i>
												Read More</a>
											<div class="price-details text-warning">
												FREE
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.4s">
									<div class="dz-media">
										<a href="books-detail.html"><img src="{{ asset('frontend') }}/images/blog/blog5.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<h4 class="dz-title"><a href="books-detail.html">SECONDS [Part I]</a></h4>
										<div class="dz-tags">
											<ul>
												<li><a href="books-detail.html">BIOGRAPHY</a></li>
												<li><a href="books-detail.html">THRILLER</a></li>
												<li><a href="books-detail.html">HORROR</a></li>
											</ul>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore.</p>
										<div class="bookcard-footer">
											<a href="single-tutorial.html"
												class="btn btn-primary m-t15 btnhover btnhover2">
												<i class="fa-brands fa-readme m-r10"></i>
												Read More</a>
											<div class="price-details text-warning">
												FREE
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.5s">
									<div class="dz-media">
										<a href="books-detail.html"><img src="{{ asset('frontend') }}/images/blog/blog6.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<h4 class="dz-title"><a href="books-detail.html">Terrible Madness</a></h4>
										<div class="dz-tags">
											<ul>
												<li><a href="books-detail.html">BIOGRAPHY</a></li>
												<li><a href="books-detail.html">THRILLER</a></li>
												<li><a href="books-detail.html">HORROR</a></li>
											</ul>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore.</p>
										<div class="bookcard-footer">
											<a href="single-tutorial.html"
												class="btn btn-primary m-t15 btnhover btnhover2">
												<i class="fa-brands fa-readme m-r10"></i>
												Read More</a>
											<div class="price-details text-warning">
												FREE
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.6s">
									<div class="dz-media">
										<a href="books-detail.html"><img src="{{ asset('frontend') }}/images/blog/blog7.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<h4 class="dz-title"><a href="books-detail.html">REWORK</a></h4>
										<div class="dz-tags">
											<ul>
												<li><a href="books-detail.html">BIOGRAPHY</a></li>
												<li><a href="books-detail.html">THRILLER</a></li>
												<li><a href="books-detail.html">HORROR</a></li>
											</ul>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore.</p>
										<div class="bookcard-footer">
											<a href="single-tutorial.html"
												class="btn btn-primary m-t15 btnhover btnhover2">
												<i class="fa-brands fa-readme m-r10"></i>
												Read More</a>
											<div class="price-details text-warning">
												FREE
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Latest Tutorials End -->

			<!-- Recommend Section Start-->
			<section class="content-inner-1 bg-grey reccomend">
				<div class="container">
					<div class="section-head text-center">
						<h2 class="title">Latest Books</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
							laboris</p>
					</div>
					<!-- Swiper -->
					<div class="swiper-container swiper-two">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
									<div class="dz-media">
										<img src="{{ asset('frontend') }}/images/books/grid/book6.jpg" alt="book">
									</div>
									<div class="dz-content">
										<h4 class="title">Adventure</h4>
										<span class="price">FREE</span>
										<a href="single-tutorial.html" class="btn btn-secondary btnhover btnhover2">
											<i class="fa-solid fa-info m-r10"></i>
											View Details</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.2s">
									<div class="dz-media">
										<img src="{{ asset('frontend') }}/images/books/grid/book5.jpg" alt="book">
									</div>
									<div class="dz-content">
										<h4 class="title">Take Tango</h4>
										<span class="price">FREE</span>
										<a href="single-tutorial.html" class="btn btn-secondary btnhover btnhover2">
											<i class="fa-solid fa-info m-r10"></i>
											View Details</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.3s">
									<div class="dz-media">
										<img src="{{ asset('frontend') }}/images/books/grid/book2.jpg" alt="book">
									</div>
									<div class="dz-content">
										<h4 class="title">Home</h4>
										<span class="price">FREE</span>
										<a href="single-tutorial.html" class="btn btn-secondary btnhover btnhover2">
											<i class="fa-solid fa-info m-r10"></i>
											View Details</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.4s">
									<div class="dz-media">
										<img src="{{ asset('frontend') }}/images/books/grid/book16.jpg" alt="book">
									</div>
									<div class="dz-content">
										<h4 class="title">Thunder Stunt</h4>
										<span class="price">FREE</span>
										<a href="single-tutorial.html" class="btn btn-secondary btnhover btnhover2">
											<i class="fa-solid fa-info m-r10"></i>
											View Details</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.5s">
									<div class="dz-media">
										<img src="{{ asset('frontend') }}/images/books/grid/book14.jpg" alt="book">
									</div>
									<div class="dz-content">
										<h4 class="title">Heavy Lift</h4>
										<span class="price">FREE</span>
										<a href="single-tutorial.html" class="btn btn-secondary btnhover btnhover2">
											<i class="fa-solid fa-info m-r10"></i>
											View Details</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.6s">
									<div class="dz-media">
										<img src="{{ asset('frontend') }}/images/books/grid/book1.jpg" alt="book">
									</div>
									<div class="dz-content">
										<h4 class="title">Real Life</h4>
										<span class="price">FREE</span>
										<a href="single-tutorial.html" class="btn btn-secondary btnhover btnhover2">
											<i class="fa-solid fa-info m-r10"></i>
											View Details</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.7s">
									<div class="dz-media">
										<img src="{{ asset('frontend') }}/images/books/grid/book15.jpg" alt="book">
									</div>
									<div class="dz-content">
										<h4 class="title">Terrible</h4>
										<span class="price">FREE</span>
										<a href="single-tutorial.html" class="btn btn-secondary btnhover btnhover2">
											<i class="fa-solid fa-info m-r10"></i>
											View Details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Latest News -->
			<section class="content-inner-2">
				<div class="container">
					<div class="section-head text-center">
						<h2 class="title">Latest News</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua</p>
					</div>
					<div class="swiper-container blog-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.1s">
									<div class="dz-media">
										<a href="blog-detail.html"><img src="{{ asset('frontend') }}/images/blog/grid/blog4.jpg" alt="/"></a>
									</div>
									<div class="dz-info p-3">
										<h6 class="dz-title">
											<a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy,
												Intelligent</a>
										</h6>
										<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
											tempor</p>
										<div class="dz-meta meta-bottom mt-3 pt-3">
											<ul class="">
												<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>24
													March, 2022</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.2s">
									<div class="dz-media">
										<a href="blog-detail.html"><img src="{{ asset('frontend') }}/images/blog/grid/blog3.jpg" alt="/"></a>
									</div>
									<div class="dz-info p-3">
										<h6 class="dz-title">
											<a href="blog-detail.html">10 Things you must know to improve your reading
												skills</a>
										</h6>
										<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
											tempor</p>
										<div class="dz-meta meta-bottom mt-3 pt-3">
											<ul class="">
												<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>18
													July, 2022</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.3s">
									<div class="dz-media">
										<a href="blog-detail.html"><img src="{{ asset('frontend') }}/images/blog/grid/blog2.jpg" alt="/"></a>
									</div>
									<div class="dz-info p-3">
										<h6 class="dz-title">
											<a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy,
												Intelligent</a>
										</h6>
										<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
											tempor</p>
										<div class="dz-meta meta-bottom mt-3 pt-3">
											<ul class="">
												<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 June,
													2022</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.4s">
									<div class="dz-media">
										<a href="blog-detail.html"><img src="{{ asset('frontend') }}/images/blog/grid/blog1.jpg" alt="/"></a>
									</div>
									<div class="dz-info p-3">
										<h6 class="dz-title">
											<a href="blog-detail.html">We Must know why reading is important for
												children?</a>
										</h6>
										<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
											tempor</p>
										<div class="dz-meta meta-bottom mt-3 pt-3">
											<ul class="">
												<li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>30 May,
													2022</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Latest News End -->

			<!-- Feature Box -->
			@include('frontend.includes.counterbox')
			<!-- Feature Box End -->

			<!-- Newsletter -->
			@include('frontend.includes.newsletter')
			<!-- Newsletter End -->
		</div>
@include('frontend.includes.footer')
