@extends('layouts.home')

@section('title', )
{{ $event->title  }}
@endsection

@section('content')
<main>
    <section class="event-wrapper">
        <div class="container">
            {{-- <div class="event-slide mb-4">
                <div class="d-flex align-items-center">
                    <p class="text-uppercase font-semibold">brought to you by</p>
                    <img src="{{ asset('home/images/logo.png') }}" alt="logo">
                </div>
                <div class="row">
                    <div class="col-md-3 mt-2 align-self-center">
                        <div class="d-flex align-items-center">
                            <div class="year">20<br />23</div>
                            <h3 class="text-bold text-uppercase m-0">food<br />innovation<br />summit</h3>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <p class="font-semibold text-uppercase text-black">largest gathering of food professionals</p>
                        <div class="d-flex align-items-center theme-div">
                            <h4 class="theme-orange text-uppercase">
                                T<br />H<br />E<br />M<br />E
                            </h4>
                            <h1 class="text-uppercase bold event-title">innovation for <br /> food <span class="text-primary">security</span></h1>
                        </div>
                    </div>
                    <div class="col-md-3 relative">
                        <img src="{{ asset('home/images/event-slide.png') }}" alt="event" class="event-img">
                        <a href="{{ route('home.event.register', $event->slug) }}">
                        <button type="button" class="btn btn-primary mb-2 high">Register Now</button>
                         </a>
                    </div>
                </div>
            </div> --}}
            <div class="my-4">
                <img src="{{ asset('storage/'.$event->image) }}" alt="single-event" class="rounded">
            </div>

            <div class="details">
                <h1 class="title" data-aos="fade-up">{{ $event->title }}</h1>
                <p class="text-grey mb-4" data-aos="fade-up">{{ $event->date }}</p>
            
                <p class="text-grey mb-2" data-aos="fade-up">
                    • {{ $event->location }}
                </p>
            
                <p class="description" data-aos="fade-up" data-aos-delay="300">
                    {!! $event->description !!}
                </p>
            
                <div class="d-flex" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="me-2">
                        <img src="{{ asset('home/images/x.png') }}" alt="x">
                    </a>
                    <a href="#" class="me-2">
                        <img src="{{ asset('home/images/facebook.png') }}" alt="facebook">
                    </a>
                    <a href="#" class="me-2">
                        <img src="{{ asset('home/images/linkedin.png') }}" alt="linkedin">
                    </a>
                </div>
            </div>
        </div>

        <div class="rsvp-div">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <p><span class="bold">{{ $event->date }}</p>
                    <a href="{{ route('home.event.register', $event->slug) }}">
                    <button type="button" class="btn btn-primary">Register Now</button>
                     </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="about-event">
                <h1 class="mb-3">About this event</h1>
                
                
                
                <div class="about-detail d-flex flex-wrap align-items-start">
                    <div class="d-flex align-items-start mt-2">
                        <img src="{{ asset('home/images/when.png') }}" alt="when icon" class="me-4">
                        <div>
                            <h3>When</h3>
                            <p>{{ $event->date }}</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mt-2">
                        <img src="{{ asset('home/images/where.png') }}" alt="where icon" class="me-4">
                        <div>
                            <h3>Where</h3>
                            <p>{{ $event->location }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-schedule">
        <div class="container">
            <div class="text-center">
                <h1 class="font-semibold">Schedule</h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-9">
                    {!! $event->schedule !!}
                </div>
            </div>
        </div>
    </section>

    <section class="section-speakers">
        <div class="container">
            <div class="text-center">
                <h1 class="bold mb-4">Speakers</h1>
            </div>

            <div class="row justify-content-center">
                @foreach (json_decode($event->speakers) as $speaker)
                    <div class="col-md-4 mt-2">
                        <div class="card text-center p-3">
                            <img src="{{ asset('storage/'.$speaker->speakers_avatar) }}" alt="speaker">
                            <h5 class="bold mt-2">{{ $speaker->speakers_name }}</h5>
                            <p class="text-grey">{{ $speaker->speakers_company }}</p>
                            <span style="color: green">{{ $speaker->speakers_role }}</span>
                    
                            {{-- <a href="#" class="btn btn-primary mt-3">See bio</a> --}}
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
</main>

@endsection