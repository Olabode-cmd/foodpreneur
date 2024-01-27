@extends('layouts.app')
@section('title', 'Subscriber List')

@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-6">
                                    <h4 class="card-title mb-4">Subscriber List</h4>
                                </div>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#newsletter" role="tab" aria-selected="true">
                                        Newsletter Subscriber
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#ebook" role="tab" aria-selected="false" tabindex="-1">
                                        EBook Subscribers
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#community" role="tab" aria-selected="false" tabindex="-1">
                                        Community Subscriber
                                    </a>
                                </li>
                            </ul>
                            @include('custom.alert')
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="newsletter" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table datatable table-striped dt-responsive  w-100">
                                            <thead>
                                                <tr>
                                                    <td>#</td>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($subscribers as $key => $subscriber)
                                                    <tr>
                                                        <td>{{ $key +1 }}</td>
                                                        <td>{{ $subscriber->email }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ebook" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table datatable table-striped dt-responsive  w-100">
                                            <thead>
                                                <tr>
                                                    <td>#</td>
                                                    <th>Email</th>
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ebooksubscribers as $keys => $ebook)
                                                    <tr>
                                                        <td>{{ $keys +1 }}</td>
                                                        <td>{{ $ebook->email }}</td>
                                                        <td>{{ $ebook->name }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="community" role="tabpanel">
                                    <div class="table-responsive">
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <td>#</td>
                                                    <th>Email</th>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Work</th>
                                                    <th>Country</th>
                                                    <th>City</th>
                                                    <th>Business Website URL</th>
                                                    <th>Personal Website URL</th>
                                                    <th>IG HANDLE</th>
                                                    <th>LINKEDIN HANDLE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($communities as $key2 => $community)
                                                    <tr>
                                                        <td>{{ $key2 +1 }}</td>
                                                        <td>{{ $community->email }}</td>
                                                        <td>{{ $community->firstname }}</td>
                                                        <td>{{ $community->lastname }}</td>
                                                        <td>{{ $community->work }}</td>
                                                        <td>{{ $community->country }}</td>
                                                        <td>{{ $community->city }}</td>
                                                        <td>{{ $community->business }}</td>
                                                        <td>{{ $community->personal }}</td>
                                                        <td>{{ $community->ig }}</td>
                                                        <td>{{ $community->linked }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          
                            <!-- end table-responsive -->
                        </div>

                    </div>
                </div>
            </div>

        </div>
        
    </div>

    @include('custom.footer')
</div>
@endsection

