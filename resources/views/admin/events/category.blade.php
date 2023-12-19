@extends('layouts.app')
@section('title', 'Events Categories')

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
                                    <a href="#" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#add-event-category">
                                        Add Event Category
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
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($events as $key => $event)
                                            <tr>
                                                <td>{{ $key +1 }}</td>
                                                <td>{{ $event->name }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm edit-event-category ml-3" data-categoryid="{{ $event->id }}">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('admin.eventsCategoryDestroy', $event->id) }}" class="btn btn-danger btn-sm">Delete</a>
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

<div id="add-event-category" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <form action="{{ route('admin.eventsCategoryStore') }}" method="POST" id="add-course-category-form">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add Event</h5>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="my-input">Event Category</label>
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

<div id="edit-event-category" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <form  method="POST" id="edit-event-category-form">
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
                        <label for="my-input">Event Category</label>
                        <input id="my-input" class="form-control" type="text" name="name">
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