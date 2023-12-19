@extends('layouts.app')
@section('title', 'Create Event')

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
                                    <h4 class="card-title mb-4">Create Event</h4>
                                </div>
                            </div>
                            @include('custom.alert')
                            <form class="row" action="{{ route('admin.eventsStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Title</label>
                                    <input id="name" class="form-control" type="text" name="title">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="image">Event Banner</label>
                                    <input id="image" class="form-control" type="file" name="image">
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
                                
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Event Date(s)</label>
                                    <input id="name" class="form-control" type="text" name="date">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Event Location</label>
                                    <input id="name" class="form-control" type="text" name="location">
                                </div>

                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Event City</label>
                                    <input id="name" class="form-control" type="text" name="city">
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Content</label>
                                    <textarea name="description" id="editor" rows="5"></textarea>
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Schedule</label>
                                    <textarea name="schedule" class="editor" rows="5"></textarea>
                                </div>
                                <hr>
                                <p class="fw-bold">
                                    Speakers
                                </p>
                                <div class="form-group col-sm-12 mb-3 ">
                                    <div id="repeater-list">
                                        <div class="repeater-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3 me-3">
                                                        <label>Avatar</label>
                                                        <input type="file" class="form-control" name="speakers_avatar[]">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3 me-3">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="speakers_name[]" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3 me-3">
                                                        <label>Company</label>
                                                        <input type="text" class="form-control" name="speakers_company[]" placeholder="Company">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3 me-3">
                                                        <label>Role</label>
                                                        <input type="text" class="form-control" name="speakers_role[]" placeholder="Enter Role">
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="mb-3">
                                    <input type="button" id="addBtn" class="add-btn btn btn-success" value="Add Speaker"/>
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
    document.addEventListener("DOMContentLoaded", function() {
    
    const addBtn = document.getElementById('addBtn');
    const repeaterList = document.getElementById('repeater-list');

    addBtn.addEventListener('click', function() {
        const template = document.querySelector('.repeater-item');
        const newItem = template.cloneNode(true);
        newItem.classList.add('repeater-item');

        // Removing the existing content
        newItem.innerHTML = `
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 me-3">
                        <label>Avatar</label>
                        <input type="file" class="form-control" name="speakers_avatar[]">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 me-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="speakers_name[]" placeholder="Name">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 me-3">
                        <label>Company</label>
                        <input type="text" class="form-control" name="speakers_company[]" placeholder="Company">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 me-3">
                        <label>Role</label>
                        <input type="text" class="form-control" name="speakers_role[]" placeholder="Enter Role">
                    </div>
                </div>
            </div>
        `;

        repeaterList.appendChild(newItem);

        const deleteBtns = newItem.querySelectorAll('.delete-btn');
        deleteBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                this.closest('.repeater-item').remove();
            });
        });
    });

     

});

</script>