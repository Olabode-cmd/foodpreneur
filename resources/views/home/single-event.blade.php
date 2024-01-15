@extends('layouts.home')

@section('title', 'Event Title')

@section('content')
<main>
    <section class="event-wrapper">
        <div class="container">
            <div class="event-slide mb-4">
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
                        <a href="https://mailchi.mp/32707c1eaf2f/2024-food-innovation-summit-registration">
                        <button type="button" class="btn btn-primary mb-2 high">Register Now</button>
                         </a>
                    </div>
                </div>
            </div>

            <div class="details">
                <h1 class="title" data-aos="fade-up">Annual Gathering of Food Innovators</h1>
                <p class="text-grey mb-4" data-aos="fade-up">Saturday, January 12, 2024 • 4:00 PM -6:00 PM GMT+1</p>
            
                <p class="text-grey mb-2" data-aos="fade-up">
                    • Virtual
                </p>
            
                <p class="description" data-aos="fade-up" data-aos-delay="300">The Food Innovation Summit will be a flagship annual 
                    gathering of industry experts, entrepreneurs, and enthusiasts in Africa’s food processing industry. This summit 
                    will serve as a platform for sharing innovative ideas, forging partnerships, and discovering cutting-edge solutions 
                    to address the challenges and opportunities in Africa’s food technology, sustainability, and security landscape. 
                    Participants will engage in lectures, workshops, panel discussions, and networking sessions, all aimed at shaping 
                    the future of the food industry.</p>

                    <p class="description" data-aos="fade-up" data-aos-delay="300">The inaugural edition is themed <strong>Innovation for Food Security </strong> and will hold virtually on January 12th and 13th, 2024.</p>
            
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
                    <p><span class="bold">January 12th and 13th</span>&nbsp;</p>
                    <a href="https://mailchi.mp/32707c1eaf2f/2024-food-innovation-summit-registration">
                    <button type="button" class="btn btn-primary">Register Now</button>
                     </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="about-event">
                <h1 class="mb-3">About this event</h1>
                <p class="description">Join us for a series of immersive workshops designed to empower aspiring foodpreneurs like you.
                    Our expert facilitators,
                    who have a wealth of experience in the food industry, will guide you through the essential ingredients needed to
                    start,
                    run, and grow a thriving food business.</p>
                
                
                <div class="about-detail d-flex flex-wrap align-items-start">
                    <div class="d-flex align-items-start mt-2">
                        <img src="{{ asset('home/images/when.png') }}" alt="when icon" class="me-4">
                        <div>
                            <h3>When</h3>
                            <p>Friday, January 12th - 13th, 2024</p>
                            <p>6:00 PM - 3:00 PM GMT+1</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mt-2">
                        <img src="{{ asset('home/images/where.png') }}" alt="where icon" class="me-4">
                        <div>
                            <h3>Where</h3>
                            <p>Virtual</p>
                            <!-- <p>Lasu Main Road</p>
                            <p>Lagos, 102301</p> -->
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
                    <div>
                        <div class="table border-success">
                            <h3 class="text-primary bold">Friday, January 12, 2024</h3>
                        </div>
                        <div class="table">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="bold">6:00 PM - 7:00 PM</p>
                                </div>
                        
                                <div class="col-md-6">
                                    <p>Lecture 1: The Future of Food Processing in Africa</p>
                                </div>
                            </div>
                        </div>
                        <div class="table">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="bold">7:00 PM - 7:30 PM</p>
                                </div>
                        
                                <div class="col-md-6">
                                    <p>Networking session</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="table border-success">
                            <h3 class="text-primary bold">Saturday, January 13, 2024</h3>
                        </div>
                        <div class="table">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="bold">10:00 AM - 11:00 AM</p>
                                </div>
                    
                                <div class="col-md-6">
                                    <p>Lecture 2: The Use of AI in Africa’s Food Industry</p>
                                </div>
                            </div>
                        </div>
                        <div class="table">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="bold">11:00 AM - 12:00 PM</p>
                                    <p class="d-none d-md-block">-</p>
                                    <p class="d-none d-md-block">-</p>
                                    <p class="d-none d-md-block">-</p>
                                </div>
                    
                                <div class="col-md-6">
                                    <p>Workshop session 1</p>
                                    <p>Workshop 1.1: Food product development</p>
                                    <p>Workshop 1.2: Food Product Marketing in the Digital Age</p>
                                    <p>Workshop 1.3: The food professionals’ path to relevance</p>
                                </div>
                            </div>
                        </div>

                        <div class="table">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="bold">12:00 PM - 12:30 PM</p>
                                </div>
                        
                                <div class="col-md-6">
                                    <p>Break</p>
                                </div>
                            </div>
                        </div>

                        <div class="table">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="bold">12:30 PM - 1:30 PM</p>
                                    <p class="d-none d-md-block">-</p>
                                    <p class="d-none d-md-block">-</p>
                                    <p class="d-none d-md-block">-</p>
                                </div>
                        
                                <div class="col-md-6">
                                    <p>Workshop session 2</p>
                                    <p>Workshop 2.1: Food waste management in food processing</p>
                                    <p>Workshop 2.2: Effective Grants-writing and Funding Tips</p>
                                    <p>Workshop 2.3: Quality/sustainable practices in the food industry</p>
                                </div>
                            </div>
                        </div>

                        <div class="table">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="bold">1:30 PM - 2:30 PM</p>
                                </div>
                        
                                <div class="col-md-6">
                                    <p>Panel Discussion</p>
                                </div>
                            </div>
                        </div>

                        <div class="table">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="bold">-</p>
                                </div>
                        
                                <div class="col-md-6">
                                    <p>Closing and Q&A</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="col-md-4 mt-2">
                    <div class="card text-center p-3">
                        <img src="{{ asset('home/images/shola.jpeg') }}" alt="speaker">
                        <h5 class="bold mt-2">Olushola Oladejo</h5>
                        <p class="text-grey">Co-founder, Foodpreneurshub Inc.</p>
                        <span style="color: green">Host</span>
                
                        <a href="https://www.linkedin.com/in/olushola-oladejo/" class="btn btn-primary mt-3">See bio</a>
                    </div>
                </div>

                <div class="col-md-4 mt-2">
                    <div class="card text-center p-3">
                        <img src="{{ asset('home/images/ndidi.jpg') }}" alt="speaker">
                        <h5 class="bold mt-2">Ndidi Okonkwo</h5>
                        <p class="text-grey">Founder, LEAP Africa and Africa Food Change-makers.</p>
                        <span style= "color: green">Speaker</span>
                
                        <a href="https://www.linkedin.com/in/ndidi-okonkwo-nwuneli-840696a/overlay/about-this-profile/
" class="btn btn-primary mt-3">See bio</a>
                    </div>
                </div>

                <div class="col-md-4 mt-2">
                    <div class="card text-center p-3">
                        <img src="{{ asset('home/images/mark.jpg') }}" alt="speaker">
                        <h5 class="bold mt-2">Mark Peterson</h5>
                        <p class="text-grey">Founder and CEO, Ziscuit Inc.</p>
                        <span style= "color: green">Speaker</span>

                
                        <a href=" https://www.linkedin.com/in/mark-peterson-ziscuit/overlay/about-this-profile/
" class="btn btn-primary mt-3">See bio</a>
                    </div>
                </div>

                <div class="col-md-4 mt-2">
                    <div class="card text-center p-3">
                        <img src="{{ asset('home/images/jane.jpg') }}" alt="speaker">
                        <h5 class="bold mt-2">Jane Omojokun</h5>
                        <p class="text-grey">Managing Director and Lead Consultant, Nugata Consults Limited</p>
                                        <span style= "color: green">Speaker</span>

                        <a href="https://www.linkedin.com/in/jane-omojokun-aa991024/
" class="btn btn-primary mt-3">See bio</a>
                    </div>
                </div>

                <div class="col-md-4 mt-2">
                    <div class="card text-center p-3">
                        <img src="{{ asset('home/images/Chilufya.jpg') }}" alt="speaker">
                        <h5 class="bold mt-2">Chilufya Chileshe</h5>
                        <p class="text-grey">Chief of Staff, The SDG2 Advocacy</p>
                        <span style= "color: green">Speaker</span>

                        <a href="https://www.linkedin.com/in/chilufya-chileshe-b3182544/
" class="btn btn-primary mt-3">See bio</a>
                    </div>
                </div>

                <div class="col-md-4 mt-2">
                    <div class="card text-center p-3">
                        <img src="{{ asset('home/images/Wuraola.jpg') }}" alt="speaker">
                        <h5 class="bold mt-2">Wuraola Ayeni</h5>
                        <p class="text-grey">Founder, IYL Foods and Confectionery</p>
                        <span style= "color: green">Speaker</span>

                
                        <a href="https://www.linkedin.com/in/thewuraola/
" class="btn btn-primary mt-3">See bio</a>
                    </div>
                </div>

                <div class="col-md-4 mt-2">
                    <div class="card text-center p-3">
                        <img src="{{ asset('home/images/tony.jpeg') }}" alt="Tony Bello Image">
                        <h5 class="bold mt-2">Tony Bello</h5>
                        <p class="text-grey">CEO & Co-founder, Sage Industries</p>
                        <span style= "color: green">Speaker</span>

                
                        <a href="https://www.linkedin.com/in/dr-tony-bello-818947a/
" class="btn btn-primary mt-3">See bio</a>
                    </div>
                </div>
                
                    <div class="col-md-4 mt-2">
                    <div class="card text-center p-3">
                        <img src="{{ asset('home/images/toba.jpeg') }}" alt="speaker">
                        <h5 class="bold mt-2">Toba Best</h5>
                        <p class="text-grey" style="color: green">Facilitator</p><br/>

                
                        <a href="https://www.linkedin.com/in/tobabest/
" class="btn btn-primary mt-3">See bio</a>
                    </div>
                </div>
                
                      <div class="col-md-4 mt-2">
                    <div class="card text-center p-3">
                        <img src="{{ asset('home/images/ademola.jpeg') }}" alt="speaker">
                        <h5 class="bold mt-2">Dr. Ade Akinrinola</h5>
                        <p class="text-grey" style="color: green">Facilitator</p>
                
                        <a href="https://www.linkedin.com/in/ademola-akinrinola/
" class="btn btn-primary mt-3">See bio</a>
                    </div>
                </div>
                
                         <div class="col-md-4 mt-2">
                    <div class="card text-center p-3">
                        <img src="{{ asset('home/images/iboi.jpeg') }}" alt="Iboi Image">
                        <h5 class="bold mt-2">Osagie Iboi</h5>
                        <p class="text-grey" style="color: green">Facilitator</p>
                
                        <a href="https://www.linkedin.com/in/osagie-iboi-21273a78/" class="btn btn-primary mt-3">See bio</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection