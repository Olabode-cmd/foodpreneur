@extends('layouts.app')
@section('title', 'Create Course')

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
                                    <h4 class="card-title mb-4">Create Course</h4>
                                </div>
                            </div>
                            @include('custom.alert')
                            <form class="row" action="{{ route('admin.coursesStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Course Name</label>
                                    <input id="name" class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="category">Course Category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option disabled selected>Select Category</option>
                                        @foreach ($categories as $categories)
                                            <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">About this class</label>
                                    <textarea name="description" id="editor" rows="5"></textarea>
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Who should take this course?</label>
                                    <textarea name="course_reason" class="editor" rows="5"></textarea>
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Course duration</label>
                                    <textarea name="course_duration" class="form-control" rows="5"></textarea>
                                </div>

                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="tag">Course Tag (use comma , for mutliple tags)</label>
                                    <input id="tag" class="form-control" type="text" name="tags">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="price">Price</label>
                                    <input oninput="validateInput(this);" id="price" class="form-control" type="text" name="price">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="price">Slashed Price</label>
                                    <input oninput="validateInput(this);" id="price" class="form-control" type="text" name="slashed_price">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="image">Banner </label>
                                    <input id="image" class="form-control" type="file" name="image">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="students">Students</label>
                                    <input oninput="validateInput(this);" id="students" class="form-control" type="text" name="students">
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="rating">Rating</label>
                                    <input  id="rating" class="form-control" type="text" name="rating">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="url">Course Url</label>
                                    <input  id="url" class="form-control" type="text" name="url">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="url">Course Sections</label>
                                    <input  id="url" class="form-control" type="number" name="course_sections">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="url">Course Lectures</label>
                                    <input  id="url" class="form-control" type="number" name="course_lectures">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="url">Course Hours</label>
                                    <input  id="url" class="form-control" type="text" name="course_hours">
                                </div>
                                <hr class="m-4">
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="author">Author Name</label>
                                    <input  id="author" class="form-control" type="text" name="author">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="author">Author Role</label>
                                    <input  id="author" class="form-control" type="text" name="author_role">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="author">Author Image</label>
                                    <input  id="author" class="form-control" type="file" name="author_image">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="author">Author Description</label>
                                    <textarea name="author_description" class="form-control" rows="5"></textarea>
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