@extends('layouts.home')
@section('title', 'Home')

@section('content')
    
<main>

    <div class="modal fade" tabindex="-1" role="dialog" data-bs-backdrop="static" id="subscribeModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Subscribe to our newsletter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#">
                    <div class="modal-body pt-4">
                        <input type="email" placeholder="Email Address" id="subscribeEmail" class="form-control py-2">
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

                        <a href="/courses.html" class="btn btn-primary mt-4">Register Now</a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="hero-banner banner2" style="background: url('home/images/bg-hero2.png') no-repeat;">
                    <div class="banner-card">
                        <h1>Join our <span class="text-primary">Community of Food Innovators</span> and access opportunities for growth and collaboration</h1>
                        <p>Join Our Community of Food Entrepreneurs and Share the Flavor of Achievement</p>

                        <a href="/register/community.html" class="btn btn-primary mt-4">Join Community</a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="hero-banner banner3" style="background: url('home/images/bg-hero3.png') no-repeat;">
                    <div class="banner-card">
                        <h1>Feast Your Eyes on <br /> <span class="text-primary">Foodpreneurial Wisdom</span></h1>
                        <p>Explore Our Blog, Where Food Entrepreneurs Share Their Secret Recipes for Success</p>

                        <a href="blog.html" class="btn btn-primary mt-4">Start Reading</a>
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

        <img src="home/images/connect.png" alt="connect" class="connect-1 d-none d-md-block">
        <img src="home/images/connect.png" alt="connect" class="connect-2 d-none d-md-block">
    </section>

    <section class="section-marketplace">
        <div class="container mb-4">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div data-aos="fade-up">
                    <h3>From Ideation to Profitability</h3>
                    <p>Empower your food entrepreneurship journey with us.</p>
                </div>

                <a href="/courses.html" class="btn btn-primary my-2" data-aos="fade-up" data-aos-delay="300">Explore Courses</a>
            </div>
        </div>

        <div class="course-slide" data-aos="fade-up">
            <div class="owl-carousel owl-theme owl-two">
                <div class="course-card">
                    <div class="course-img">
                        <img src="home/images/market1.png" alt="market">
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <!-- <p>12,897 students</p> -->
                            <p>1h 13m</p>
                        </div>

                        <h1><a href="https://selar.co/kd9j" style="color: black;">Bakery Masterclass: Start a Profitable Business</a></h1>
                        <!-- <p class="name">Olushola Oladejo</p> -->

                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1>NGN60,000</h1>
                                <h4>NGN77,000</h4>
                            </div>

                            <div>
                                <p><span class="tag">Bestseller</span> &nbsp; 4.8 <img src="home/images/star.png"
                                        alt="star" class="icon" /></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-img">
                        <img src="home/images/market2.png" alt="market">
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <!-- <p>12,897 students</p> -->
                            <p>1h 13m</p>
                        </div>

                        <h1><a href="https://selar.co/fp69" style="color: black">Starting a Poundo Yam Business</a></h1>
                        <!-- <p class="name">Olushola Oladejo</p> -->

                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1>NGN30,000</h1>
                                <h4>NGN60,000</h4>
                            </div>

                            <div>
                                <p>&nbsp; 4.8 <img src="home/images/star.png" alt="star" class="icon" /></p>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="course-card">
                <div class="course-img">
                    <img src="home/images/market2.png" alt="market">
                </div>
                <div class="course-content">
                    <div class="d-flex justify-content-between mb-2">
                        <!-- <p>12,897 students</p> -->
                        <p>1h 13m</p>
                    </div>

                    <h1><a href=" https://selar.co/sd36" style="color: black;">Food Business Ideas</a></h1>
                    <!-- <p class="name">Olushola Oladejo</p> -->

                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h1>NGN30,000</h1>
                            <h4>NGN60,000</h4>
                        </div>

                        <div>
                            <p>&nbsp; 4.8 <img src="home/images/star.png" alt="star" class="icon" /></p>
                        </div>
                    </div>
                </div>
            </div>

                <div class="course-card">
                    <div class="course-img">
                        <img src="home/images/market3.png" alt="market">
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <!-- <p>12,897 students</p> -->
                            <p>1h 13m</p>
                        </div>

                        <h1><a href="https://selar.co/z8b1" style="color: black;">Starting an Oil Extraction Business</a></h1>
                        <!-- <p class="name">Olushola Oladejo</p> -->

                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1>NGN60,000</h1>
                                <h4>NGN150,000</h4>
                            </div>

                            <div>
                                <p><span class="tag">Popular</span> &nbsp; 4.8 <img src="home/images/star.png" alt="star"
                                        class="icon" /></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-img">
                        <img src="home/images/blackseedoil.png" alt="market">
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <!-- <p>12,897 students</p> -->
                            <p>1h 13m</p>
                        </div>

                        <h1><a href="https://selar.co/iv8d" style="color: black;">Starting a Blackseed Oil Extraction Course</a></h1>
                        <!-- <p class="name">Olushola Oladejo</p> -->

                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1>NGN60,000</h1>
                                <h4>NGN150,000</h4>
                            </div>

                            <div>
                                <p><span class="tag">Popular</span> &nbsp; 4.8 <img src="home/images/star.png" alt="star"
                                        class="icon" /></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-img">
                        <img src="home/images/sesameoil.png" alt="market">
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <!-- <p>12,897 students</p> -->
                            <p>1h 13m</p>
                        </div>

                        <h1><a href="https://selar.co/nmdd" style="color: black;"> Sesame Oil Extraction Course</a></h1>
                        <!-- <p class="name">Olushola Oladejo</p> -->

                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1>NGN60,000</h1>
                                <h4>NGN150,000</h4>
                            </div>

                            <div>
                                <p><span class="tag">Popular</span> &nbsp; 4.8 <img src="home/images/star.png" alt="star"
                                        class="icon" /></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-img">
                        <img src="home/images/groundnutoil.png" alt="market">
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <!-- <p>12,897 students</p> -->
                            <p>1h 13m</p>
                        </div>

                        <h1><a href="https://selar.co/z8b1" style="color: black">Starting a Groundnut oil extraction course</a></h1>
                        <!-- <p class="name">Olushola Oladejo</p> -->

                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1>NGN30,000</h1>
                                <h4>NGN50,000</h4>
                            </div>

                            <div>
                                <p>&nbsp; 4.8 <img src="home/images/star.png" alt="star" class="icon" /></p>
                            </div>
                        </div>
                    </div>
                </div>

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

                    <a href="blog.html" class="btn btn-primary-outline">More Blog Posts</a>
                </div>

                <div class="col-md-6 owl" data-aos="fade-up" data-aos-delay="300">
                    <div class="owl-carousel owl-theme owl-three">
                        <div class="item">
                            <div class="blog-card">
                                <a href="#">
                                    <div class="blog-img">
                                        <img src="home/images/blog-img1.png" alt="blog">
                                    </div>

                                    <div class="blog-content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="title">Plantain Chip Production</h3>
                                            <img src="home/images/open.png" alt="open">
                                        </div>
                                        <p>
                                            Bread is a staple food eaten in almost every home. Both old and young
                                            eat
                                            it. According to Statista, the
                                            value of the
                                            Nigerian bread...
                                        </p>

                                        <div class="d-flex">
                                            <span class="blog-tag">Food</span>
                                            <span class="blog-tag">Business</span>
                                            <span class="blog-tag">Idea</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="blog-card">
                                <a href="#">
                                    <div class="blog-img">
                                        <img src="home/images/blog-img2.png" alt="blog">
                                    </div>

                                    <div class="blog-content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="title">Plantain Chip Production</h3>
                                            <img src="home/images/open.png" alt="open">
                                        </div>
                                        <p>
                                            Bread is a staple food eaten in almost every home. Both old and young
                                            eat
                                            it. According to Statista, the
                                            value of the
                                            Nigerian bread...
                                        </p>

                                        <div class="d-flex">
                                            <span class="blog-tag">Food</span>
                                            <span class="blog-tag">Business</span>
                                            <span class="blog-tag">Idea</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
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
                <div class="col-md-4">
                    <div class="testimonial-card" data-aos="fade-up">
                        <p class="mb-4">
                            <span class="bold">The course content is very rich. I am now very confident with the knowledge
                                 I have gained in this online course to start my bakery business. I will also register my 
                                 bakery staff for this course.
                        </p>

                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <!-- <img src="home/images/jenny.png" alt="jenny" class="me-2"> -->
                                <div>
                                    <p class="name">Ezo Goddey</p>
                                    <p class="location">Lagos, NG</p>
                                </div>
                            </div>

                            <div class="d-flex">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/star.png" alt="star">
                            </div>
                        </div>
                    </div>
                </div>

                  <div class="col-md-4">
                    <div class="testimonial-card" data-aos="fade-up">
                        <p class="mb-4">
                            <span class="bold">The consulting experience was great all round... we had 2 recipes at the end, 
                                it was still much better than we could have done alone.


                        </p>

                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <!-- <img src="home/images/jenny.png" alt="jenny" class="me-2"> -->
                                <div>
                                    <p class="name">Malobi Ogbechie</p>
                                    <p class="location">Lagos, NG</p>
                                </div>
                            </div>

                            <div class="d-flex">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/star.png" alt="star">
                            </div>
                        </div>
                    </div>
            
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                        <p class="mb-4">
                            <span class="bold">I hope a lot of people take advantage of this opportunity. I gained a lot from this course. 
                            I now extract my oil. Thank you Foodpreneurs Hub</span>

                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="name">Itoro Green</p>
                                    <p class="location">Lagos, NG</p>
                                </div>
                            </div>

                            <div class="d-flex">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/star.png" alt="star">
                                <img src="home/images/half-star.png" alt="star">
                            </div>
                        </div>
                    </div>
                </div>
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
                        <span class="tag active">Soon</span>
                        <span class="tag">Workshop</span>
                        <span class="tag">Panel Discussion</span>
                        <span class="tag">Pitch Battle</span>
                        <span class="tag">Summit</span>
                        <span class="tag">Party</span>
                        <span class="tag">Hackathon</span>
                    </div>
                </div>

                <div class="owl-carousel owl-theme owl-four mt-4" data-aos="fade-up">
                    <div class="item">
                        <div class="event-card">
                            <div class="event-img">
                                <img src="home/images/20.png" alt="event">
                            </div>
                            <div class="event-details">
                                <p class="bold">Jan. 12 - 13, 2023 &bull; Virtual</p>
                                <h2 class="title">Food Innovation Summit</h1>

                                    <div class="d-flex align-items-center mt-4">
                                        <a href="single-event.html" class="btn btn-primary me-4">View Details</a>
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
                                <img src="home/images/event3.png" alt="event">
                            </div>
                            <div class="event-details">
                                <p class="bold">Oct 28, 2023 &bull; Abuja</p>
                                <h2 class="title">The Role of Food Innovators in the Development of Africa’s Economy
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
                                <img src="home/images/event1.png" alt="event">
                            </div>
                            <div class="event-details">
                                <p class="bold">Oct 28, 2023 &bull; Abuja</p>
                                <h2 class="title">Sustainability and Food: A Green Revolution</h1>

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
                                <img src="home/images/event2.png" alt="event">
                            </div>
                            <div class="event-details">
                                <p class="bold">Oct 28, 2023 &bull; Abuja</p>
                                <h2 class="title">Taste of the World: Global Culinary Exploration</h1>

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
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="upcoming-events.html" class="tag-primary btn">Load More</a>
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

                    <form action="#">
                        <input type="text" placeholder="First Name" class="form-input">
                        <input type="email" placeholder="Email" class="form-input">
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

                    <a href="/courses.html" class="btn btn-primary mt-4">Explore Courses</a>
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