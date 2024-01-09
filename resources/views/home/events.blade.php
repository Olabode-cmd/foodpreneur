@extends('layouts.home')

@section('title', 'Upcoming Events')

@section('content')
<main>
    <section class="event-wrapper padding">
        <div class="container">
            <div class="text-center">
                <h1 class="title">Upcoming Events</h1>
                <p class="subtitle">Attend one of our events to elevate your career or business.
                </p>
            </div>
        </div>

        <div class="search">
            <div class="col-md-8 mx-auto">
                <form action="#">
                    <img src="{{ asset('home/images/search.png') }}" alt="search">
                    <input type="search" class="search-input" placeholder="Search for a city to find events">
                    <input type="submit" value="Search" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>


    <section class="event-list">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="events">
                        <div class="event">
                            <div class="row">
                                <div class="col-3">
                                    <img src="{{ asset('home/images/20.png') }}" alt="event">
                                </div>

                                <div class="col-9">
                                    <p class="bold text-grey">Jan. 12 - Jan. 13, 2024 • Virtual</p>

                                    <h1 class="title">Food Innovation Summit</h1>
                                    <p class="my-3">
                                        The Food Innovation Summit will be a flagship annual gathering of industry experts, entrepreneurs, and enthusiasts in Africa’s 
                                        food processing industry. This summit will serve as a platform for sharing innovative ideas, forging partnerships, and discovering 
                                        cutting-edge solutions to address the challenges and opportunities Africa’s food technology, sustainability, and security landscape. 
                                        Participants will engage in lecture, workshop, panel discussion and networking sessions, all aimed at shaping the future of the food 
                                        industry.
                                    </p>

                                    <div class="d-flex align-items-center">
                                        <a href="{{route('home.event','how-are-you')}}" class="btn btn-primary me-3">View Details</a>
                                        <a href="https://mailchi.mp/32707c1eaf2f/2024-food-innovation-summit-registration" class="btn btn-text">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event">
                            <div class="row">
                                <div class="col-3">
                                    <img src="{{ asset('home/images/event2.png') }}" alt="event">
                                </div>
                        
                                <div class="col-9">
                                    <p class="bold text-grey">10am WAT Oct 28, 2023 • Abuja</p>
                        
                                    <h1 class="title">Taste of the World: Global Culinary Exploration</h1>
                                    <p class="my-3">
                                        Join us for a series of immersive workshops designed to empower aspiring foodpreneurs like you. Our
                                        expert facilitators,
                                        who have a wealth of experience in the food industry, will guide you through the essential ingredients
                                        needed to start,
                                        run, and grow a thriving food business.
                                    </p>
                        
                                    <div class="d-flex align-items-center">
                                        <a href="{{route('home.event','how-are-you')}}" class="btn btn-primary me-3">View Details</a>
                                        <a href="#" class="btn btn-text">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event">
                            <div class="row">
                                <div class="col-3">
                                    <img src="{{ asset('home/images/event3.png') }}" alt="event">
                                </div>
                        
                                <div class="col-9">
                                    <p class="bold text-grey">10am WAT Oct 28, 2023 • Abuja</p>
                        
                                    <h1 class="title">The Role of Food Innovators in Africa’s Economy</h1>
                                    <p class="my-3">
                                        Join us for a series of immersive workshops designed to empower aspiring foodpreneurs like you. Our
                                        expert facilitators,
                                        who have a wealth of experience in the food industry, will guide you through the essential ingredients
                                        needed to start,
                                        run, and grow a thriving food business.
                                    </p>
                        
                                    <div class="d-flex align-items-center">
                                        <a href="{{route('home.event','how-are-you')}}" class="btn btn-primary me-3">View Details</a>
                                        <a href="#" class="btn btn-text">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="#" class="tag-primary btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-newsletter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('home/images/bg-hero2.png') }}" alt="image">
                </div>
    
                <div class="col-md-6">
                    <h1 class="title mt-2">Subscribe to our Newsletter</h1>
                    <p class="subtitle">Get timely updates and newsletters on the latest blog posts and Foodpreneurs Hub
                        trends.</p>
    
                        @include('custom.alert')
                        <form action="{{ route('home.newsletter') }}" method="POST" class="relative mt-4">
                            @csrf
                            <input type="email" name="email" required placeholder="Email address" class="email-input">
                            <input type="submit" value="Subscribe" class="btn btn-primary">
                        </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection