<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
 
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{ config('app.name', 'Laravel') }}" name="description" />
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        {{-- @vite(['resources/js/app.js']) --}}
    </head>
    <body>
        <div class="auth-bg-basic d-flex align-items-center min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="d-flex flex-column min-vh-100 py-5 px-3">
                    <div class="row justify-content-center">
                        <div class="col-xl-5">
                            <div class="text-center text-muted mb-2">
                                <div class="pb-3">
                                    <a href="{{ route('welcome') }}" target="_blank">
                                        <span class="logo-lg">
                                            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="100"> 
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                {{ $slot }}
                <div class="row">
                    <div class="col-xl-12">
                        <div class="mt-4 mt-md-5 text-center">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> {{ config('app.name', 'Laravel') }}. Designed  by <a href="//veenotech.com">Veenode Technologies</a></p>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </div>
        <!-- end container fluid -->
    </div>


        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>

        <script src="{{ asset('assets/js/pages/pass-addon.init.js') }}"></script>
    </body>
</html>
