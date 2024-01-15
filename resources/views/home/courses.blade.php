@extends('layouts.home')

@section('title', 'Courses')

@section('content')
<style>
    .accordion-body{
        text-align: justify;
    }
</style>
<main>
    <section class="search-hero" style="background: url('{{ asset('home/images/course-hero.png') }}') no-repeat; background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <h1 class="title">Kickstart your food <br class="d-none d-md-block" /> processing business with <br class="d-none d-md-block" /> Foodpreneurs Hub classes</h1>
                    <p class="subtitle">Enroll in Our Food Processing Course Today!</p>
                    
                    <form action="#" class="relative">
                        <input type="search" placeholder="Search for courses" class="search-input">
                        <input type="submit" value="Search" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section-scroll-card">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="#short-courses">
                        <div class="scroll-card">
                            <img src="{{ asset('home/images/market1.png') }}" alt="">
                            <h3>Short courses</h3>
                            <div class="shade"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#business">
                        <div class="scroll-card">
                            <img src="{{ asset('home/images/launch.png') }}" alt="">
                            <h3>Business Launch Program</h3>
                            <div class="shade"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-courses" id="short-courses">
        <div class="container">
            <div class="text-center">
                <h1 class="title">Explore <span class="text-primary">Foodpreneurial</span> Online Courses</h1>
                <div class="d-flex flex-wrap justify-content-center">
                    <span class="tag active">Popular</span>
                    @foreach ($categories as $category)
                        <span class="tag">{{ $category->name }}</span>
                    @endforeach
                    
                </div>
            </div>

            <div class="courses-section">
                <div class="row">
                    @foreach ($courses as $course)
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('home.course', $course->slug) }}">
                            <div class="course-card" style="color: black;">
                                <div class="course-img">
                                    <img src="{{ asset('storage/'.$course->image) }}" alt="market">
                                </div>
                                <div class="course-content">
                                    <div class="d-flex justify-content-between mb-2">
                                        <p>{{ number_format($course->students) }} students</p>
                                        <p>{{ $course->course_hours }}</p>
                                    </div>
                            
                                    <h1>{{ $course->name }}</h1>
                                    <p class="name">{{ $course->author_name }}</p>
                            
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h1>&#8358; {{ number_format($course->slashed_price, 2) }}</h1>
                                        </div>
                                        <div>
                                            <p>&nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star" class="icon" /></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            {{-- pagination links --}}
                            {{ $courses->links("pagination::bootstrap-4") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-launch" id="business">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="title"><span class="text-primary">Business</span> Launch Program</h1>
                    <p>Launch your food processing business in the next 4 months with our intensive training program.</p>
                    
                       <div class="d-flex mt-3 align-items-center">
                        <img src="{{ asset('home/images/check.png') }}" alt="check">
                        <p class="small">
                            Application fee is $50. Get a 50% discount and pay $25 if you apply by January 13, 2024.
                        </p>
                    </div>
                    
                       <div class="d-flex mt-3 align-items-center">
                        <img src="{{ asset('home/images/check.png') }}" alt="check">
                        <p class="small">
                            Guaranteed money back if you follow all the steps in the program and don’t launch your food processing business.
                        </p>
                    </div>
                    
                    
                    <a href= "https://buy.stripe.com/bIY7uL8Kvamp3IIfZ1">
                    <button type="button" class="btn btn-primary mt-3">Apply Now</button>
                    </a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('home/images/launch.png') }}" alt="launch" class="mt-2">
                </div>
            </div>
        </div>
    </section>

    <section class="section-content">
        <div class="container">
            <div class="text-center">
                <h1 class="title">Program Content</h1>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Module 1 - Food Product Idea Generation
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">This module serves as a creative incubator 
                                    for aspiring food product entrepreneurs, guiding them through the art and science of food product 
                                    idea generation. Learners will embark on a journey to cultivate innovative concepts, considering market 
                                    trends, consumer preferences, and unique value propositions. Through hands-on exercises, brainstorming 
                                    sessions, and expert insights, entrepreneurs will refine their ideas, ensuring they align with both their 
                                    passion for food and market demands. The module also explores prototyping, taste testing, and feedback 
                                    mechanisms, empowering learners to iteratively develop and fine-tune their product concepts. </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Module 2 - Business Registration Essentials:
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">This module is designed to equip aspiring entrepreneurs with the fundamental 
                                    knowledge and practical skills needed for successful business registration. Understanding the intricacies 
                                    of business registration is crucial for navigating the diverse regulatory landscapes across the continent. 
                                    Learners will gain insights into the legal frameworks, documentation requirements, and procedural nuances 
                                    involved in establishing and formalizing a business. We will also provide recommendations of business 
                                    registration service providers as needed by the entrepreneur.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Module 3 - Customer Discovery Mastery for Entrepreneurs
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">This course module offers a dynamic and hands-on exploration of the essential 
                                    principles of customer discovery, empowering entrepreneurs to build businesses that truly resonate with 
                                    their target audience. Learners will learn the art of identifying, understanding, and validating customer 
                                    needs through interactive exercises, interviews, and data analysis. The module guides entrepreneurs through 
                                    the systematic process of gathering valuable insights, refining business propositions, and adapting strategies 
                                    based on real customer feedback.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Module 4 - Food Processing
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">This module is a deep dive into food processing and different aspects of 
                                    food processing. We will be looking at what is food processing, why food processing, different methods of 
                                    food processing, unit operations, and flow charts. At the end of this module you will learn the principles of 
                                    food processing, how to develop a flow chart, and how to determine the appropriate processing method for each food material.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Module 5 - Product Development
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">New product development and innovation of existing products are important 
                                    for the growth of every business. In this module, we will be taking you through the stages of product 
                                    development from idea generation, market analysis, recipe formulation, and sensory evaluation, to product 
                                    launch. We will be taking you step by step on how to develop your food product. At the end of this module, 
                                    you will have developed your food product
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Module 6 - Materials and Equipment Buying
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">In this module, we will be looking at the raw materials and equipment necessary to 
                                    develop your product and the various procurement options available to you. 

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    Module 7 - Quality Control and Assurance
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Quality is said to be the best form of advertisement. In this module, you are going to be 
                                    learning how to ensure the quality of your food products. This module is a deep dive into  hazard analysis and critical 
                                    control points, good manufacturing practices, food safety, and good hygiene practices, and how to implement a quality 
                                    framework in your food processing business

                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                    Module 8 - SOP/Unit Operations
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Developing a standard operating procedure is essential for achieving consistent 
                                    quality of your food product. In this module, you will learn what constitutes a good SOP and how to develop 
                                    and implement a standard operating procedure. A the end of this module you will be developing a Standard 
                                    Operating Procedure for your food product. 
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                    Module 9 - Food Preservation and Packaging
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">In this module, we will be delving into the principles of food preservation, 
                                    different methods of food preservation, categories of food packaging, and types of food packaging 
                                    materials and their characteristics. At the end of this module, you will understand the different 
                                    forms of food preservation and appropriate preservation methods and packaging material for your food 
                                    product.
                                </div>
                            </div>
                            
                            <button class="btn btn-text text-center w-100 py-3" id="loadMoreButton">
                            <span id="remainingSections"><a href="https://buy.stripe.com/bIY7uL8Kvamp3IIfZ1" style="color: #27A24F;"> Register to get on Our Waitlist</a>
                            <!-- <i class="fa-solid fa-chevron-down"></i> -->
                        </button>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-learn">
        <div class="container">
            <div class="text-center">
                <h1 class="title">Learn from <span class="text-primary">Industry Experts</span></h1>
                <p class="subtitle">
                    Foodpreneurs Hub classes are taught by Industry leaders excited to share <br /> their tools, techniques, and professional
                    journey with you.
                </p>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <a href="#">
                        <div class="expert">
                            <img src="{{ asset('home/images/shola.jpeg') }}" alt="jane-doe">
                            <div class="info">
                                <h6>Olushola Oladejo</h6>
                                <p>Entrepreneur and Food Technologist</p>
                            </div>
                        
                            <div class="shade">&nbsp;</div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="#">
                        <div class="expert">
                            <img src="{{ asset('home/images/yosola.jpeg') }}" alt="alyssia">
                            <div class="info">
                                <h6>Yosola Oke Akinrinola</h6>
                                <p>Entrepreneur and Business Consultant</p>
                            </div>
                
                            <div class="shade">&nbsp;</div>
                        </div>
                    </a>
                </div>

                <!-- <div class="col-md-6">
                    <a href="#">
                        <div class="expert">
                            <img src="images/dana-sabi.png" alt="dana-sabi">
                            <div class="info">
                                <h6>Dana Tanya Sabi</h6>
                                <p>Food Scientist</p>
                            </div>
                
                            <div class="shade">&nbsp;</div>
                        </div>
                    </a>
                </div> -->

                <!-- <div class="col-md-6">
                    <a href="#">
                        <div class="expert">
                            <img src="images/cherie.png" alt="cherie">
                            <div class="info">
                                <h6>Cherie Oluwayemisi</h6>
                                <p>Entrepreneur, CEO Tiegar Foods</p>
                            </div>
                
                            <div class="shade">&nbsp;</div>
                        </div>
                    </a>
                </div> -->

                <!-- <div class="col-md-6">
                    <a href="#">
                        <div class="expert">
                            <img src="images/tayla.png" alt="tayla">
                            <div class="info">
                                <h6>Alyssia Tayla</h6>
                                <p>Entrepreneur, Social Media Expert</p>
                            </div>
                
                            <div class="shade">&nbsp;</div>
                        </div>
                    </a>
                </div> -->

                <!-- <div class="col-md-6">
                    <a href="#">
                        <div class="expert">
                            <img src="images/rowina.png" alt="rowina">
                            <div class="info">
                                <h6>Ike Rowina</h6>
                                <p>Chef, Influencer</p>
                            </div>
                
                            <div class="shade">&nbsp;</div>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </section>

    <section class="section-students">
        <div class="container">
            <div class="text-center">
                <h1 class="title">Why Students Love Foodpreneurs Hub</h1>
                <p class="subtitle">Food Innovators Page- Some of our Success stories
</p>
            </div>
        </div>

        <div class="quotes">
            <div class="container">
                <img src="{{ asset('home/images/starsmile.png') }}" alt="starsmile" class="smile">
                <img src="{{ asset('home/images/hundred.png') }}" alt="hundred" class="hundred">

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <h1 class="quote">
                            Motivated by a fervor for healthy living, Itoro, an unwavering cosmetic chemist and CEO of Tamil Naturals, embarked on the challenging journey of establishing a sesame oil extraction business. <br/><br/> She firmly believes that skincare originates internally, emphasizing the pivotal role of nutrition in achieving radiant skin. While driven by a desire to promote healthier lifestyles, Itoro faced a knowledge gap hindering the launch of her sesame oil venture. <br/><br/>
All the online resources that she explored lacked the practical insights essential for hands-on production. The prospect of manufacturing the oil seemed daunting. However, a turning point occurred when she stumbled upon our oil extraction course advertisement on Instagram, turning her aspirations into reality. <br/><br/>

Enrolling in our course and consultation service at Foodpreneurs Hub proved to be a game-changer for Itoro. The platform not only facilitated a seamless initiation into oil extraction but also equipped her with invaluable skills to optimize profits.

                        </h1>
                        <!--<p>-Ezo Goddey, Foodpreneurs Hub Student</p>-->
                    </div>

                    <div class="col-md-6 mb-4">
                        <h1 class="quote">
 Itoro achieved an impressive 100% return on investment with her inaugural production batch, which promptly sold out.<br/><br/>

With the help of Foodpreneurs Hub, she had a smooth start. Beyond oil extraction, she also learned skills that help her to maximize her profit. She had a 100% ROI on the first production batch and sold out very fast. <br/><br/>

Praising Foodpreneurs Hub, Itoro highly recommends us to aspiring food product entrepreneurs, highlighting our role in helping her eliminate procrastination and foster accountability. When envisioning the future of her company in the next five years, Itoro foresees expanding beyond Nigerian shelves to export her oil globally. Thanks to the oil's extended shelf life and resistance to rancidity, she plans to produce substantial batches, ensuring a lasting presence in the market.

                        </h1>
                        <p>-From Passion To Profit: Itoro’s Entrepreneurial Journey
</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section-faq">
        <div class="container">
            <div class="text-center">
                <h1 class="title mb-4">Frequently Asked Questions</h1>
            </div>

            <div class="question-accordion">
                <div class="accordion" id="accordionExample">
                    @foreach ($faqs as $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}"
                                aria-expanded="true" aria-controls="collapse{{ $faq->id }}">
                                {{ $faq->question }}
                            </button>
                        </h2>
                        <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    {{ $faq->answer }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                 
                </div>
            </div>
        </div>
    </section>

    <section class="section-instructor">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="title">Become an Instructor</h1>
                    <p class="subtitle">
                        Start teaching today should direct them to send us an email.
                    </p>

                    <a href="#" class="btn btn-primary">Start Teaching Today</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('home/images/market1.png') }}" alt="market" class="my-2">
                </div>
            </div>
        </div>
    </section>
</main>


@endsection