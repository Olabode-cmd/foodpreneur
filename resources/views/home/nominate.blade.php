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
    <title>Nominate Entrepreneur of the Month | Foodpreneurshub</title>

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
                    <h2 class="title">Foodpreneurs Star of The Month Nomination.</h2>
                    @include('custom.alert')
                    <form method="POST" action="{{ route('home.storeNominate') }}">
                      
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Your First Name" name="firstname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Your Last Name" name="lastname">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="voter">
                                    <option disabled="disabled" selected="selected">Are you nominating yourself or someone else? </option>
                                    <option>Self</option>
                                    <option>Others</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nominee’s First name" name="nominees_firstname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nominee’s Last name" name="nominees_lastname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nominee’s Occupation" name="nominees_occupation">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Country" name="country">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="City" name="city">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Link to business website (if any)" name="business">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Link to personal website (if any)" name="personal">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="IG handle" name="instagram">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="LinkedIn handle" name="linkedin">
                        </div>
                        <div class="input-group">
                            <textarea name="reason" style="width:100%;resize:none;border:none;outline:none " id="" cols="30" rows="5" placeholder="Why should the nominee be featured as a Foodpreneurs star of the month? (100 words limit)" name="reason" maxlength="101"></textarea>
                        </div>

                        @csrf
                        
                        
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                            <a href="{{ route('home.foodProfessionals') }}">Go Back</a>
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
