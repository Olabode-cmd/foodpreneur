@extends('layouts.app')
@section('title', 'Events')

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
                                    <h4 class="card-title mb-4">Events List</h4>
                                </div>
                            </div>
                            @include('custom.alert')
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped dt-responsive  w-100">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Attendees</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($events as $key => $event)
                                            <tr>
                                                <td>{{ $key +1 }}</td>
                                                <td>{{ $event->title }}</td>
                                                <td>{{ $event->categories->name }}</td>
                                                <td>
                                                    {{ number_format($event->attendees->count()) }}
                                                    <a href="{{ route('admin.eventsAttendees',$event->id) }}" class="btn btn-primary btn-sm">
                                                        View All
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.eventsEdit',$event->id) }}" class="btn btn-primary btn-sm">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('admin.eventsDestroy', $event->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
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


