@extends('layouts.app')
@section('title', 'Courses')

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
                                    <h4 class="card-title mb-4">Course List</h4>
                                </div>
                            </div>
                            @include('custom.alert')
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped dt-responsive  w-100">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Students</th>
                                        <th>Views</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($courses as $key => $course)
                                            <tr>
                                                <td>{{ $key +1 }}</td>
                                                <td>{{ $course->name }}</td>
                                                <td>{{ $course->category->name }}</td>
                                                <td>₦ {{ number_format($course->price,2) }}</td>
                                                <td>{{ $course->students }}</td>
                                                <td>{{ $course->views }}</td>
                                                <td>
                                                    <a href="{{ route('admin.coursesEdit',$course->id) }}" class="btn btn-primary btn-sm">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('admin.coursesDestroy', $course->id) }}" class="btn btn-danger btn-sm">Delete</a>
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


