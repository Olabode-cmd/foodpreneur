@extends('layouts.home')

@section('title')

{{ $professional->name }}

@endsection

@section('content')
<main>
    <section class="section-professional">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="pro-img">
                        <img src="{{ asset('storage/'.$professional->image)}}" alt="jane">
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="title">{{ $professional->name }}</h1>
                            <p class="text-primary bold mb-2">{{ $professional->role }}</p>

                            <div class="d-flex align-items-center mb-4">
                                <div class="d-flex align-items-center me-3">
                                    <img src="{{ asset('home/images/location.png') }}" alt="location" class="icon">
                                    <p class="text-grey">{{ $professional->location }}</p>
                                </div>

                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('home/images/star-disc.png') }}" alt="star" class="icon">
                                    <p class="text-grey">{{ $professional->experience }}+ years experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-3">
                            <h6>Social</h6>
                            @php 
                                $socials = json_decode($professional->socials,true);
                            @endphp
                            <div class="d-flex" data-aos="fade-up" data-aos-delay="300">
                                <a href="{{ $socials[0]['twitter'] =='' ? '#' : $socials[0]['twitter'] }}" target="_blank" class="me-2">
                                    <img src="{{ asset('home/images/x.png') }}" alt="x">
                                </a>
                                <a href="{{ $socials[0]['facebook'] =='' ? '#' : $socials[0]['facebook'] }}" target="_blank" class="me-2">
                                    <img src="{{ asset('home/images/facebook.png') }}" alt="facebook">
                                </a>
                                <a href="{{ $socials[0]['linkedin'] =='' ? '#' : $socials[0]['linkedin'] }}" target="_blank" class="me-2">
                                    <img src="{{ asset('home/images/linkedin.png') }}" alt="linkedin">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="info">
                        <p>
                            {!! $professional->description !!}
                        </p>
                            
                            <p><span class="bold d-block">Awards and Achievements:</span>
                                {{ $professional->awards }}
                            </p>
                            
                            <p><span class="bold d-block">Philanthropy:</span>
                            {{ $professional->philanthropy }}.</p>
                            
                            <p><span class="bold d-block">Signature Style:</span>
                            {{ $professional->signature  }}.
                        </p>

                        <div class="d-flex mt-4">
                            @foreach (json_decode($professional->tag) as $tag)
                                @if ($tag != null)
                                    <span class="tag">{{ $tag }}</span>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="achievements">
                        <h1 class="achievements">Achievements</h1>

                        <ul class="custom-list">
                            @foreach (json_decode($professional->achievements) as $achievement)
                                @if ($achievement != null)
                                <li>
                                    <h5>{{ $achievement->achievement_title }}</h5>
                                    <p class="bold">{{ $achievement->achievement_duration }}</p>
                                    <p class="text-grey">{{ $achievement->achievement_description }}</p>
                                </li>
                                @endif
                                
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt-4 d-flex align-items-center">
                        <div class="d-flex align-items-center me-3">
                            <img src="{{ asset('home/images/heart.png') }}" alt="heart">
                            <span>1.3K</span>
                        </div>

                        <div class="d-flex align-items-center">
                            <img src="{{ asset('home/images/comments.png') }}" alt="comments">
                            <span>{{ $professional->views }}</span>
                        </div>
                    </div>

                    <div class="mail-card">
                        <h1 class="title">Are you a <span class="text-primary">Food Professional</span>?</h1>
                        <p>
                            Send us a mail <a href="#" class="text-primary text-underline">pro@foodpreneurshub.com</a> with your information and
                            be features on the Foodpreneurs Hub website and gain
                            access to many other perks
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection