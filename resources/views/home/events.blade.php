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
                        @foreach ($events  as $event)
                        <div class="event">
                            <div class="row">
                                <div class="col-3">
                                    <img src="{{ asset('storage/'.$event->image) }}" alt="event">
                                </div>

                                <div class="col-9">
                                    <p class="bold text-grey">{{ $event->date }} • {{ $event->location }}</p>

                                    <h1 class="title">{{ $event->title }}</h1>
                                    <p class="my-3">
                                        {{ implode(' ', array_slice(explode(' ', strip_tags($event->description)), 0, 28)) }} ...
                                    </p>

                                    <div class="d-flex align-items-center">
                                        <a href="{{route('home.event', $event->slug)}}" class="btn btn-primary me-3">View Details</a>
                                        <a href="{{route('home.event.register', $event->slug)}}" class="btn btn-text">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                {{-- pagination links --}}
                                {{ $events->links("pagination::bootstrap-4") }}
        
                            </div>
                        </div>
        
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