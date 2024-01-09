@extends('layouts.home')

@section('title', 'About')

@section('content')

<main>
    <section class="about-wrapper">
        <div class="container">
            <div class="text-center">
                <h1 class="title" data-aos="fade-up" data-aos-delay="200"><span class="text-primary">Empowering
                        you</span> to start
                    your<br class="d-none d-md-block" /> food processing business</h1>
                <p class="subtitle mt-4" data-aos="fade-up" data-aos-delay="700">Our Vision is to enhance Africa’s
                    food sustainability
                    and security by empowering <br class="d-none d-md-block" /> Africans to start and grow
                    their food processing enterprises.</p>

                <img src="{{ asset('home/images/about-bg.png') }}" alt="about" class="my-4" data-aos="fade-up" data-aos-delay="800">
            </div>
            <div class="d-flex align-items-center" data-aos="fade-up" id="mission">
                <img src="{{ asset('home/images/abstract.png') }}" alt="abstract" class="abstract me-2">

                <div class="text-white">
                    <h2 class="text-white">Our Mission</h2>
                    <p>To provide training, resources, mentorship, and a community of <br class="d-none d-md-block" /> support to African food innovators.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-values" id="values">
        <div class="container">
            <h1 class="title">Our Values</h1>
            <p class="subtitle">These values are true to our hearts, defining <br class="d-block d-md-none" /> who we are as <br class="d-none d-md-block" /> a brand and the value that we provide</p>

            <div class="row value">
                <div class="col-md-6">
                    <div class="value-card purple" data-aos="fade-up">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('home/images/empowerment.png') }}" alt="empowerment">
                            <h1 class="title">Empowerment</h1>
                        </div>

                        <p class="mt-4">We equip our community of food innovators to become industry leaders through our comprehensive training and invaluable
                        mentorship programs.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="value-card green" data-aos="fade-up" data-aos-delay="300">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('home/images/excellence.png') }}" alt="excellence">
                            <h1 class="title">Excellence</h1>
                        </div>
                    
                        <p class="mt-4">We strive to stand out and not just fit in and train our clients to do the same. That’s what excellence means to us.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="value-card green" data-aos="fade-up" data-aos-delay="200">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('home/images/collaboration.png') }}" alt="collaboration.png">
                            <h1 class="title">Collaboration</h1>
                        </div>
                    
                        <p class="mt-4">Foodpreneurs Hub fosters a culture where diverse perspectives and expertise come together to drive innovation and create
                        lasting positive impact in the food ecosystem.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="value-card orange" data-aos="fade-up" data-aos-delay="500">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('home/images/innovation.png') }}" alt="innovation.png">
                            <h1 class="title">Innovation</h1>
                        </div>
                    
                        <p class="mt-4">
                            We push boundaries, challenge the status quo, think outside the box and celebrate bold ideas, all with the aim of
                            driving positive change in Africa’s food industry.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row founding align-items-center" id="story">
                <div class="col-md-6">
                    <img src="{{ asset('home/images/founding.png') }}" alt="fouding" data-aos="fade-up">
                </div>
                <div class="col-md-6 mt-2" data-aos="fade-up" data-aos-delay="300">
                    <h1 class="title text-start mb-4">Our  Story</h1>
                    <p>
                        Welcome to Foodpreneurs Hub, your go-to resource for food processing innovation and entrepreneurship in Africa. 
                        We are a dynamic food-tech company dedicated to empowering and supporting food innovators across the continent. 
                        Our mission is to democratize food processing, equipping aspiring entrepreneurs with the knowledge, resources, 
                        and network needed for success.</p>
                        
                        <p class="mt-4">At Foodpreneurs Hub, we offer comprehensive training, essential resources, experienced 
                            mentorship, and a vibrant community. Whether you're an entrepreneur with a groundbreaking food concept, 
                            a professional seeking to enhance your skills, a vendor looking to optimize your processes, or simply 
                            an enthusiast eager to contribute to Africa's food industry, we welcome you. 
                    </p>
                    <p class="mt-4">Over 40% of food loss and waste in Africa occurs post-harvest due to a lack of food processing and 
                        storage skills, posing a threat to both food security. Join us on our mission to reduce food loss, enhance food 
                        security, and promote sustainability across the continent. Together, we'll unlock the potential of African food 
                        innovation and build a food-secure future." 
                </p>
                </div>
            </div>

            <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-1">
        </div>
    </section>

    <section class="section-team" id="team">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h1 class="title">Our Team</h1>
                <p class="subtitle">We believe we're better together, working as a team.</p>
            </div>

            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="team">
                        <div class="team-img">
                            <img src="{{ asset('home/images/shola.jpeg') }}" alt="jane">
                        </div>
                        <a target="_blank" href="https://www.linkedin.com/in/olushola-oladejo/" class="d-flex align-items-center justify-content-between mt-2">
                            <div>
                                <h5 class="bold">Olushola Oladejo</h5>
                                <p class="text-grey">Founder & CEO</p>
                            </div>

                            <img src="{{ asset('home/images/open.png') }}" alt="open icon">
                        </a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="team">
                        <div class="team-img">
                            <img src="{{ asset('home/images/yosola.jpeg') }}" alt="claire">
                        </div>
                        <a target="_blank" href="https://www.linkedin.com/in/adeyosolaoke" class="d-flex align-items-center justify-content-between mt-2">
                            <div>
                                <h5 class="bold">Yosola Oke</h5>
                                <p class="text-grey">Co-Founder & COO</p>
                            </div>
                    
                            <img src="{{ asset('home/images/open.png') }}" alt="open icon">
                        </a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="team">
                        <div class="team-img">
                            <img src="{{ asset('home/images/joshua.jpeg') }}" alt="jacob">
                        </div>
                        <a href="https://www.linkedin.com/in/abiyejoshua/" class="d-flex align-items-center justify-content-between mt-2">
                            <div>
                                <h5 class="bold">Joshua Abiye</h5>
                                <p class="text-grey">Sales & Marketing Lead</p>
                            </div>
                    
                            <img src="{{ asset('home/images/open.png') }}" alt="open icon">
                        </a>
                    </div>
                </div>
           
            </div>
        </div>
    </section>

    <section class="section-culture" id="culture">
        <div class="container">
            <img src="{{ asset('home/images/culture.png') }}" alt="culture" class="culture" data-aos="fade-up">

            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset('home/images/company.png') }}" alt="company" class="w-50 d-none d-md-block" data-aos="fade-up" >
                </div>
                <div class="col-md-10" data-aos="fade-up" data-aos-delay="300">
                    <h1 class="title">Company Culture</h1>
                    <p class="mt-4">
                        <strong>Mission and Values:</strong> At Foodpreneurs Hub, our mission is to empower African food innovators with training, resources,
                         mentorship, and a community of support. We are guided by a commitment to excellence, innovation, collaboration
                          and empowerment.</p>
                        
                        <p class="mt-4">
                            <strong>Team Collaboration:</strong> We believe in the strength of collaboration. Our team is united by a shared passion to enhance 
                            African’s food security and sustainability by empowering entrepreneurs. We foster an open, communicative, and 
                            collaborative work environment. Through shared ideas and diverse perspectives, we elevate one another and our clients 
                            to achieve greater success.
                        </p>
                        
                        <p class="mt-4"><strong>Learning and Development:</strong> We invest in our team's growth. 
                            Foodpreneurs Hub provides continuous learning opportunities and resources, ensuring that our team members are equipped 
                            with the knowledge and skills needed to excel in their career.
                    </p>

                    <p class="mt-4"><strong>Work-Life Balance:</strong> We recognize the importance of a healthy work-life balance. Foodpreneurs 
                        Hub supports flexible work arrangements and encourages wellness, ensuring our team thrives both professionally 
                        and personally.
               </p>
               <p class="mt-4"><strong>Innovation and Creativity:</strong> Innovation is the heartbeat of Foodpreneurs Hub. We encourage a culture of
                creativity where every team member is empowered to contribute fresh ideas. Our commitment to innovation drives 
                us to continually explore new horizons.
       </p>
       <p class="mt-4"><strong>Recognition and Rewards:</strong> We believe in acknowledging the outstanding contributions of our team. 
        Foodpreneurs Hub has a culture of recognition and rewards, ensuring that every achievement is celebrated, and every effort 
        recognized.</p>

        <p class="mt-4"><strong>Customer-Centric Approach:</strong> Our success is rooted in our commitment to our customers. 
            Foodpreneurs Hub is dedicated to delivering exceptional value and experiences, placing our customers at the heart of 
            everything we do.</p>
        
            <p class="mt-4"><strong>Environmental and Social Responsibility:</strong> Foodpreneurs Hub is committed to environmental 
                sustainability and social responsibility. We actively seek ways to contribute positively to our community.</p>
               
        </div>
            </div>
        </div>
    </section>

    <section class="section-first">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h1 class="title">It starts with putting people first</h1>
                <p class="subtitle">We believe we're better together, working as a team</p>
            </div>

            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="first-card">
                        <h1 class="text-primary">20+</h1>
                        <h4 class="text-uppercase">entrepreneurs trained</h4>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="first-card">
                        <h1 class="text-primary">3,000+</h1>
                        <h4 class="text-uppercase">businesses started</h4>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="first-card">
                        <h1 class="text-primary">25+</h1>
                        <h4 class="text-uppercase">families helped</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-empower">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-up">
                    <h1 class="title bold mb-4">Join us on our mission to empower Africans</h1>
                    <a href="#" class="btn btn-primary">Join our Team</a>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('home/images/empower.png') }}" alt="empower" class="round-16 my-2">
                </div>
            </div>

            <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-1 d-none d-md-block">
            <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-2 d-none d-md-block">
        </div>
    </section>

    <section class="section-knowledge">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-up">
                    <h1 class="title text-white bold">Knowledge is power</h1>
                    <p class="subtitle text-white">Join our community and get occasional nuggets of wisdom directly into your Inbox.
                         No spam.</p>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    @include('custom.alert')
                    <form action="{{ route('home.community') }}" method="POST" >
                        @csrf
                        <input type="email" name="email" required placeholder="Email Address" class="email-input mb-3">
                        <input type="submit" value="Subscribe for updates" class="btn btn-outline-light">
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection