@extends('layouts.home')

@section('title', 'Blog Title')

@section('content')
<main>
    <section class="blog">
        <div class="container">
            <p class="text-uppercase text-primary bold mb-4">business idea</p>
            <p class="text-grey">{{ $blog->created_at->format('d M, Y') }} &bull</p>

            <h1 class="title">{{ $blog->title }}</h1>

            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('storage/'.$blog->author_image) }}" alt="jane" class="profile">
                    <div>
                        <p class="bold">{{ $blog->author }}</p>
                        <p class="text-grey">{{ $blog->author_role }}</p>
                    </div>
                </div>

                <div class="d-flex align-items-center mt-4" style="cursor: pointer">
                    <p class="text-primary bold me-2">Share</p>
                    <img src="{{ asset('home/images/share.png') }}" alt="share" class="icon">
                </div>
            </div>

            <img src="{{ asset('storage/'.$blog->image) }}" alt="blog" class="w-100 main">

            <div class="blog-body">
                <p>{!! $blog->description !!}
                </p>

                <div class="d-flex align-items-center justify-content-between mt-4">
                    <div>
                        <p class="mb-0">Written by:</p>
                        <h5>{{ $blog->author }}</h5>

                        <div class="mt-4 d-flex align-items-center">
                            <div class="d-flex align-items-center me-3">
                                <img src="{{ asset('home/images/heart.png') }}" alt="heart">
                                <span>{{ $blog->views }}</span>
                            </div>
                        
                           
                        </div>
                    </div>

                    <div>
                        <div class="d-flex align-items-center">
                            <p class="me-4 mb-0">Share: </p>

                            <div class="d-flex" data-aos="fade-up" data-aos-delay="300">
                                <a href="#" class="me-2">
                                    <img src="{{ asset('home/images/pinterest.png') }}" alt="pinterest">
                                </a>
                                <a href="#" class="me-2">
                                    <img src="{{ asset('home/images/x-dark.png') }}" alt="x">
                                </a>
                                <a href="#" class="me-2">
                                    <img src="{{ asset('home/images/facebook-dark.png') }}" alt="facebook">
                                </a>
                                <a href="#" class="me-2">
                                    <img src="{{ asset('home/images/linkedin-dark.png') }}" alt="linkedin">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-orange">
        <div class="container">
            <div class="orange-card">
                <div class="orange-img">
                    <img src="{{ asset('home/images/market2.png') }}" alt="orange">
                </div>

                <div class="orange-content">
                    <h1 class="bold">Enrol in our Food Processsing Course Today</h1>
                    <p>Unlock the secrets of Business success</p>
                
                    <a href="{{ route('home.courses') }}" class="btn btn-orange mt-2">Explore Courses</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-trending author">
        <div class="container">
            <div class="text-center">
                <h1 class="title">From the Author's Desk</h1>
                <p class="subtitle">Here are articles written by Mary Vincent</p>
            </div>

            <div class="owl-carousel owl-theme owl-one mt-4">
                <div class="item">
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
                                    <img src="{{ asset('home/images/open.png') }}" alt="open" class="icon">
                                </div>
                    
                                <p>
                                    Dive into the world of mobile entrepreneurship with a gourmet food truck!
                                    Discover how
                                    to transform your passion
                                    ...
                                </p>
                    
                                <p class="bold mt-4">Anita Benita</p>
                                <p class="text-grey">Posted - 11 Oct, 2023</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
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
                                    <img src="{{ asset('home/images/open.png') }}" alt="open" class="icon">
                                </div>
                    
                                <p>
                                    Embrace your culinary heritage and share it with the world through a Nigerian food
                                    catering venture. Whether it's
                                    weddings...
                                </p>
                    
                                <p class="bold mt-4">Tunde Gbada</p>
                                <p class="text-grey">Posted - 11 Oct, 2023</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
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
                                    <img src="{{ asset('home/images/open.png') }}" alt="open" class="icon">
                                </div>
                    
                                <p>
                                    Delve into the world of spice blending and create your own unique spice blends inspired
                                    by Nigerian flavors. Learn how
                                    to source...
                                </p>
                    
                                <p class="bold mt-4">Sharon Rose</p>
                                <p class="text-grey">Posted - 11 Oct, 2023</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
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
                                    <img src="{{ asset('home/images/open.png') }}" alt="open" class="icon">
                                </div>
                
                                <p>
                                    Dive into the world of mobile entrepreneurship with a gourmet food truck!
                                    Discover how
                                    to transform your passion
                                    ...
                                </p>
                
                                <p class="bold mt-4">Anita Benita</p>
                                <p class="text-grey">Posted - 11 Oct, 2023</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="item">
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
                                    <img src="{{ asset('home/images/open.png') }}" alt="open" class="icon">
                                </div>
                
                                <p>
                                    Embrace your culinary heritage and share it with the world through a Nigerian food
                                    catering venture. Whether it's
                                    weddings...
                                </p>
                
                                <p class="bold mt-4">Tunde Gbada</p>
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

    <section class="section-related">
        <div class="container">
            <h1 class="title">Related Articles</h1>
            <div class="owl-carousel owl-theme owl-one mt-4">
                <div class="item">
                    <div class="blog-card">
                        <a href="#">
                            <div class="blog-img">
                                <img src="{{ asset('home/images/blog-img1.png') }}" alt="blog">
                            </div>
                    
                            <div class="blog-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">Plantain Chip Production</h3>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open" class="icon">
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
            
                <div class="item">
                    <div class="blog-card">
                        <a href="#">
                            <div class="blog-img">
                                <img src="{{ asset('home/images/blog-img2.png') }}" alt="blog">
                            </div>
                    
                            <div class="blog-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">Plantain Chip Production</h3>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open" class="icon">
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
            
                <div class="item">
                    <div class="blog-card">
                        <a href="#">
                            <div class="blog-img">
                                <img src="{{ asset('home/images/blog3.png') }}" alt="blog">
                            </div>
                    
                            <div class="blog-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">Groundnut Oil Production</h3>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open" class="icon">
                                </div>
                                <p>
                                    Groundnut is also known as peanut. It is a legume that is valued for its edible seeds and oil content
                                    which ranges
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
            
                <div class="item">
                    <div class="blog-card">
                        <a href="#">
                            <div class="blog-img">
                                <img src="{{ asset('home/images/blog-img1.png') }}" alt="blog">
                            </div>
                    
                            <div class="blog-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">Plantain Chip Production</h3>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open" class="icon">
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
            
                <div class="item">
                    <div class="blog-card">
                        <a href="#">
                            <div class="blog-img">
                                <img src="{{ asset('home/images/blog-img2.png') }}" alt="blog">
                            </div>
                    
                            <div class="blog-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">Plantain Chip Production</h3>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open" class="icon">
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
    
                    <form action="#" class="relative mt-4">
                        <input type="email" placeholder="Email address" class="email-input">
                        <input type="submit" value="Subscribe" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection