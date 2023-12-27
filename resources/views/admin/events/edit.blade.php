@extends('layouts.app')
@section('title', 'Update Event')

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
                                    <h4 class="card-title mb-4">Update Event</h4>
                                </div>
                            </div>
                            @include('custom.alert')
                            <form class="row" action="{{ route('admin.eventsUpdate', $event->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Title</label>
                                    <input id="name" class="form-control" value="{{ $event->title }}" type="text" name="title">
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
                                            <option @if ($event->category_id == $categories->id) selected @endif value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Event Date(s)</label>
                                    <input id="name" class="form-control" type="text" value="{{ $event->date }}"  name="date">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Event Location</label>
                                    <input id="name" class="form-control" type="text" value="{{ $event->location }}"  name="location">
                                </div>

                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Event City</label>
                                    <input id="name" class="form-control" value="{{ $event->city }}"  type="text" name="city">
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Content</label>
                                    <textarea name="description" id="editor" rows="5">{!! $event->description !!}</textarea>
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Schedule</label>
                                    <textarea name="schedule" class="editor" rows="5">{!! $event->schedule !!}</textarea>
                                </div>
                                <hr>
                                <p class="fw-bold">
                                    Speakers
                                </p>
                                <div class="form-group col-sm-12 mb-3 ">
                                    <div id="repeater-parent">
                                        <div id="repeater-list">
                                            @foreach (json_decode($event->speakers) as $key => $speakers)
                                            <div class="repeater-item">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="mb-3 me-3">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" value="{{ $speakers->speakers_name }}" name="speakers_name[]" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mb-3 me-3">
                                                            <label>Avatar</label>
                                                            <input type="file" class="form-control" name="speakers_avatar[]">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="speakers_id[]" value="{{ $speakers->speakers_id }}">
                                                    <div class="col-4">
                                                        <div class="mb-3 me-3">
                                                            <img src="{{ asset('storage/'.$speakers->speakers_avatar) }}"  height="100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mb-3 me-3">
                                                            <label>Company</label>
                                                            <input type="text" class="form-control" value="{{ $speakers->speakers_company }}"  name="speakers_company[]" placeholder="Company">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mb-3 me-3">
                                                            <label>Role</label>
                                                            <input type="text" class="form-control" value="{{ $speakers->speakers_role }}"  name="speakers_role[]" placeholder="Enter Role">
                                                        </div>
                                                    </div>
                                                    <div class="col-4 align-self-center">
                                                        <input type="button" class="delete-btn btn btn-danger" value="Delete"/>
                                                    </div>
                                                </div>
                
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="mb-3">
                                    <input type="button" id="addBtn" class="add-btn btn btn-success" value="Add More Speaker"/>
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
        const repeaterParent = document.getElementById('repeater-parent');

        addBtn.addEventListener('click', function() {
            // Check if the template element exists
            const template = document.querySelector('.repeater-item');

            const newItem = document.createElement('div');
            newItem.classList.add('repeater-item');
            newItem.innerHTML = `
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3 me-3">
                            <label>Name</label>
                            <input type="text" class="form-control"  name="speakers_name[]" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3 me-3">
                            <label>Avatar</label>
                            <input type="file" class="form-control" name="speakers_avatar[]">
                        </div>
                    </div> 
                    <div class="col-4">
                        <div class="mb-3 me-3">
                            <label>Company</label>
                            <input type="text" class="form-control" name="speakers_company[]" placeholder="Company">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3 me-3">
                            <label>Role</label>
                            <input type="text" class="form-control" name="speakers_role[]" placeholder="Enter Role">
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <input type="button" class="delete-btn btn btn-danger" value="Delete"/>
                    </div>
                </div>
            `;

            repeaterParent.appendChild(newItem);

            // Add event listeners to delete buttons for the newly added item
            addDeleteButtonListeners(newItem);
        });


        // Function to add event listeners to delete buttons
        function addDeleteButtonListeners(item) {
            const deleteBtns = item.querySelectorAll('.delete-btn');
            deleteBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    this.closest('.repeater-item').remove();
                });
            });
        }

        // Initial event listeners for delete buttons
        repeaterList.querySelectorAll('.repeater-item').forEach(addDeleteButtonListeners);
            

    });

</script>