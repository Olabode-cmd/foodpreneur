@extends('layouts.home')

@section('title', 'Blogs')

@section('content')

<main>
    <section class="blog-header">
        <div class="container">
            <div class="text-center">
                <p class="bold text-primary">Foodpreneurial Knowledge</p>
                <h1 class="title">The Foodpreneurial Blog</h1>
                <!-- <h1 class="title">The Food Innovators</h1> -->

                <p class="subtitle">
                    Get the latest industry news, recipes, interviews, technology and resources. Explore some <br class="d-none d-md-block" /> of our most popular content
                    and learn something new.
                </p>
                @if($blogs->isNotEmpty())
                    <?php $firstBlog = $blogs->first() ?>
                    <div class="blog-img">
                        <a href="{{ route('home.blog', $firstBlog->slug) }}">
                            <img src="{{ asset('storage/'.$firstBlog->image)}}" alt="blog-header">
                            
                            <div class="shade"></div>
                            
                            <div class="content">
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="title">
                                        <h1>{{ $firstBlog->title }}</h1>
                                        <p>
                                            {{ implode(' ', array_slice(explode(' ', strip_tags($firstBlog->description)), 0, 35)) }} ...
                                        </p>
                                    </div>
                            
                                    <div class="detail">
                                        <p>Written by</p>
                                        <p class="bold">{{ $firstBlog->author }}</p>
                                    </div>
                            
                                    <div class="detail">
                                        <p>Published on</p>
                                        <p class="bold">{{ $firstBlog->created_at->format('d M, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="section-blogposts">
        <div class="search">
            <div class="col-md-8 mx-auto">
                <form action="#">
                    <img src="{{ asset('home/images/search.png') }}" alt="search">
                    <input type="search" class="search-input" placeholder="What are you looking for?">
                    <input type="submit" value="Search" class="btn btn-primary">
                </form>
            </div>
        </div>

        <div class="container pt-4">
            <div class="text-center">
                <h1 class="title mb-2">Browse by Category</h1>
                <div class="d-flex flex-wrap justify-content-center">
                   @foreach ($blogsCategories  as $categories)
                        <span id="#blog-{{ $categories->name }}" class="tag">{{ $categories->name }}</span>
                   @endforeach
                    
                </div>
            </div>

            <div class="row mt-4">
                @foreach ($blogs as $blog)
                <div class="col-md-6 col-sm-12">
                    <div class="blog-card">
                        <a href="{{ route('home.blog', $blog->slug) }}">
                            <div class="blog-img">
                                <img src="{{ asset('storage/'.$blog->image) }}" alt="blog">
                            </div>
                    
                            <div class="blog-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">{{ $blog->title }}</h3>
                                    <img src="{{ asset('home/images/open.png') }}" alt="open">
                                </div>
                                <p>
                                    {{ implode(' ', array_slice(explode(' ', strip_tags($blog->description)), 0, 28)) }} ...
                                </p>
                    
                                <div class="d-flex">
                                    @foreach (json_decode($blog->tag) as $tag)
                                    @if ($tag != null)
                                        <span class="blog-tag">{{ $tag }}</span>
                                    @endif
                                @endforeach
                                </div>

                                <p class="text-grey mt-3">Posted - {{ $blog->created_at->format('d M, Y') }}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        {{-- pagination links --}}
                        {{ $blogs->links("pagination::bootstrap-4") }}

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-trending">
        <div class="container">
            <div class="text-center">
                <h1 class="title">Top Three Trending Posts</h1>
                <p class="subtitle">See what other industry leaders are reading</p>
            </div>

            <div class="row mt-4">
                @foreach ($trending as $key => $blog)
                    @if ($key == 0)
                        <div class="col-md-4 col-sm-12">
                            <div class="trend-card">
                                <a href="{{ route('home.blog',$blog->slug) }}">
                                    <div class="trend-tag success">
                                        {{ $blog->category->name }}
                                    </div>
                                    <div class="trend-img">
                                        <img src="{{ asset('storage/'.$blog->image) }}" alt="trend">
                                    </div>
                                    
                                    <div class="trend-detail">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <h4>{{ $blog->title }}</h4>
                                            <img src="{{ asset('home/images/open.png') }}" alt="open">
                                        </div>
                                    
                                        <p>
                                            {{ implode(' ', array_slice(explode(' ', strip_tags($blog->description)), 0, 15)) }} ...
                                        </p>
                                    
                                        <p class="bold mt-4">{{ $blog->author }}</p>
                                        <p class="text-grey">Posted - {{ $blog->created_at->format('d M, Y') }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @elseif ($key == 1)
                    <div class="col-md-4 col-sm-12">
                        <div class="trend-card">
                            <a href="{{ route('home.blog',$blog->slug) }}">
                                <div class="trend-tag purple">
                                    {{ $blog->category->name }}
                                </div>
                                <div class="trend-img">
                                    <img src="{{ asset('storage/'.$blog->image) }}" alt="trend">
                                </div>
                                
                                <div class="trend-detail">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <h4>{{ $blog->title }}</h4>
                                        <img src="{{ asset('home/images/open.png') }}" alt="open">
                                    </div>
                                
                                    <p>
                                        {{ implode(' ', array_slice(explode(' ', strip_tags($blog->description)), 0, 15)) }} ...
                                    </p>
                                
                                    <p class="bold mt-4">{{ $blog->author }}</p>
                                    <p class="text-grey">Posted - {{ $blog->created_at->format('d M, Y') }}</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    @elseif ($key == 2)
                    <div class="col-md-4 col-sm-12">
                        <div class="trend-card">
                            <a href="{{ route('home.blog',$blog->slug) }}">
                                <div class="trend-tag orange">
                                    {{ $blog->category->name }}
                                </div>
                                <div class="trend-img">
                                    <img src="{{ asset('storage/'.$blog->image) }}" alt="trend">
                                </div>
                                
                                <div class="trend-detail">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <h4>{{ $blog->title }}</h4>
                                        <img src="{{ asset('home/images/open.png') }}" alt="open">
                                    </div>
                                
                                    <p>
                                        {{ implode(' ', array_slice(explode(' ', strip_tags($blog->description)), 0, 15)) }} ...
                                    </p>
                                
                                    <p class="bold mt-4">{{ $blog->author }}</p>
                                    <p class="text-grey">Posted - {{ $blog->created_at->format('d M, Y') }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>

            <img src="{{ asset('home/images/connect-purple.png') }}" alt="connect" class="connect-1 d-none d-md-block">
            <img src="{{ asset('home/images/connect-purple.png') }}" alt="connect" class="connect-2 d-none d-md-block">
        </div>
    </section>

    <section class="section-enrol">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-up">
                    <h1 class="title">Enroll in Our Food Processing Course Today!</h1>
                    <p class="subtitle">Unlock the secrets of Business success</p>
    
                    <a href="{{ route('home.courses') }}" class="btn btn-primary mt-4">Explore Courses</a>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('home/images/enrol.png') }}" alt="enroll" class="my-3">
                </div>
            </div>
    
            <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-1 d-none d-md-block">
            <img src="{{ asset('home/images/connect.png') }}" alt="connect" class="connect-2">
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
                    <p class="subtitle">Get timely updates and newsletters on the latest blog posts and Foodpreneurs Hub trends.</p>
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