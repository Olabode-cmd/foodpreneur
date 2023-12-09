@extends('layouts.app')
@section('title', 'Testimonials')

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
                                    <h4 class="card-title mb-4">Testimonials</h4>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#add-testimonial">
                                        Add Testimonials
                                    </a>
                                </div>
                            </div>
                            @include('custom.alert')
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped dt-responsive  w-100">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <th>Name</th>
                                        <th>Location</th> 
                                        <th>Rating</th> 
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($testimonials as $key => $testimonial)
                                            <tr>
                                                <td>{{ $key +1 }}</td>
                                                <td>{{ $testimonial->name }}</td>
                                                <td>{{ $testimonial->location }}</td>
                                                <td>{{ $testimonial->rating }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm edit-testimonial ml-3" data-testimonialid="{{ $testimonial->id }}">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('admin.testimonialDestroy', $testimonial->id) }}" class="btn btn-danger btn-sm">Delete</a>
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

<div id="add-testimonial" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
           <form action="{{ route('admin.testimonialStore') }}"  enctype="multipart/form-data" method="POST" id="add-course-category-form">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add Testimonial</h5>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-4">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group mb-4">
                        <label for="location">Location</label>
                        <input type="text" name="location" id="location"  class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image"  class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" style="resize:none" id="description" cols="30" rows="4"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="Rating">Rating</label>
                        <input id="Rating" class="form-control" type="text" name="rating">
                    </div>
                    
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save </button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="edit-testimonial" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <form  method="POST" id="edit-testimonial-form" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Update Testimonial</h5>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-4">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group mb-4">
                        <label for="location">Location</label>
                        <input type="text" name="location" id="location"  class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image"  class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" style="resize:none" id="description" cols="30" rows="4"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="Rating">Rating</label>
                        <input id="Rating" class="form-control" type="text" name="rating">
                    </div>
                    <input type="hidden" name="id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>