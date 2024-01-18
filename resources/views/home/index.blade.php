@extends('layouts.home')
@section('title', 'Home')

@section('content')
<style>
    .owl-item{
        /* width: 350px !important;
        display: inline; */
    }
</style>
<main>

    <div class="modal fade" tabindex="-1" role="dialog" data-bs-backdrop="static" id="subscribeModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Subscribe to our newsletter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @include('custom.alert')
                <form action="{{ route('home.newsletter') }}" method="POST">
                    @csrf
                    <div class="modal-body pt-4">
                        <input  type="email" name="email" required placeholder="Email Address" id="subscribeEmail" class="form-control py-2">
                        <button type="submit" class="btn btn-primary mt-2 w-100">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <section class="section-hero">
        <div class="owl-carousel owl-theme owl-one">
            <div class="item">
                <div class="hero-banner banner1" style="background: url('{{ asset("home/images/16.png") }}') no-repeat;">
                    <div class="banner-card">
                        <h1>Start your <span class="text-primary">Food Processing Business</span> with our exclusive Courses</h1>
                        <p>Craft, Create, and Conquer the Food Industry!</p>

                        <a href="{{ route('home.courses') }}" class="btn btn-primary mt-4">Register Now</a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="hero-banner banner2" style="background: url('home/images/bg-hero2.png') no-repeat;">
                    <div class="banner-card">
                        <h1>Join our <span class="text-primary">Community of Food Innovators</span> and access opportunities for growth and collaboration</h1>
                        <p>Join Our Community of Food Entrepreneurs and Share the Flavor of Achievement</p>

                        <a href="/register/#" class="btn btn-primary mt-4">Join Community</a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="hero-banner banner3" style="background: url('home/images/bg-hero3.png') no-repeat;">
                    <div class="banner-card">
                        <h1>Feast Your Eyes on <br /> <span class="text-primary">Foodpreneurial Wisdom</span></h1>
                        <p>Explore Our Blog, Where Food Entrepreneurs Share Their Secret Recipes for Success</p>

                        <a href="{{ route('home.blogs') }}" class="btn btn-primary mt-4">Start Reading</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-hub">
        <div class="container">
            <h1 class="title text-center"><span class="text-primary">3,000+</span> Entrepreneurs Trust Foodpreneurs
                Hub</h1>

            <div class="row mt-4 ">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="hub-card">
                        <h1>20+</h1>
                        <p>classes</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="hub-card">
                        <h1>3,000+</h1>
                        <p>members</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="hub-card">
                        <h1>10+</h1>
                        <p>experts</p>
                    </div>
                </div>
            </div>
        </div>

        <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-1 d-none d-md-block">
        <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-2 d-none d-md-block">
    </section>

    <section class="section-marketplace">
        <div class="container mb-4">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div data-aos="fade-up">
                    <h3>From Ideation to Profitability</h3>
                    <p>Empower your food entrepreneurship journey with us.</p>
                </div>

                <a href="{{ route('home.courses') }}" class="btn btn-primary my-2" data-aos="fade-up" data-aos-delay="300">Explore Courses</a>
            </div>
        </div>

        <div class="course-slide" data-aos="fade-up">
            <div class="owl-carousel owl-theme owl-two">
                @foreach ($courses as $course)
                    <div class="course-card">
                        <div class="course-img">
                            <img src="{{ asset('storage/'.$course->image) }}" alt="market">
                        </div>
                        <div class="course-content">
                            <div class="d-flex justify-content-between mb-2">
                                <!-- <p>12,897 students</p> -->
                                <p>{{ $course->course_hours }}</p>
                            </div>

                            <h1>
                                <a href="{{ route('home.course', $course->slug) }}" style="color: black;">{{ $course->name }}</a></h1>
                            <!-- <p class="name">Olushola Oladejo</p> -->

                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h1>NGN {{ number_format($course->slashed_price, 2) }}</h1>
                                    <h4>NGN {{ number_format($course->price, 2) }}</h4>
                                </div>

                                <div>
                                    <p>
                                        <span class="tag">
                                            <a href="{{ route('home.course', $course->slug) }}" style="color: black;">Read More</a>
                                        </span> 
                                        &nbsp; 4.5 <img src="home/images/star.png" alt="star" class="icon" /> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <img src="home/images/connect.png" alt="connect" class="connect-1 d-none d-md-block">
            <img src="home/images/connect.png" alt="connect" class="connect-2 d-none d-md-block">
        </div>
    </section>

    <section class="section-community">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-md-3">
                    <h1 class="tag-purple tag">Empowerment</h1>
                </div>

                <div class="col-md-3">
                    <h1 class="tag-primary tag">Excellence</h1>
                </div>

                <div class="col-md-3">
                    <h1 class="tag-primary tag">Collaboration</h1>
                </div>

                <div class="col-md-3">
                    <h1 class="tag-orange tag">Innovation</h1>
                </div>
            </div>

            <img src="home/images/community.png" data-aos="fade-up" data-aos-delay="200" alt="community" class="my-4">

            <div class="row mt-4">
                <div class="col-md-6" data-aos="fade-up">
                    <h1 class="title">Foodpreneurs Hub <br /> <span class="text-primary">Community</span></h1>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <p class="mb-4">Collaborate and grow with other food innovators on Africa’s 
                        fastest growing community of food professionals and entrepreneurs</p>

                    <form action="#">
                        <input type="email" placeholder="Email Address" class="email-input">
                        <input type="submit" value="Join Community" class="btn btn-primary">
                    </form>
                </div>
            </div>

            <img src="home/images/connect.png" alt="connect" class="connect-1 d-none d-md-block">
            <img src="home/images/connect.png" alt="connect" class="connect-2 d-none d-md-block">
        </div>
    </section>

    <section class="section-blog">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-up">
                    <h1 class="title">The Foodpreneur's Blog</h1>
                    <p class="mb-4">Discover food processing ideas, industry news and success stories of entrepreneurs.</p>

                    <a href="{{ route('home.blogs') }}" class="btn btn-primary-outline">More Blog Posts</a>
                </div>

                <div class="col-md-6 owl" data-aos="fade-up" data-aos-delay="300">
                    <div class="owl-carousel owl-theme owl-three">
                        @foreach ($blogs as $blog)
                            <div class="item">
                                <div class="blog-card">
                                    <a href="{{ route('home.blog', $blog->slug) }}">
                                        <div class="blog-img">
                                            <img src="{{ asset('storage/'.$blog->image) }}" alt="blog">
                                        </div>
                                
                                        <div class="blog-content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="title">{{ $blog->title }}</h3>
                                                <img src="{{ asset('home/images/open.png') }}" alt="open">
                                            </div>
                                            <p>
                                                {{ implode(' ', array_slice(explode(' ', strip_tags($blog->description)), 0, 28)) }} ...
                                            </p>
                                
                                            <div class="d-flex">
                                                @foreach (json_decode($blog->tag) as $tag)
                                                @if ($tag != null)
                                                    <span class="blog-tag">{{ $tag }}</span>
                                                @endif
                                            @endforeach
                                            </div>
            
                                            <p class="text-grey mt-3">Posted - {{ $blog->created_at->format('d M, Y') }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="shade"> &nbsp; </div>
        </div>


    </section>

    <section class="section-testimonial">
        <div class="container">
            <h1 class="title text-center">See what our Customers  are saying about <span class="text-primary">Foodpreneurs Hub.</span></h1>

            <div class="row">
                @foreach ($testimonials as $testimonial)
                <div class="col-md-4">
                    <div class="testimonial-card" data-aos="fade-up">
                        <p class="mb-4">
                            <span class="bold">{{ $testimonial->description }}</span>.
                        </p>

                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <!-- <img src="home/images/jenny.png" alt="jenny" class="me-2"> -->
                                <div>
                                    <p class="name">{{ $testimonial->name }}</p>
                                    <p class="location">{{ $testimonial->location }}</p>
                                </div>
                            </div>

                            <div class="d-flex">
                                @for($i = 0; $i < $testimonial->rating; $i++)
                                    <img src="home/images/star.png" alt="star">
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <img src="home/images/connect.png" alt="connect" class="connect-1 d-none d-md-block">
            <img src="home/images/connect.png" alt="connect" class="connect-2 d-none d-md-block">
            <img src="home/images/connect.png" alt="connect" class="connect-3 d-none d-md-block">
        </div>
    </section>

    <section class="section-events">
        <h1 class="title text-center" data-aos="fade-up">Events</h1>

        <div class="search" data-aos="fade-up">
            <div class="col-md-8 mx-auto">
                <form action="#">
                    <img src="home/images/search.png" alt="search">
                    <input type="search" class="search-input" placeholder="Search for a city to find events">
                    <input type="submit" value="Search" class="btn btn-primary">
                </form>
            </div>
        </div>

        <div class="container">
            <div class="px-3">
                <div class="d-flex align-items-center justify-content-center flex-wrap" data-aos="fade-up">
                    <p class="bold my-2">Filter by:</p>

                    <div class="d-flex flex-wrap">
                        @foreach ($eventCategories as $key => $categories)
                            <span class="tag {{ $key == 0 ? 'active' : '' }}">{{ $categories->name }}</span>
                        @endforeach
                        
                    </div>
                </div>

                <div class="owl-carousel owl-theme owl-four mt-4" data-aos="fade-up">
                    @if ($events->count() > 0)
                        @foreach ($events as $event)
                            <div class="item">
                                <div class="event-card">
                                    <div class="event-img">
                                        <img src="{{ asset('storage/'.$event->image) }}" alt="event">
                                    </div>
                                    <div class="event-details">
                                        <p class="bold">{{ $event->date }} &bull; {{ $event->city }}</p>
                                        <h2 class="title">{{ $event->title }}</h1>
        
                                            <div class="d-flex align-items-center mt-4">
                                                <a href="{{ route('home.event', $event->slug) }}" class="btn btn-primary me-4">View Details</a>
                                                <div class="d-flex align-items-center">
                                                    <p class="text-primary">Share</p>
                                                    <img src="home/images/share.png" alt="share" class="icon">
                                                </div>
                                            </div>
        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else

                    <div class="item">
                        <div class="event-card">
                            <div class="event-img">
                                <img src="{{ asset('home/images/20.png') }}" alt="event">
                            </div>
                            <div class="event-details">
                                <p class="bold">Jan. 12 - Jan. 13, 2024 • Virtual</p>
                                <h2 class="title">Food Innovation Summit</h1>

                                    <div class="d-flex align-items-center mt-4">
                                        <a href="https://mailchi.mp/32707c1eaf2f/2024-food-innovation-summit-registration" class="btn btn-primary me-4">View Details</a>
                                        <div class="d-flex align-items-center">
                                            <p class="text-primary">Share</p>
                                            <img src="home/images/share.png" alt="share" class="icon">
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="event-card">
                            <div class="event-img">
                                <img src="{{ asset('home/images/info-session.png') }}" alt="event">
                            </div>
                            <div class="event-details">
                                <p class="bold">2024 • Virtual</p>
                                <h2 class="title">Food Business Growth Info Session</h1>

                                    <div class="d-flex align-items-center mt-4">
                                        <a href="#" class="btn btn-primary me-4">View Details</a>
                                        <div class="d-flex align-items-center">
                                            <p class="text-primary">Share</p>
                                            <img src="home/images/share.png" alt="share" class="icon">
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="event-card">
                            <div class="event-img">
                                <img src="{{ asset('home/images/business-launch.png') }}" alt="event">
                            </div>
                            <div class="event-details">
                                <p class="bold">O2024 • Virtual</p>
                                <h2 class="title">Food Business Launch
                                    </h1>

                                    <div class="d-flex align-items-center mt-4">
                                        <a href="events.html" class="btn btn-primary me-4">View Details</a>
                                        <div class="d-flex align-items-center">
                                            <p class="text-primary">Share</p>
                                            <img src="home/images/share.png" alt="share" class="icon">
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="event-card">
                            <div class="event-img">
                                <img src="{{ asset('home/images/2025-summit.png') }}" alt="event">
                            </div>
                            <div class="event-details">
                                <p class="bold">2025 • Virtual</p>
                                <h2 class="title">Food Innovation Summit, 2025</h1>

                                    <div class="d-flex align-items-center mt-4">
                                        <a href="#" class="btn btn-primary me-4">View Details</a>
                                        <div class="d-flex align-items-center">
                                            <p class="text-primary">Share</p>
                                            <img src="home/images/share.png" alt="share" class="icon">
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="event-card">
                            <div class="event-img">
                                <img src="home/images/event2.png" alt="event">
                            </div>
                            <div class="event-details">
                                <p class="bold">Oct 28, 2023 &bull; Abuja</p>
                                <h2 class="title">Taste of the World: Global Culinary Exploration</h1>

                                    <div class="d-flex align-items-center mt-4">
                                        <a href="#" class="btn btn-primary me-4">View Details</a>
                                        <div class="d-flex align-items-center">
                                            <p class="text-primary">Share</p>
                                            <img src="home/images/share.png" alt="share" class="icon">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                        
                    @endif
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('home.events') }}" class="tag-primary btn">Load More</a>
        </div>
    </section>

    <section class="section-guide" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="home/images/guide.png" alt="guide">
                </div>
                <div class="col-md-6">
                    <h1 class="title my-3">Free Bakery Business Guide in your Inbox</h1>
                    <p class="subtitle">Discover Inspiring Stories and Tips in Our Blog for Food Entrepreneurs.</p>

                    <form action="{{ route('home.ebook') }}" method="POST">
                        @csrf
                        <input type="text" required name="name" placeholder="First Name" class="form-input">
                        <input type="email" required name="email" placeholder="Email" class="form-input">
                        <input type="submit" value="Get Free eBook" class="btn btn-outline-light">
                    </form>
                </div>
            </div>

            <img src="home/images/connect.png" alt="connect" class="connect-1 d-none d-md-block">
            <img src="home/images/connect.png" alt="connect" class="connect-2 d-none d-md-block">
        </div>
    </section>

    <section class="section-enrol">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-up">
                    <h1 class="title">Enrol in Our Food Processing Course Today!</h1>
                    <p class="subtitle">Unlock the secrets of Business success</p>

                    <a href="{{ route('home.courses') }}" class="btn btn-primary mt-4">Explore Courses</a>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <img src="home/images/enrol.png" alt="enroll" class="my-3">
                </div>
            </div>

            <img src="home/images/connect.png" alt="connect" class="connect-1 d-none d-md-block">
            <img src="home/images/connect.png" alt="connect" class="connect-2 d-none d-md-block">
        </div>
    </section>

</main>
@endsection