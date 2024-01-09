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
                    <span class="tag">Recipes</span>
                    <span class="tag">Food Processing</span>
                    <span class="tag">Food Trends</span>
                    <span class="tag">Ingredient Spotlight</span>
                    <span class="tag">How-to Guides</span>
                    <span class="tag">DIY Projects</span>
                    <span class="tag">Project Review</span>
                </div>
            </div>

            <div class="courses-section">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <a href="https://selar.co/fp69">
                        <div class="course-card" style="color: black;">
                            <div class="course-img">
                                <img src="{{ asset('home/images/market2.png') }}" alt="market">
                            </div>
                            <div class="course-content">
                                <div class="d-flex justify-content-between mb-2">
                                    <p>12,897 students</p>
                                    <p>1h 13m</p>
                                </div>
                        
                                <h1>Pounded Yam Flour Production: From Zero to Expert</h1>
                                <p class="name">Olushola Oladejo</p>
                        
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h1>&#8358;30,000</h1>
                                    </div>
                        
                                    <div>
                                        <p>&nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star" class="icon" /></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="https://selar.co/kd9j">
                        <div class="course-card" style="color: black;">
                            <div class="course-img">
                                <img src="{{ asset('home/images/market1.png') }}" alt="market">
                            </div>
                            <div class="course-content">
                                <div class="d-flex justify-content-between mb-2">
                                    <p>12,897 students</p>
                                    <p>1h 13m</p>
                                </div>
                        
                                <h1>Starting a Bakery Business Course</h1>
                                <p class="name">Olushola Oladejo</p>
                        
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h1>&#8358;60,000</h1>
                                    </div>
                        
                                    <div>
                                        <p><span class="tag">Bestseller</span> &nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star" class="icon" />
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <a href=" https://selar.co/z8b1">
                        <div class="course-card" style="color: black;">
                            <div class="course-img">
                                <img src="{{ asset('home/images/market3.png') }}" alt="market">
                            </div>
                            <div class="course-content">
                                <div class="d-flex justify-content-between mb-2">
                                    <p>12,897 students</p>
                                    <p>1h 13m</p>
                                </div>
                        
                                <h1>Oil Business 101: Start a Profitable Oil Business From Scratch</h1>
                                <p class="name">Olushola Oladejo</p>
                        
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h1>&#8358;60,000</h1>
                                    </div>
                        
                                    <div>
                                        <p><span class="tag">Popular</span> &nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star" class="icon" /></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <a href="https://selar.co/iv8d">
                        <div class="course-card" style="color: black;">
                            <div class="course-img">
                                <img src="{{ asset('home/images/bg-hero3') }}.png" alt="market">
                            </div>
                            <div class="course-content">
                                <div class="d-flex justify-content-between mb-2">
                                    <p>12,897 students</p>
                                    <p>1h 13m</p>
                                </div>
                        
                                <h1>Starting a Blackseed Oil Extraction Course</h1>
                                <p class="name">Olushola Oladejo</p>
                        
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h1>&#8358;30,000</h1>
                                    </div>
                        
                                    <div>
                                        <p>&nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star" class="icon" /></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <a href="https://selar.co/sd36">
                        <div class="course-card">
                            <div class="course-img">
                                <img src="{{ asset('home/images/businessidea.png') }}" alt="market">
                            </div>
                            <div class="course-content">
                                <div class="d-flex justify-content-between mb-2">
                                    <p style="color: black;">12,897 students</p>
                                    <p style="color: black;">1h 13m</p>
                                </div>
                        
                                <h1>Food Business Ideas</h1>
                                <p class="name">Olushola Oladejo</p>
                        
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h1>&#8358;5,000</h1>
                                    </div>
                        
                                    <div>
                                        <p style="color: black;">&nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star" class="icon" /></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <a href="https://selar.co/sd36">
                        <div class="course-card" style="color: black;">
                            <div class="course-img">
                                <img src="{{ asset('home/images/sesameoil.png') }}" alt="market">
                            </div>
                            <div class="course-content">
                                <div class="d-flex justify-content-between mb-2">
                                    <p>12,897 students</p>
                                    <p>1h 13m</p>
                                </div>
                        
                                <h1>Starting a Sesame Oil Extraction Course</h1>
                                <p class="name">Olushola Oladejo</p>
                        
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h1>&#8358;30,000</h1>
                                    </div>
                        
                                    <div>
                                        <p>&nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star" class="icon" /></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <a href="https://selar.co/lok2">
                        <div class="course-card" style="color: black;">
                            <div class="course-img">
                                <img src="{{ asset('home/images/market3.png') }}" alt="market">
                            </div>
                            <div class="course-content">
                                <div class="d-flex justify-content-between mb-2">
                                    <p>12,897 students</p>
                                    <p>1h 13m</p>
                                </div>
                        
                                <h1>Starting a Groundnut Oil Extraction Course</h1>
                                <p class="name">Olushola Oladejo</p>
                        
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h1>&#8358;60,000</h1>
                                    </div>
                        
                                    <div>
                                        <p><span class="tag">Popular</span> &nbsp; 4.8 <img src="{{ asset('home/images/star.png') }}" alt="star" class="icon" /></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
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

                    <button type="button" class="btn btn-primary mt-3">Apply Now</button>

                    <div class="d-flex mt-3 align-items-center">
                        <img src="{{ asset('home/images/check.png') }}" alt="check">
                        <p class="small">
                            Guaranteed money back if you follow all the steps in the program and don’t launch your food processing business.
                        </p>
                    </div>
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
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                    Module 10 - Regulatory
                                </button>
                            </h2>
                            <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">It is important that your product and food business meets regulatory standards 
                                    and regulations, to avoid fines and litigation from regulatory agencies. In this module, we will be looking 
                                    at regulatory standards and how to register your food products with the appropriate regulatory bodies. 

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                                    Module 11 - Marketing and Sales
                                </button>
                            </h2>
                            <div id="flush-collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">This module provides a comprehensive roadmap to navigate the dynamic landscape 
                                    of marketing and sales in the food industry. Learners will learn the fundamentals of strategic branding, 
                                    market positioning, and how to effectively communicate their product value and carve out a distinct identity 
                                    for their products. Through practical case studies and hands-on exercises, entrepreneurs will master the art 
                                    of crafting compelling narratives and leveraging digital and traditional channels to reach their target audience. 
                                    The module also explores sales fundamentals, including pricing strategies, distribution channels, and relationship-building 
                                    techniques, ensuring learners are equipped to successfully bring them to market and increase their sales.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                                    Module 12 - Food Exporting
                                </button>
                            </h2>
                            <div id="flush-collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">This module is essential to understanding the process of exporting your food 
                                    products outside the country, within the continent of Africa, and outside the continent of Africa. 
                                    In this course, you will gain insights into necessary certifications and necessary licenses to kick-start 
                                    your food product exportation.

                                </div>
                            </div>
                        </div>
                       
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThirteen" aria-expanded="false" aria-controls="flush-collapseThirteen">
                                    Module 9 - SOP/Unit Operations
                                </button>
                            </h2>
                            <div id="flush-collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">This module is a vital resource for aspiring food product entrepreneurs seeking 
                                    to understand the intricacies of funding and grants within the food industry. Learners will gain comprehensive 
                                    insights into various funding options, ranging from traditional loans to venture capital, as well as explore the 
                                    landscape of grants and subsidies tailored for food-related ventures. The module provides practical guidance on creating 
                                    compelling funding pitches, understanding financial metrics, and building investor relations. 

                            </div>
                        </div>


                        <button class="btn btn-text text-center w-100 py-3" id="loadMoreButton">
                            <span id="remainingSections"><a href="/register/register.html" style="color: #27A24F;"> Register to get on Our Waitlist</a>
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
                                <p>Food Entrepreneur</p>
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
                                <h6>Yosola Oke</h6>
                                <p>Entrepreneur</p>
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
                <p class="subtitle">Foodpreneurs Hub is here to support you on every step of your creative journey</p>
            </div>
        </div>

        <div class="quotes">
            <div class="container">
                <img src="{{ asset('home/images/starsmile.png') }}" alt="starsmile" class="smile">
                <img src="{{ asset('home/images/hundred.png') }}" alt="hundred" class="hundred">

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <h1 class="quote">
                            The course content is very ric. I am now very confident with the knowledge
                                 I have gained in this online course to start my bakery business. I will also register my 
                                 bakery staff for this course.
                        </h1>
                        <p>-Ezo Goddey, Foodpreneurs Hub Student</p>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h1 class="quote">
                            The consulting experience was great all round... we had 2 recipes at the end, 
                                it was still much better than we could have done alone.
                        </h1>
                        <p>-Malobi Ogbechie, Foodpreneurs Hub Student</p>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h1 class="quote">
                            I hope a lot of people take advantage of this opportunity. I gained a lot from this course. 
                            I now extract my oil. Thank you Foodpreneurs Hub.
                        </h1>

                        <p>-Itoro Green, Foodpreneurs Hub Student</p>
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
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                What kind of food processing course do we offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    Foodpreneurs Hub offers short courses and a Food Business Program. The short courses are readily 
                                    available on the school page all you have to do is click on the specific course available pay and 
                                    start learning. Once you pay you have 30 days to complete the course. On the other hand, the food 
                                    business program is a 3 months long intensive program focused on helping Aspiring food entrepreneurs start
                                     their food processing businesses.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Who can join the Foodpreneurs Hub Community?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    You are welcome to join the FH community if you own a food business, work in a food company, 
                                    or want to own a food processing business. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I enroll in a course?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    You can enroll in the short courses on the school page by clicking on the —- button. Pay for the 
                                    course and take the course at your convenience within 30 days. Click on the apply button to apply 
                                    by paying for the application fees and filling out the application form for the food business program. 
                                    After careful consideration of your application, successful candidates will be contacted to enroll in the program.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How can I contribute to the Foodpreneurs Hub blog?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    Kindly send your articles on food processing with your name, short bio, and social media links or 
                                    handles to article@foodpreneurshub.com and your articles will be published in your name after careful review by our editors.
                                                                        </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How can I get support if I have questions or encounter issues with the platform?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    Send an email with your enquiry or issues to support@foodpreneurshub.com and we will respond within 24 hrs. 
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Can I cancel or change my course enrollment ?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    Unfortunately, you can not cancel or change your course enrollment. And there are no refunds once payment has been made.  
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Do you offer any certificate upon course completion?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    Yes, we do offer certificates to students who have completed all the modules, and assignments and also met the criteria of completing the short course and business program.
                                </p>
                            </div>
                        </div>
                    </div>

                 
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