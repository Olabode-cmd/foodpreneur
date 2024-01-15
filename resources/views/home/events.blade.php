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
                                    <img src="{{ asset('home/images/info-session.png') }}" alt="event">
                                </div>
                        
                                <div class="col-9">
                                    <p class="bold text-grey">2024 • Virtual</p>
                        
                                    <h1 class="title">Food Business Growth Info Session</h1>
                                    <p class="my-3">
The Food Business Growth Program is a transformative initiative tailored to propel food processing businesses to new heights, targeting their owners. This program empowers businesses to expand their market reach and optimize operations, focusing on crucial aspects like market analysis, product innovation, and efficient scaling strategies.

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
                                    <img src="{{ asset('home/images/business-launch.png') }}" alt="event">
                                </div>
                        
                                <div class="col-9">
                                    <p class="bold text-grey">2024 • Virtual</p>
                        
                                    <h1 class="title">Food Business Launch</h1>
                                    <p class="my-3">
The Food Processing Business Launch Program is a comprehensive initiative designed for aspiring entrepreneurs aiming to start their food processing ventures. Specially curated with you in mind, this program contains practical modules, steps, and resources to guide individuals through the complexities of establishing a successful food processing business. By the end of this 16-week program, you can be assured of having a product ready for sale if you diligently follow all the modules and steps.


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
                                    <img src="{{ asset('home/images/2025-summit.png') }}" alt="event">
                                </div>
                        
                                <div class="col-9">
                                    <p class="bold text-grey">2025 • Virtual</p>
                        
                                    <h1 class="title">Food Innovation Summit, 2025</h1>
                                    <p class="my-3">
                                        Prepare to witness a paradigm shift in the food processing industry at the 2025 Food Innovation Summit. This summit is a convergence of thought leaders, industry experts, and innovators dedicated to pushing the boundaries of food processing through cutting-edge technologies, sustainable practices, and groundbreaking solutions.


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