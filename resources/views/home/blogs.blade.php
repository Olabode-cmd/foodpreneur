@extends('layouts.home')

@section('title', 'Blogs')

@section('content')

<main>
    <section class="blog-header">
        <div class="container">
            <div class="text-center">
                <p class="bold text-primary">Foodpreneurial Knowledge</p>
                <h1 class="title">The Foodpreneurial Blog</h1>
                <!-- <h1 class="title">The Food Innovators</h1> -->

                <p class="subtitle">
                    Get the latest industry news, recipes, interviews, technology and resources. Explore some <br class="d-none d-md-block" /> of our most popular content
                    and learn something new.
                </p>

                <div class="blog-img">
                    <a href="{{ route('home.blog', 'plantain-chip-production') }}">
                        <img src="{{ asset('home/images/blog-header.png') }}" alt="blog-header">
                        
                        <div class="shade"></div>
                        
                        <div class="content">
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="title">
                                    <h1>Bread Production: How to make Nigerian Bread</h1>
                                    <p>
                                        Bread is a staple food eaten in almost every home. Both old and young eat it. According to Statista, the
                                        value of the
                                        Nigerian baked goods market amounted to about 185.5 million Naira in 2016, 189.2 million Naira in 2017.
                                    </p>
                                </div>
                        
                                <div class="detail">
                                    <p>Written by</p>
                                    <p class="bold">Jane Adetutu</p>
                                </div>
                        
                                <div class="detail">
                                    <p>Published by</p>
                                    <p class="bold">14th July, 2024</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-blogposts">
        <div class="search">
            <div class="col-md-8 mx-auto">
                <form action="#">
                    <img src="{{ asset('home/images/search.png') }}" alt="search">
                    <input type="search" class="search-input" placeholder="What are you looking for?">
                    <input type="submit" value="Search" class="btn btn-primary">
                </form>
            </div>
        </div>

        <div class="container pt-4">
            <div class="text-center">
                <h1 class="title mb-2">Browse by Category</h1>
                <div class="d-flex flex-wrap justify-content-center">
                    <span class="tag active">News</span>
                    <span class="tag">Food Processing Ideas</span>
                    <span class="tag">Opportunities</span>
                    <span class="tag">Ingredients Spotlight</span>
                    
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 col-">
                    <div class="blog-card">
                        <a href="{{ route('home.blog', 'plantain-chip-production') }}">
                            <div class="blog-img">
                                <img src="{{ asset('home/images/blog-img1.png') }}" alt="blog">
                            </div>
                    
                            <div class="blog-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">Plantain Chip Production</h3>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open">
                                </div>
                                <p>
                                    Bread is a staple food eaten in almost every home. Both old and young eat
                                    it. According to Statista, the
                                    value of the
                                    Nigerian bread...
                                </p>
                    
                                <div class="d-flex">
                                    <span class="blog-tag">Food</span>
                                    <span class="blog-tag">Business</span>
                                    <span class="blog-tag">Idea</span>
                                </div>

                                <p class="text-grey mt-3">Posted - 11 Oct, 2023</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-">
                    <div class="blog-card">
                        <a hhref="{{ route('home.blog', 'plantain-chip-production') }}">
                            <div class="blog-img">
                                <img src="{{ asset('home/images/blog-img2.png') }}" alt="blog">
                            </div>
                    
                            <div class="blog-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">Plantain Chip Production</h3>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open">
                                </div>
                                <p>
                                    Bread is a staple food eaten in almost every home. Both old and young eat
                                    it. According to Statista, the
                                    value of the
                                    Nigerian bread...
                                </p>
                    
                                <div class="d-flex">
                                    <span class="blog-tag">Food</span>
                                    <span class="blog-tag">Business</span>
                                    <span class="blog-tag">Idea</span>
                                </div>

                                <p class="text-grey mt-3">Posted - 11 Oct, 2023</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-">
                    <div class="blog-card">
                        <a hhref="{{ route('home.blog', 'plantain-chip-production') }}">
                            <div class="blog-img">
                                <img src="{{ asset('home/images/blog3.png') }}" alt="blog">
                            </div>
                
                            <div class="blog-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">Groundnut Oil Production</h3>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open">
                                </div>
                                <p>
                                    Groundnut is also known as peanut. It is a legume that is valued for its edible seeds and oil content which ranges
                                    between 40–56 %.
                                </p>
                
                                <div class="d-flex">
                                    <span class="blog-tag">Food</span>
                                    <span class="blog-tag">Business</span>
                                    <span class="blog-tag">Idea</span>
                                </div>

                                <p class="text-grey mt-3">Posted - 11 Oct, 2023</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-trending">
        <div class="container">
            <div class="text-center">
                <h1 class="title">Top Three Trending Posts</h1>
                <p class="subtitle">See what other industry leaders are reading</p>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="trend-card">
                        <a href="#">
                            <div class="trend-tag success">
                                Food Service
                            </div>
                            <div class="trend-img">
                                <img src="{{ asset('home/images/trend1.png') }}" alt="trend">
                            </div>
                            
                            <div class="trend-detail">
                                <div class="d-flex align-items-start justify-content-between">
                                    <h4>Gourmet Food Truck: Mobile Culinary Adventure</h4>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open">
                                </div>
                            
                                <p>
                                    Dive into the world of mobile entrepreneurship with a gourmet food truck! Discover how to transform your passion
                                    ...
                                </p>
                            
                                <p class="bold mt-4">Anita Benita</p>
                                <p class="text-grey">Posted - 11 Oct, 2023</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="trend-card">
                        <a href="#">
                            <div class="trend-tag purple">
                                Catering
                            </div>
                            <div class="trend-img">
                                <img src="{{ asset('home/images/trend2.png') }}" alt="trend">
                            </div>
                
                            <div class="trend-detail">
                                <div class="d-flex align-items-start justify-content-between">
                                    <h4>Food Catering for Events</h4>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open">
                                </div>
                
                                <p>
                                    Embrace your culinary heritage and share it with the world through a Nigerian food catering venture. Whether it's
                                    weddings...
                                </p>
                
                                <p class="bold mt-4">Tunde Gbada</p>
                                <p class="text-grey">Posted - 11 Oct, 2023</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="trend-card">
                        <a href="#">
                            <div class="trend-tag orange">
                                Catering
                            </div>
                            <div class="trend-img">
                                <img src="{{ asset('home/images/trend3.png') }}" alt="trend">
                            </div>
                
                            <div class="trend-detail">
                                <div class="d-flex align-items-start justify-content-between">
                                    <h4>Spice Blending Startup</h4>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open">
                                </div>
                
                                <p>
                                    Delve into the world of spice blending and create your own unique spice blends inspired by Nigerian flavors. Learn how
                                    to source...
                                </p>
                
                                <p class="bold mt-4">Sharon Rose</p>
                                <p class="text-grey">Posted - 11 Oct, 2023</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <img src="{{ asset('home/images/connect-purple.png') }}" alt="connect" class="connect-1 d-none d-md-block">
            <img src="{{ asset('home/images/connect-purple.png') }}" alt="connect" class="connect-2 d-none d-md-block">
        </div>
    </section>

    <section class="section-enrol">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-up">
                    <h1 class="title">Enroll in Our Food Processing Course Today!</h1>
                    <p class="subtitle">Unlock the secrets of Business success</p>
    
                    <a href="{{ route('home.courses') }}" class="btn btn-primary mt-4">Explore Courses</a>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('home/images/enrol.png') }}" alt="enroll" class="my-3">
                </div>
            </div>
    
            <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-1 d-none d-md-block">
            <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-2">
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
                    <p class="subtitle">Get timely updates and newsletters on the latest blog posts and Foodpreneurs Hub trends.</p>
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