<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="Veenode Technologies Ltd."> -->
    <meta name="author" content="Veenode Technologies Ltd.">
    <!-- <meta name="keywords" content="Veenode Technologies Ltd."> -->

    <!-- Title Page-->
    <title>Event Registration | Foodpreneurshub</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('home/register/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('home/register/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('home/register/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('home/register/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico" type="image/x-icon">
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert/sweetalert2.min.js')}}"></script>
    <script src="{{ asset('assets/libs/sweetalert/sweetalert2-init.js')}}"></script>

    <!-- Main CSS-->
    <link href="{{ asset('home/register/css/main.css') }}" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo" style="background-color: #108537;">
        <!-- <div class="image-center">
            <img src="../images/logo.png" alt="">
        </div> -->
        <div class="wrapper wrapper--w680">
            <div class="card card-1"  >
                <div class="card-heading" style="background: url({{ asset('home/images/logo.png')}}) no-repeat center; margin:10px"></div>
                <div class="card-body">
                    <h2 class="title">Registration Details</h2>
                    <p class="title">Event Title - {{ $event->title }}</p>
                    @include('custom.alert')
                    <form method="POST" action="{{ route('home.event.store') }}">
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="about">
                                    <option disabled="disabled" selected="selected">Which Perfectly Describes You?</option>
                                    <option>I am a food entrepreneur</option>
                                    <option>I am a food entrepreneur i.e I own a food processing business</option>
                                    <option>I am a food professional i.e I work as an empolyee in the food industry, researcher e.t.c</option>
                                    <option>I am an aspiring food entrepreneur i.e I want to start a food processing business</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Email Address" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="First Name" name="firstname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Last Name" name="lastname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Phone Number" name="phone">
                        </div>
                        @csrf
                        <input type="hidden" name="event_id" value="{{ $event->id }}">
                        
                        
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                            <a href="{{ route('home.event', $event->slug) }}" class="btn btn--radius btn--green">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('home/register/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('home/register/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('home/register/vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('home/register/vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('home/register/js/global.js') }}"></script>

</body>

</html>
<!-- end document-->
