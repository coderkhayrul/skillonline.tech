<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('admin-title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Tostar Notification -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/libs/toastr/build/toastr.min.css">
    <!-- Sweet Alert-->
    <link href="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- SummerNote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- App Css-->
    <link href="{{ asset('backend') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/css/custom.css" rel="stylesheet" type="text/css" />
@if (Route::currentRouteName() == 'admin.category.index'|| Route::currentRouteName() == 'admin.brand.index' || Route::currentRouteName() == 'admin.tag.index' || Route::currentRouteName() == 'admin.page.index' || Route::currentRouteName() == 'admin.news.category.index' || Route::currentRouteName() == 'admin.news.index')
        <link href="{{ asset('backend') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
            rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
            rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
            rel="stylesheet" type="text/css" />
    @endif

    @stack('custom-style')

</head>
