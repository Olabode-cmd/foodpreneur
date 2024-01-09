@extends('layouts.home')

@section('title', 'Professional Name')

@section('content')
<main>
    <section class="section-professional">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="pro-img">
                        <img src="{{ asset('home/images/jane-doe.png') }}" alt="jane">
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="title">Jane Doe</h1>
                            <p class="text-primary bold mb-2">Chef, Entrepreneur</p>

                            <div class="d-flex align-items-center mb-4">
                                <div class="d-flex align-items-center me-3">
                                    <img src="{{ asset('home/images/location.png') }}" alt="location" class="icon">
                                    <p class="text-grey">Lagos, Nigeria</p>
                                </div>

                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('home/images/star-disc.png') }}" alt="star" class="icon">
                                    <p class="text-grey">8+ years experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-3">
                            <h6>Social</h6>
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

                    <div class="info">
                        <p>
                            John is a dedicated mentor and educator, sharing his knowledge with aspiring chefs and food enthusiasts. He has lectured
                            at culinary schools and conducted workshops on culinary entrepreneurship, inspiring the next generation of culinary
                            talents.</p>
                            
                            <p>In addition to his culinary prowess, John is a savvy entrepreneur. He founded and successfully operates several
                            food-related ventures, including restaurants, catering services, and a line of gourmet food products. His ability to
                            blend creativity with business acumen has earned him recognition in both the culinary and entrepreneurial spheres.</p>
                            
                            <p><span class="bold d-block">Awards and Achievements:</span>
                            Throughout his career, John has received numerous awards and accolades, including several culinary competition victories
                            and recognition for his contributions to the food industry.</p>
                            
                            <p><span class="bold d-block">Philanthropy:</span>
                            John is also passionate about giving back to the community. He actively supports local food charities and initiatives
                            focused on reducing food waste and promoting sustainability.</p>
                            
                            <p><span class="bold d-block">Signature Style:</span>
                            Known for his creative flair, John's signature style combines traditional techniques with a
                            contemporary twist. His dishes are a reflection of his culinary philosophy: fresh, seasonal, and sustainable
                            ingredients, expertly crafted into mouthwatering experiences.
                        </p>

                        <div class="d-flex mt-4">
                            <span class="tag">Food Scientist</span>
                            <span class="tag">Chef</span>
                            <span class="tag">Entrepreneur</span>
                        </div>
                    </div>

                    <div class="achievements">
                        <h1 class="achievements">Achievements</h1>

                        <ul class="custom-list">
                            <li>
                                <h5>NYU</h5>
                                <p class="bold">Bachelor of Science in Business Administration (BSBA)</p>
                                <p class="text-grey">Feb 2020 - Oct 2023</p>
                            </li>

                            <li>
                                <h5>Founder and CEO</h5>
                                <p class="bold">Food and Food Company</p>
                                <p class="text-grey">Jan 2022 - Present</p>
                            </li>

                            <li>
                                <h5>Founder</h5>
                                <p class="bold">The Snacks Community</p>
                                <p class="text-grey">Dec 2022 - Present</p>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4 d-flex align-items-center">
                        <div class="d-flex align-items-center me-3">
                            <img src="{{ asset('home/images/heart.png') }}" alt="heart">
                            <span>1.3K</span>
                        </div>

                        <div class="d-flex align-items-center">
                            <img src="{{ asset('home/images/comments.png') }}" alt="comments">
                            <span>14</span>
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