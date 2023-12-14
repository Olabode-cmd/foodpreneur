@extends('layouts.app')
@section('title', 'Edit Food Process')

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
                                    <h4 class="card-title mb-4">Edit Food Process</h4>
                                </div>
                            </div>
                            @include('custom.alert')
                            <form class="row" action="{{ route('admin.processingUpdate', $foodprocessing->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{ $foodprocessing->id }}">
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Title</label>
                                    <input id="name" class="form-control" value="{{ $foodprocessing->title }}" type="text" name="title">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="category">Select Category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option disabled selected>Select Category</option>
                                        @foreach ($categories as $categories)
                                            <option @if ($foodprocessing->category == $categories->id) selected @endif value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Content</label>
                                    <textarea name="description" id="editor" rows="5">{!! $foodprocessing->description !!}</textarea>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="tag">Course Tag (use comma , for mutliple tags)</label>
                                    <input id="tag" value="@php $tags = json_decode($foodprocessing->tag);
                                    foreach ($tags as $tag) {
                                        echo $tag . ',';
                                    } @endphp" class="form-control" type="text" name="tags">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="image">Image</label>
                                    <input id="image" class="form-control" type="file" name="image">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="time">Author </label>
                                    <input value="{{ $foodprocessing->author }}" id="time" class="form-control" type="text" name="author">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="time">Author Role</label>
                                    <input value="{{ $foodprocessing->author_role }}"  id="time" class="form-control" type="text" name="author_role">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="rating">Author Image</label>
                                    <input  id="rating" class="form-control" type="file" name="author_image">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="views"> Views</label>
                                    <input  id="views" class="form-control" value="{{ $foodprocessing->views }}" type="number" name="views">
                                </div>

                                <div class="form-group col-sm-12 mb-3">
                                    <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
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
