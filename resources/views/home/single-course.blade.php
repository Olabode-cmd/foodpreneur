@extends('layouts.home')

@section('title')
{{ $course->name }}
@endsection

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
                    <h1 class="title">{{ $course->name }}</h1>
                    <p class="subtitle">{{ implode(' ', array_slice(explode(' ', strip_tags($course->description)), 0, 35)) }} ...
                    </p>

                    <p>Created by <span class="text-primary text-underline">{{ $course->author_name }}</span>, {{ $course->author_role }}.</p>

                    <div class="d-flex mt-3 flex-wrap">
                        <div class="d-flex align-items-center me-4 mt-2">
                            <img src="{{ asset('home/images/users.png') }}" alt="users">
                            <span class="ms-2 bold">{{ number_format($course->students) }} students</span>
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

                            <p class="text-primary text-underline">({{ number_format($course->ratings) }} ratings)</p>
                        </div>
                    </div>

                    <div class="d-flex mt-4">
                        <div class="d-flex align-items-end justify-content-between w-100 flex-wrap">
                            <div>
                                <h2 class="title">Course Content</h2>
                                <p class="text-grey">{{ $course->course_sections }} sections • {{ $course->course_lectures }} lectures • {{ $course->course_hours }} total length</p>
                            </div>

                            <div>
                                <p class="text-primary text-underline">Expand all sections</p>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="accordion mt-4" id="accordionExample">
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
                    </div> --}}

                    <div class="section-readmore">
                        <div class="container">
                            <h1 class="title">About this class</h1>

                            <div class="read-container closed" id="readContainer">
                                <p>
                                    {!! $course->description !!}
                                </p>
                            </div>

                        </div>
                    </div>

                    {{-- <div class="d-flex justify-content-center readmorebg">
                        <button class="btn-text d-flex align-items-center justify-content-center"
                            id="readMoreBtn">Read More
                            <img src="{{ asset('home/images/green-chevron.png') }}" alt="chevron">
                        </button>
                    </div> --}}

                    <hr class="my-4">

                    <div class="coursenote">
                        <div class="container">
                            <h1 class="title">Who should take this course?</h1>
                            <p>
                                {!! $course->reason !!}
                            </p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="coursenote">
                        <div class="container">
                            <h1 class="title">Course duration</h1>

                            <p>{{ $course->course_duration }}.</p>
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
                                            <img src="{{ asset('storage/'.$course->author_image) }}" alt="cherie">
                                        </div>

                                        <div>
                                            <div class="d-flex align-items-center">
                                                <h6 class="me-2 m-0 p-0">{{ $course->author_name }}</h6>
                                                <span class="tag-primary">Teacher</span>
                                            </div>
                                            <p>{{ $course->author_role }}</p>
                                        </div>
                                    </div>
                                    <p>
                                        {{ $course->author_description }}
                                    </p>
                                </div>

                            </div>
                        </div>

                        {{-- <div class="d-flex justify-content-center readmorebg">
                            <button class="btn-text d-flex align-items-center justify-content-center"
                                id="readMoreBtn2">Read More
                                <img src="{{ asset('home/images/green-chevron.png') }}" alt="chevron">
                            </button>
                        </div> --}}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-card sticky-element">
                        <div class="video">
                            <img src="{{ asset('home/images/play.png') }}" alt="play" class="play">
                            <img src="{{ asset('storage/'.$course->image) }}" alt="food" class="fit">
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <div class="d-flex align-items-end">
                                <h2 class="price">&#8358; {{ number_format($course->slashed_price, 2) }}</h2>
                                <h5 class="old-price">&#8358; {{ number_format($course->price, 2) }}</h5>
                            </div>

                            <p class="text-primary bold">
                                @php
                                    $discount = 100 - ($course->slashed_price / $course->price) * 100
                                @endphp
                                {{ number_format($discount) }}% off
                            </p>
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
                                <p class="text-grey">{{ $course->course_hours }} on-demand video lessons</p>
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
                <h3>Related Courses</h3>
            </div>
        </div>
    
        <div class="course-slide" data-aos="fade-up">
            <div class="owl-carousel owl-theme owl-two">
                @if ($relatedCourses->count() > 0)
                    @foreach ($relatedCourses as $course)
                        <div class="course-card">
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
                                        <h4>&#8358; {{ number_format($course->price, 2) }}</h4>
                                    </div>
            
                                    <div>
                                        <p>
                                            <span class="tag">
                                                <a href="{{ route('home.course', $course->slug) }}">Read More</a>
                                            </span> 
                                            &nbsp; 4.8 
                                            <img src="{{ asset('home/images/star.png') }}" alt="star"
                                                class="icon" />
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @else
                    <p>No courses found</p>
                @endif
    
            </div>
    
            <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-1 d-none d-md-block">
            <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-2 d-none d-md-block">
        </div>
    </section>
</main>





@endsection