<header>
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    <img src="{{ asset('home/images/logo.png') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link  @if (Route::currentRouteName() == 'welcome')

                                active
                            @endif" aria-current="page" href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  @if (Route::currentRouteName() == 'home.about')

                            active
                        @endif" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('home.about') }}">Our Vision and Mission</a></li>
                                <li><a class="dropdown-item" href="{{ route('home.about') }}#values">Our Values</a></li>
                                <li><a class="dropdown-item" href="{{ route('home.about') }}#story">Our Story</a></li>
                                <li><a class="dropdown-item" href="{{ route('home.about') }}#team">Our Team</a></li>
                                <li><a class="dropdown-item" href="{{ route('home.about') }}#culture">Our Culture</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'home.events')
                                
                            @endif" aria-current="page" href="{{ route('home.events') }}">Events and Programs</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                School
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="courses.html#short-courses">Short courses</a></li>
                                <li><a class="dropdown-item" href="courses.html#business">Business Launch Program</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Food Innovators
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('home.foodProfessionals') }}">Food Innovators</a></li>
                                <li><a class="dropdown-item" href="{{ route('home.foodProfessionals') }}#innovator-month">Food Innovator of the Month</a></li>
                            </ul>
                        </li>
                     
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'home.blogs')
                                
                            @endif" aria-disabled="true" href="{{ route('home.blogs') }}">Blog</a>
                        </li>
                       
                    </ul>
                    <div class="d-flex align-items-center">
                        <a href="courses.html" class="btn-text">Food Business School</a>
                        <a href="#" class="btn btn-primary ms-4 btn-shadow">Apply Now</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
