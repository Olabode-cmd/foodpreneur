@extends('layouts.app')
@section('title', 'Events Attendees')

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
                                    <h4 class="card-title mb-4">{{ $event->title }} - Attendance</h4>
                                </div>
                            </div>
                            @include('custom.alert')
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>About</th>
                                        <th>Date Registered</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($event->attendees as $key => $attendance)
                                            <tr>
                                                <td>{{ $key +1 }}</td>
                                                <td>{{ $attendance->firstname }} {{ $attendance->lastname }}</td>
                                                <td>{{ $attendance->email }}</td>
                                                <td>{{ $attendance->phone }}</td>
                                                <td>{{ $attendance->about }}</td>
                                                <td>{{ $attendance->created_at->format('Y-m-d') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
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


