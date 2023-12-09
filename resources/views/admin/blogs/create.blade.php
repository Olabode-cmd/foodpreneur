@extends('layouts.app')
@section('title', 'Create Blog')

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
                                    <h4 class="card-title mb-4">Create Blog</h4>
                                </div>
                            </div>
                            @include('custom.alert')
                            <form class="row" action="{{ route('admin.blogsStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Title</label>
                                    <input id="name" class="form-control" type="text" name="title">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="category">Select Category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option disabled selected>Select Category</option>
                                        @foreach ($categories as $categories)
                                            <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Content</label>
                                    <textarea name="description" id="editor" rows="5"></textarea>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="tag">Course Tag (use comma , for mutliple tags)</label>
                                    <input id="tag" class="form-control" type="text" name="tags">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="image">Image</label>
                                    <input id="image" class="form-control" type="file" name="image">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="time">Author </label>
                                    <input  id="time" class="form-control" type="text" name="author">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="time">Author Role</label>
                                    <input  id="time" class="form-control" type="text" name="author_role">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="rating">Author Image</label>
                                    <input  id="rating" class="form-control" type="file" name="author_image">
                                </div>

                                <div class="form-group col-sm-12 mb-3">
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                </div>

                            </form> 
                        </div>

                    </div>
                </div>
            </div>

        </div>
        
    </div>

    @include('custom.footer')
</div>
@endsection

<script>
     function validateInput(input) {
    // Remove any non-numeric characters and any multiple decimal points
        input.value = input.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');
    }
</script>