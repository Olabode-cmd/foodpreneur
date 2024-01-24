@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pb-2">
                        

                            <div class="row align-items-center">
                                <div class="col-xl-3 mb-3 col-sm-12">
                                    <div class="card bg-light mb-0">
                                        <div class="card-body">
                                            <div class="py-2">
                                                <h5>Total Events:</h5>
                                            <h2 class="mt-4 pt-1 mb-1">{{ $events->count() }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 mb-3 col-sm-12">
                                    <div class="card bg-light mb-0">
                                        <div class="card-body">
                                            <div class="py-2">
                                                <h5>Total Blogs:</h5>
                                            <h2 class="mt-4 pt-1 mb-1">{{ $blogs->count() }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 mb-3 col-sm-12">
                                    <div class="card bg-light mb-0">
                                        <div class="card-body">
                                            <div class="py-2">
                                                <h5>Total Professionals:</h5>
                                            <h2 class="mt-4 pt-1 mb-1">{{ $foodprofessionals->count() }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 mb-3 col-sm-12">
                                    <div class="card bg-light mb-0">
                                        <div class="card-body">
                                            <div class="py-2">
                                                <h5>Total Courses:</h5>
                                            <h2 class="mt-4 pt-1 mb-1">{{ $courses->count() }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 mb-3 col-sm-12">
                                    <div class="card bg-light mb-0">
                                        <div class="card-body">
                                            <div class="py-2">
                                                <h5>Total Community Members:</h5>
                                            <h2 class="mt-4 pt-1 mb-1">{{ $communityUsers->count() }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 mb-3 col-sm-12">
                                    <div class="card bg-light mb-0">
                                        <div class="card-body">
                                            <div class="py-2">
                                                <h5>FAQ:</h5>
                                            <h2 class="mt-4 pt-1 mb-1">{{ $faq->count() }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

   @include('custom.footer')
</div>
@endsection
