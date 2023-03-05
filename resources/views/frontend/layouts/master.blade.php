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
			@if (Route::currentRouteName() == 'web.home')
                <!--Swiper Banner Start -->
                @include('frontend.includes.slider')
                <!--Swiper Banner End-->

                <!-- Client Start-->
                @include('frontend.includes.client')
                <!-- Client End-->
            @endif

            <!-- MAIN CONTENT -->
			@yield('frontend_content')

            @if (Route::currentRouteName() == 'web.home')
                <!-- Feature Box -->
			@include('frontend.includes.counterbox')
			<!-- Feature Box End -->
            @endif

			<!-- Newsletter -->
			@include('frontend.includes.newsletter')
			<!-- Newsletter End -->
		</div>
@include('frontend.includes.footer')
