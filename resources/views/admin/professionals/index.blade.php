@extends('layouts.app')
@section('title', 'Professionals')

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
                                    <h4 class="card-title mb-4">Professional List</h4>
                                </div>
                            </div>
                            @include('custom.alert')
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped dt-responsive  w-100">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Location</th>
                                        <th>Views</th>
                                        <th>Featured</th>
                                        <th>Entrepeneur of the day</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($professionals as $key => $professional)
                                            <tr>
                                                <td>{{ $key +1 }}</td>
                                                <td>{{ $professional->name }}</td>
                                                <td>{{ $professional->role }}</td>
                                                <td>{{ $professional->location }}</td>
                                                <td>{{ $professional->views }}</td>
                                                <td>
                                                    @if ($professional->is_featured)
                                                        <span class="badge badge-soft-success">Featured</span>
                                                    @else
                                                        <span class="badge badge-soft-danger">Regular</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($professional->is_entrepreneur)
                                                        <span class="badge badge-soft-success">Yes</span>
                                                    @else
                                                        <span class="badge badge-soft-danger">No</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.professionalsEdit',$professional->id) }}" class="btn btn-primary btn-sm">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('admin.professionalsDestroy', $professional->id) }}" class="btn btn-danger btn-sm">Delete</a>
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


