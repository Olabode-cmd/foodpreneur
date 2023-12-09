@extends('layouts.app')
@section('title', 'Blogs Categories')

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
                                    <h4 class="card-title mb-4">Categories</h4>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#add-course-category">
                                        Add Blog Category
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
                                        <th>Status</th> 
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($blogs as $key => $blog)
                                            <tr>
                                                <td>{{ $key +1 }}</td>
                                                <td>{{ $blog->name }}</td>
                                                <td>{{ $blog->status }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm edit-blog-category ml-3" data-categoryid="{{ $blog->id }}">
                                                        Edit
                                                    </a>
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

<div id="add-course-category" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <form action="{{ route('admin.coursesCategoryStore') }}" method="POST" id="add-course-category-form">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add Course</h5>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="my-input">Course Category</label>
                        <input id="my-input" class="form-control" type="text" name="name">
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

<div id="edit-blog-category" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <form  method="POST" id="edit-blog-category-form">
                @csrf
                @method('PATCH')
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Update Category</h5>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="my-input">Course Category</label>
                        <input id="my-input" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Status</label>
                        <select name="status" id="" class="form-control">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
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