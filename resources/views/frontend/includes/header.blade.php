<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="" />
	<meta name="description" content="Bookland-Book Store Ecommerce Website" />
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website" />
	<meta property="og:description" content="Bookland-Book Store Ecommerce Website" />
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/images/favicon.png" />

	<!-- PAGE TITLE HERE -->
	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/style.css">

	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet">

</head>
