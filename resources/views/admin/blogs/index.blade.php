@extends('layouts.app')
@section('title', 'Blogs')

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
                                    <h4 class="card-title mb-4">Blog List</h4>
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
                                        <th>Views</th>
                                        <th>Trending</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($blogs as $key => $blog)
                                            <tr>
                                                <td>{{ $key +1 }}</td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->category->name }}</td>
                                                <td>{{ $blog->views }}</td>
                                                <td>@if ($blog->is_trending == 1)
                                                    <span class="badge bg-success">Yes</span>
                                                @else
                                                    <span class="badge bg-danger">No</span>
                                                    
                                                @endif</td>
                                                <td>
                                                    <a href="{{ route('admin.blogsEdit',$blog->id) }}" class="btn btn-primary btn-sm">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('admin.blogsDestroy', $blog->id) }}" class="btn btn-danger btn-sm">Delete</a>
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


