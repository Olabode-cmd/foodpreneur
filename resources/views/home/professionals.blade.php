@extends('layouts.home')

@section('title', 'Food Professionals')

@section('content')


<main>
    <section class="search-hero short"
        style="background: url('{{asset("home/images/food-hero.png")}}') no-repeat; background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <h1 class="title" data-aos="fade-up">The Food Innovators</h1>

                    <form action="#" class="relative" data-aos="fade-up" data-aos-delay="400">
                        <input type="search" placeholder="Search" class="search-input">
                        <input type="submit" value="Search" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section-learn">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h1 class="title">Meet Talented Experts in Africa’s food industry</h1>
                <div class="d-flex flex-wrap justify-content-center">
                    <span class="tag active">Professionals</span>
                    <span class="tag">Entrepreneurs</span>
                    <span class="tag">Equipment Vendors</span>
                    <span class="tag">Packaging Vendors</span>
                    <span class="tag">Farmers</span>
                    <span class="tag">Others</span>
                </div>
            </div>

            <div class="row mt-4">
               
                @foreach ($professionals as $professional)
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('home.professional', $professional->slug) }}">
                        <div class="expert">
                            <img src="{{asset('storage/'.$professional->image)}}" alt="alyssia">
                            <div class="info">
                                <h6>{{ $professional->name }}</h6>
                                <p>{{ $professional->role }}</p>
                                <p class="text-grey">Lagos, Nigeria</p>
                            </div>

                            <div class="shade">&nbsp;</div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="section-featured">
        <div class="container">
            <h1 class="title" data-aos="fade-up">Featured</h1>

            <div class="owl-carousel owl-theme owl-one" data-aos="fade-up">
                @foreach ($featuredProfessionals as $featured)
                <div class="item">
                    <div class="featured-card">
                        <div class="featured-img">
                            <img src="{{ asset('storage/' .$featured->image) }}" alt="featured" class="feature-img">
                            <img src="{{asset('home/images/featured-tag.png')}}" alt="featured-tag" class="featured-tag">
                        </div>

                        <div class="featured-details">
                            <div>
                                <h1 class="title">{{ $featured->name }}</h1>
                                <p class="text-primary">{{ $featured->role }}</p>
                            </div>

                            <div class="d-flex align-items-start">
                                <img src="{{asset('home/images/star-disc.png')}}" alt="disc" class="icon star">
                                <ul>
                                    <li>
                                       
                                        <p class="text-grey bold">{{ $featured->location }}</p>
                                        <p>{{ $featured->experience }} years experience</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="d-flex justify-content-end w-100">
                                <!-- <div>&nbsp;</div> -->
                                <a href="{{ route('home.professional', $featured->slug) }}">
                                    <div class="d-flex align-items-center">
                                        <p class="bold text-primary me-2 mt-3">View Profile</p>
                                        <img src="{{asset('home/images/open-green.png')}}" alt="" class="icon">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-stars">
        <div class="text-center">
            <h1 class="title">A Few of Our <span class="text-primary">Foodpreneur</span> Stars!</h1>
        </div>
    
       @foreach ($professionalOfTheDay as $key => $professional)
            @if ($key == 0)
            <div class="bg-orange">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p class="bold text-orange mb-3">Entrepreneur of the Day</p>
                            <h1 class="title mb-4">World Renowned Farm-to-Produce Entrepreneur</h1>
                            <p class="subtitle mb-3">Meet {{ $professional->name }}  {{ implode(' ', array_slice(explode(' ', strip_tags($professional->description)), 0, 35)) }} ...</p>
        
                            <a href="{{ route('home.professional', $professional->slug) }}" class="btn btn-orange">View Profile</a>
                        </div>
                        <div class="col-md-6">
                            <div class="expert">
                                <img src="{{asset('storage/'.$professional->image)}}" alt="jane-doe">
                                <div class="info">
                                    <h6>{{ $professional->name }}</h6>
                                    <p>{{ $professional->role }}</p>
                                </div>
        
                                <img src="{{asset('home/images/featured-tag.png')}}" alt="featured" class="tag-feature">
        
                                <div class="shade">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @elseif ($key == 1)
            <div class="bg-success">
                <div class="container">
                    <div class="row align-items-center column">
                        <div class="col-md-6">
                            <div class="expert">
                                <img src="{{asset('storage/'.$professional->image)}}" alt="jane-doe">
                                <div class="info">
                                    <h6>{{ $professional->name }}</h6>
                                    <p>{{ $professional->role }}</p>
                                </div>
        
                                <img src="{{asset('home/images/featured-tag.png')}}" alt="featured" class="tag-feature">
        
                                <div class="shade">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="bold text-primary mb-3">Entrepreneur of the Day</p>
                            <h1 class="title mb-4">World Renowned Farm-to-Produce Entrepreneur</h1>
                            <p class="subtitle mb-3">Meet {{ $professional->name }}  {{ implode(' ', array_slice(explode(' ', strip_tags($professional->description)), 0, 35)) }} ...</p>
        
                            <a href="{{ route('home.professional', $professional->slug) }}" class="btn btn-primary">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
           @elseif ($key == 2)
           <div class="bg-purple">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="bold text-purple mb-3">Entrepreneur of the Day</p>
                        <h1 class="title mb-4">World Renowned Farm-to-Produce Entrepreneur</h1>
                        <p class="subtitle mb-3">Meet Zara Saidat a farm-to-produce food entrepreneur who gained global
                            recognition for
                            innovative food processing and
                            production</p>
    
                        <a href="{{ route('home.professional', 'jane-doe') }}" class="btn btn-purple">View Profile</a>
                    </div>
    
                    <div class="col-md-6">
                        <div class="expert">
                            <img src="{{asset('storage/'.$professional->image)}}" alt="jane-doe">
                            <div class="info">
                                <h6>{{ $professional->name }}</h6>
                                <p>{{ $professional->role }}</p>
                            </div>
    
                            <img src="{{asset('home/images/featured-tag.png')}}" alt="featured" class="tag-feature">
    
                            <div class="shade">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           @endif
       @endforeach
 
    

        <div class="text-center" id="innovator-month">
            <a href="{{ route('home.nominate') }}" class="btn btn-primary mt-3" type="button" >Nominate a Food Innovator for the month</a>
        </a>
        </div>
    
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nominate</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <label>Select Innovator</label>
                            <select class="form-control">
                                <option value="1">John Doe</option>
                                <option value="2">Jane Doe</option>
                                <option value="3">Matt Doe</option>
                                <option value="4">Peter Doe</option>
                            </select>

                            <input type="submit" value="Nominate" class="btn btn-primary mt-2">
                        </form>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="section-stories">
        <div class="container">
            <div class="text-center">
                <h1 class="title" data-aos="fade-up">Some of Our <span class="text-primary">Success Stories</span></h1>
            </div>

            <div class="owl-carousel owl-theme owl-two" data-aos="fade-up">
                @foreach ($sucessStories as $stories)
                <div class="item">
                    <div class="stories">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="heading">{{ $stories->name }}'s Flavorful Journey to Foodpreneurship</h1>

                                <p class="story">
                                    {{ $stories->description }}
                                </p>
                                <p class="text-primary mt-2">{{ $stories->name }}</p>
                                <p class="text-grey">{{ $stories->role }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </section>

    <section class="section-empower">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-up">
                    <h1 class="title bold mb-4">Join us on our mission in empowering Africans</h1>
                    <a href="{{ route('home.professional', 'jane-doe') }}" class="btn btn-primary">Join our Team</a>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{asset('home/images/empower.png')}}" alt="empower" class="round-16 my-2">
                </div>
            </div>
    
            <img src="{{asset('home/images/connect.png')}}" alt="connect" class="connect-1 d-none d-md-block">
            <img src="{{asset('home/images/connect.png')}}" alt="connect" class="connect-2 d-none d-md-block">
        </div>
    </section>

</main>

@endsection
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

    $('.owl-one').owlCarousel({
        loop: true,
        margin: 25,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1.5
            }
        }
    });

    $('.owl-two').owlCarousel({
            loop: true,
            margin: 25,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1.4
                }
            }
        });

    
</script>