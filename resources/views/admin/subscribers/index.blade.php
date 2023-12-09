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
                                                    @if ($subscriber->type =='newsletter')
                                                        <tr>
                                                            <td>{{ $key +1 }}</td>
                                                            <td>{{ $subscriber->email }}</td>
                                                        </tr>
                                                    @endif
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
                                                @foreach ($subscribers as $keys => $subscriber)
                                                    @if ($subscriber->type =='ebook')
                                                        <tr>
                                                            <td>{{ $keys +1 }}</td>
                                                            <td>{{ $subscriber->email }}</td>
                                                            <td>{{ $subscriber->name }}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="community" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table datatable table-striped dt-responsive  w-100">
                                            <thead>
                                                <tr>
                                                    <td>#</td>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($subscribers as $key2 => $subscriber)
                                                @if ($subscriber->type =='community')
                                                    <tr>
                                                        <td>{{ $key2 +1 }}</td>
                                                        <td>{{ $subscriber->email }}</td>
                                                    </tr>
                                                @endif
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

<div id="add-course-category" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <form action="{{ route('admin.blogsCategoryStore') }}" method="POST" id="add-course-category-form">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add Blog</h5>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="my-input">Blog Category</label>
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