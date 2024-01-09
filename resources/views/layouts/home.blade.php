<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') || {{ config('app.name') }}</title>

    <link rel="shortcut icon" href="{{ asset('home/images/favicon/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('home/css/style.css')}}">
    <script src="{{ asset('home/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert/sweetalert2.min.js')}}"></script>
    <script src="{{ asset('assets/libs/sweetalert/sweetalert2-init.js')}}"></script>
</head>

<body>

    @include('layouts.home-header')

    @yield('content')

    @include('layouts.home-footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="{{ asset('home/js/owl.carousel.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        $('.owl-one').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            items: 1,
            autoplay: true,
            autoplayTimeout: 5500,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        $('.owl-two').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1.3
                },
                800: {
                    items: 3.4
                }
            }
        });

        $('.owl-three').owlCarousel({
            loop: false,
            margin: 25,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 1.7
                }
            }
        });


        $('.owl-four').owlCarousel({
            loop: false,
            margin: 25,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                }
            }
        });

        const tags = document.querySelectorAll('.section-events .tag');

        // Add a click event listener to each tag
        tags.forEach(tag => {
            tag.addEventListener('click', () => {
                // Toggle the 'active' class for the clicked tag
                tag.classList.toggle('active');

                // Remove the 'active' class from other tags
                tags.forEach(otherTag => {
                    if (otherTag !== tag) {
                        otherTag.classList.remove('active');
                    }
                });
            });
        });

    </script>
<script>
    $(document).ready(function () {
            setTimeout(function () {
                $('#subscribeModal').modal('show');
            }, 10000); // 20000 milliseconds (2 minute)
        });

</script>
</body>

</html>