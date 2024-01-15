@extends('layouts.app')
@section('title', 'Edit Course')

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
                                    <h4 class="card-title mb-4">Edit Course</h4>
                                </div>
                            </div>
                            @include('custom.alert')
                            <form class="row" action="{{ route('admin.coursesUpdate', $course->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{ $course->id }}">
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Course Name</label>
                                    <input id="name" class="form-control" value="{{ $course->name }}" type="text" name="name">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="category">Course Category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option disabled selected>Select Category</option>
                                        @foreach ($categories as $categories)
                                            <option @if ($course->category_id == $categories->id) selected @endif value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">About this class</label>
                                    <textarea name="description" id="editor" rows="5">{!! $course->description !!}</textarea>
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Who should take this course?</label>
                                    <textarea name="course_reason" class="editor" rows="5">{!! $course->reason !!}</textarea>
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Course duration</label>
                                    <textarea name="course_duration" class="form-control" rows="5">{{ $course->duration }}</textarea>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="tag">Course Tag (use comma , for mutliple tags)</label>
                                    <input id="tag" value="{{ implode(',', array_filter(json_decode($course->tag), 'strlen')) }}p" class="form-control" type="text" name="tags">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="price">Price</label>
                                    <input oninput="validateInput(this);" value="{{ $course->price }}" id="price" class="form-control" type="text" name="price">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="slashedprice">Slashed price</label>
                                    <input oninput="validateInput(this);" value="{{ $course->slashed_price }}" id="slashedprice" class="form-control" type="text" name="slashed_price">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="image">Banner</label>
                                    <input id="image" class="form-control" type="file" name="image">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="students">Students</label>
                                    <input oninput="validateInput(this);" id="students" class="form-control" value="{{ $course->students }}" type="text" name="students">
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="rating">Rating</label>
                                    <input  id="rating" value="{{ $course->rating }}" class="form-control" type="text" name="rating">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="url">Course Url</label>
                                    <input value="{{ $course->url }}" id="url" class="form-control" type="url" name="url">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="url">Course Sections</label>
                                    <input  id="url" value="{{ $course->course_sections }}" class="form-control" type="number" name="course_sections">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="url">Course Lectures</label>
                                    <input  id="url" value="{{ $course->course_lectures }}" class="form-control" type="number" name="course_lectures">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="url">Course Hours</label>
                                    <input  id="url" value="{{ $course->course_hours }}" class="form-control" type="text" name="course_hours">
                                </div>
                                <hr class="m-4">
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="author">Author Name</label>
                                    <input id="author" value="{{ $course->author_name }}" class="form-control" type="text" name="author">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="author">Author Role</label>
                                    <input  id="author" value="{{ $course->author_role }}" class="form-control" type="text" name="author_role">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="author">Author Image</label>
                                    <input  id="author" class="form-control" type="file" name="author_image">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="author">Author Description</label>
                                    <textarea name="author_description" class="form-control" rows="5">{{ $course->author_description }}</textarea>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="views">Course Views</label>
                                    <input  id="views" class="form-control" value="{{ $course->views }}" type="number" name="views">
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