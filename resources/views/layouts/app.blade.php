<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
 
        <title>{{ config('app.name', 'Laravel') }} -  @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{ config('app.name', 'Laravel') }}" name="description" />
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
        <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">
        <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />   
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/sweetalert/sweetalert2.min.js')}}"></script>
        <script src="{{ asset('assets/libs/sweetalert/sweetalert2-init.js')}}"></script>
    </head>
    <body data-topbar="dark">
        <div id="layout-wrapper">
            @include('layouts.navigation')
            @yield('content')
        </div>


        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
        <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    
        <!-- swiper js -->
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
        
        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>
        <script src="{{ asset('assets/js/pages/datatables.init.js')}}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/form.js') }}"></script>
    </body>
</html>
