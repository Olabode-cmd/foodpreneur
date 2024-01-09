@extends('layouts.home')

@section('title', 'Course Title')

@section('content')
<style>
    .accordion-body{
        text-align: justify;
    }
</style>

<main>
    <section class="section-courseinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="title">Pounded Yam Flour Production: From Zero to Expert</h1>
                    <p class="subtitle">Learn how to produce Pounded Yam Flour from the basics and go all the wall
                        to starting your own pounded yam flour
                        business
                    </p>

                    <p>Created by <span class="text-primary text-underline">Jane Doe</span>, Entrepreneur, Chef.</p>

                    <div class="d-flex mt-3 flex-wrap">
                        <div class="d-flex align-items-center me-4 mt-2">
                            <img src="{{ asset('home/images/users.png') }}" alt="users">
                            <span class="ms-2 bold">104,542 students</span>
                        </div>

                        <div class="d-flex mt-2">
                            <span class="bold me-2">4.8</span>
                            <div class="stars d-flex align-items-center mx-2">
                                <img src="{{ asset('home/images/star.png') }}" alt="star">
                                <img src="{{ asset('home/images/star.png') }}" alt="star">
                                <img src="{{ asset('home/images/star.png') }}" alt="star">
                                <img src="{{ asset('home/images/star.png') }}" alt="star">
                                <img src="{{ asset('home/images/star.png') }}" alt="star">
                            </div>

                            <p class="text-primary text-underline">(48,500 ratings)</p>
                        </div>
                    </div>

                    <div class="d-flex mt-4">
                        <div class="d-flex align-items-end justify-content-between w-100 flex-wrap">
                            <div>
                                <h2 class="title">Course Content</h2>
                                <p class="text-grey">41 sections • 490 lectures • 65h 33m total length</p>
                            </div>

                            <div>
                                <p class="text-primary text-underline">Expand all sections</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion mt-4" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Week 1 - Beginner - Introduction to Pounded Yam Flour Production
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="file d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/file.png') }}" alt="file" class="me-3">
                                        <p>Read before you start</p>
                                    </div>
                                    <div class="play d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/play.png') }}" alt="play" class="icon me-3">
                                        <p>The significance of pounded yam in West African cuisine</p>
                                    </div>
                                    <div class="play d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/play.png') }}" alt="play" class="icon me-3">
                                        <p>Overview of pounded yam flour and its uses</p>
                                    </div>
                                    <div class="play d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/play.png') }}" alt="play" class="icon me-3">
                                        <p>Market potential and opportunities</p>
                                    </div>
                                    <div class="file d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/file.png') }}" alt="file" class="me-3">
                                        <p>Class project 01 - Write about the significance of pounded yam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Week 2 - Beginner - Yam Selection and Preparation
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="file d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/file.png') }}" alt="file" class="me-3">
                                        <p>Read before you start</p>
                                    </div>
                                    <div class="play d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/play.png') }}" alt="play" class="icon me-3">
                                        <p>The significance of pounded yam in West African cuisine</p>
                                    </div>
                                    <div class="play d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/play.png') }}" alt="play" class="icon me-3">
                                        <p>Overview of pounded yam flour and its uses</p>
                                    </div>
                                    <div class="play d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/play.png') }}" alt="play" class="icon me-3">
                                        <p>Market potential and opportunities</p>
                                    </div>
                                    <div class="file d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/file.png') }}" alt="file" class="me-3">
                                        <p>Class project 01 - Write about the significance of pounded yam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Week 3 - Beginner - Drying and Milling
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="file d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/file.png') }}" alt="file" class="me-3">
                                        <p>Read before you start</p>
                                    </div>
                                    <div class="play d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/play.png') }}" alt="play" class="icon me-3">
                                        <p>The significance of pounded yam in West African cuisine</p>
                                    </div>
                                    <div class="play d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/play.png') }}" alt="play" class="icon me-3">
                                        <p>Overview of pounded yam flour and its uses</p>
                                    </div>
                                    <div class="play d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/play.png') }}" alt="play" class="icon me-3">
                                        <p>Market potential and opportunities</p>
                                    </div>
                                    <div class="file d-flex align-items-center my-3">
                                        <img src="{{ asset('home/images/file.png') }}" alt="file" class="me-3">
                                        <p>Class project 01 - Write about the significance of pounded yam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-readmore">
                        <div class="container">
                            <h1 class="title">About this class</h1>

                            <div class="read-container closed" id="readContainer">
                                <p>
                                    Welcome to our comprehensive "Pounded Yam Flour Production" course, where you'll
                                    dive deep into the art
                                    and science of
                                    transforming yam into a convenient and versatile flour used in various culinary
                                    creations. Pounded yam
                                    is a beloved West
                                    African staple, and learning how to produce its high-quality flour is not only a
                                    culinary skill but also
                                    a business
                                    opportunity.
                                </p>
                                <p>
                                    Welcome to our comprehensive "Pounded Yam Flour Production" course, where you'll
                                    dive deep into the art
                                    and science of
                                    transforming yam into a convenient and versatile flour used in various culinary
                                    creations. Pounded yam
                                    is a beloved West
                                    African staple, and learning how to produce its high-quality flour is not only a
                                    culinary skill but also
                                    a business
                                    opportunity.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center readmorebg">
                        <button class="btn-text d-flex align-items-center justify-content-center"
                            id="readMoreBtn">Read More
                            <img src="{{ asset('home/images/green-chevron.png') }}" alt="chevron">
                        </button>
                    </div>

                    <hr class="my-4">

                    <div class="coursenote">
                        <div class="container">
                            <h1 class="title">Who should take this course?</h1>

                            <ul>
                                <li>
                                    <p>Culinary enthusiasts interested in mastering the art of yam flour production.
                                    </p>
                                </li>
                                <li>
                                    <p>Entrepreneurs looking to start or expand a yam flour production business.</p>
                                </li>
                                <li>
                                    <p>Food professionals and restaurant owners seeking to diversify their
                                        offerings.</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="coursenote">
                        <div class="container">
                            <h1 class="title">Course duration</h1>

                            <p>The "Pounded Yam Flour Production" course is self-paced, allowing you to study at
                                your convenience. On average, students
                                complete the course within 4 to 6 weeks, depending on their individual progress.</p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div>
                        <div class="section-readmore">
                            <div class="container">
                                <h1 class="title">Meet your teacher</h1>

                                <div class="read-container closed" id="readContainer2">
                                    <div class="d-flex">
                                        <div class="photo me-3">
                                            <img src="{{ asset('home/images/cherie.png') }}" alt="cherie">
                                        </div>

                                        <div>
                                            <div class="d-flex align-items-center">
                                                <h6 class="me-2 m-0 p-0">Jane Doe</h6>
                                                <span class="tag-primary">Teacher</span>
                                            </div>
                                            <p>Entrepreneur, Chef</p>
                                        </div>
                                    </div>
                                    <p>
                                        Chef Jane Doe is a culinary maestro with over two decades of experience in
                                        food production, culinary arts, and food
                                        entrepreneurship. She has a deep-rooted passion for preserving and promoting
                                        traditional West African cuisine, making
                                        her the ideal instructor for our "Pounded Yam Flour Production" course.</p>

                                    <p>Chef Amina's journey in the culinary world began in her grandmother's
                                        kitchen, where she first developed a fascination
                                        for traditional recipes and cooking techniques. Over the years, she honed
                                        her skills in various restaurants, working
                                        closely with seasoned chefs and expanding her knowledge of West African
                                        culinary traditions.</p>

                                    <p>Her expertise extends to the intricate process of producing pounded yam
                                        flour. Chef Amina has not only mastered the art
                                        of selecting the finest yam varieties but also the precise methods of
                                        parboiling, drying, and milling that result in
                                        top-quality yam flour.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="d-flex justify-content-center readmorebg">
                            <button class="btn-text d-flex align-items-center justify-content-center"
                                id="readMoreBtn2">Read More
                                <img src="{{ asset('home/images/green-chevron.png') }}" alt="chevron">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-card sticky-element">
                        <div class="video">
                            <img src="{{ asset('home/images/play.png') }}" alt="play" class="play">
                            <img src="{{ asset('home/images/market2.png') }}" alt="food" class="fit">
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <div class="d-flex align-items-end">
                                <h2 class="price">$75.00</h2>
                                <h5 class="old-price">$175.00</h5>
                            </div>

                            <p class="text-primary bold">43% off</p>
                        </div>

                        <div class="d-flex mt-3">
                            <img src="{{ asset('home/images/timer.png') }}" alt="timer" class="me-4">
                            <p class="text-purple"><span class="bold">1 day</span> left at this price.</p>
                        </div>

                        <button class="mt-3 btn btn-primary w-100">Buy Now</button>

                        <hr />

                        <p class="text-center text-grey mb-3">30-day Money-Back-Guarantee</p>

                        <h5 class="bold">This Course includes:</h5>

                        <div class="mt-3">
                            <div class="d-flex align-items-center my-3">
                                <img src="{{ asset('home/images/monitor.png') }}" alt="monitor" class="me-3">
                                <p class="text-grey">22 hours on-demand video lessons</p>
                            </div>

                            <div class="d-flex align-items-center my-3">
                                <img src="{{ asset('home/images/list.png') }}" alt="list" class="me-3">
                                <p class="text-grey">Written materials and guides</p>
                            </div>

                            <div class="d-flex align-items-center my-3">
                                <img src="{{ asset('home/images/language.png') }}" alt="language" class="me-3">
                                <p class="text-grey">English</p>
                            </div>

                            <div class="d-flex align-items-center my-3">
                                <img src="{{ asset('home/images/infinity.png') }}" alt="infinity" class="me-3">
                                <p class="text-grey">Full-time access</p>
                            </div>

                            <div class="d-flex align-items-center my-3">
                                <img src="{{ asset('home/images/checkmark.png') }}" alt="checkmark.png" class="me-3">
                                <p class="text-grey">Certificate of Completion</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-marketplace">
        <div class="container mb-4">
            <div data-aos="fade-up">
                <h3>Related Classes</h3>
            </div>
        </div>
    
        <div class="course-slide" data-aos="fade-up">
            <div class="owl-carousel owl-theme owl-two">
                <div class="course-card">
                    <div class="course-img">
                        <img src="{{ asset('home/images/market1.png') }}" alt="market">
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <p>12,897 students</p>
                            <p>1h 13m</p>
                        </div>
    
                        <h1>Bakery Masterclass: Start a Profitable Business</h1>
                        <p class="name">Jane Doe</p>
    
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1>$75.00</h1>
                                <h4>$175.00</h4>
                            </div>
    
                            <div>
                                <p><span class="tag">Bestseller</span> &nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star"
                                        class="icon" /></p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="course-card">
                    <div class="course-img">
                        <img src="{{ asset('home/images/market2.png') }}" alt="market">
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <p>12,897 students</p>
                            <p>1h 13m</p>
                        </div>
    
                        <h1>Pounded Yam Flour Production: From Zero to Expert</h1>
                        <p class="name">Jane Doe</p>
    
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1>$75.00</h1>
                                <h4>$175.00</h4>
                            </div>
    
                            <div>
                                <p>&nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star" class="icon" /></p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="course-card">
                    <div class="course-img">
                        <img src="{{ asset('home/images/market3.png') }}" alt="market">
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <p>12,897 students</p>
                            <p>1h 13m</p>
                        </div>
    
                        <h1>Oil Business 101: Start a Profitable Oil Business From Scratch</h1>
                        <p class="name">Jane Doe</p>
    
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1>$75.00</h1>
                                <h4>$175.00</h4>
                            </div>
    
                            <div>
                                <p><span class="tag">Popular</span> &nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star"
                                        class="icon" /></p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="course-card">
                    <div class="course-img">
                        <img src="{{ asset('home/images/bg-hero3') }}.png" alt="market">
                    </div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between mb-2">
                            <p>12,897 students</p>
                            <p>1h 13m</p>
                        </div>
    
                        <h1>Pounded Yam Flour Production: From Zero to Expert</h1>
                        <p class="name">Jane Doe</p>
    
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h1>$75.00</h1>
                                <h4>$175.00</h4>
                            </div>
    
                            <div>
                                <p>&nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star" class="icon" /></p>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
            <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-1 d-none d-md-block">
            <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-2 d-none d-md-block">
        </div>
    </section>
</main>





@endsection