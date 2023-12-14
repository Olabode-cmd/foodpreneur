@extends('layouts.app')
@section('title', 'Add Professional')

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
                                    <h4 class="card-title mb-4">Add Professional</h4>
                                </div>
                            </div>
                            @include('custom.alert')
                            <form class="row" action="{{ route('admin.professionalsStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Name</label>
                                    <input id="name" class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Role</label>
                                    <input id="name" class="form-control" type="text" name="role">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="image"> User Image</label>
                                    <input id="image" class="form-control" type="file" name="image">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Location</label>
                                    <input id="name" class="form-control" type="text" name="location">
                                </div>
                                <hr>
                                <p class="fw-bold">Social Media Handles</p>
                                <div class="form-group col-md-4 col-sm-12 mb-3">
                                    <label for="name">X (Twitter)</label>
                                    <input id="name" class="form-control" type="text" name="twitter">
                                </div>
                                <div class="form-group col-md-4 col-sm-12 mb-3">
                                    <label for="name">Facebook</label>
                                    <input id="name" class="form-control" type="text" name="facebook">
                                </div>
                                <div class="form-group col-md-4 col-sm-12 mb-3">
                                    <label for="name">Linkedin</label>
                                    <input id="name" class="form-control" type="text" name="linkedin">
                                </div>

                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Description</label>
                                    <textarea name="description" id="editor" rows="5"></textarea>
                                </div>

                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Awards</label>
                                    <textarea name="awards" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Philanthropy </label>
                                    <textarea name="philanthropy" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group col-sm-12 mb-3">
                                    <label for="editor">Signature Style </label>
                                    <textarea name="signature" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="tag">Course Tag (use comma , for mutliple tags)</label>
                                    <input id="tag" class="form-control" type="text" name="tags">
                                </div>

                                <div class="form-group col-md-6 col-sm-12 mb-3">
                                    <label for="name">Featured Or Regular</label>
                                    <select class="form-select" name="is_featured">
                                        <option value="1">Featured</option>
                                        <option value="0">Regular</option>
                                    </select>
                                </div>
                                
                                <hr> 
                                <p class="fw-bold">Achievements</p>
                                <div class="form-group col-sm-12 mb-3 ">
                                    <div id="repeater-list">
                                        <div class="repeater-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3 me-3">
                                                        <label>Title</label>
                                                    <input type="text" class="form-control" name="achievement_title[]" placeholder="Enter Title">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3 me-3">
                                                        <label>Duration</label>
                                                        <input type="text" class="form-control" name="achievement_duration[]" placeholder="Jan 2012 - Dec 2012">
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="mb-3">
                                                        <label>Description</label>
                                                        <textarea class="form-control" rows="5" name="achievement_description[]" style="resize: none" placeholder="Enter achievement_"></textarea>
                                                </div>
                                                
                                                
                                            </div>
            
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="mb-3">
                                    <input type="button" id="addBtn" class="add-btn btn btn-success" value="Add More"/>
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
                        <label>Title</label>
                    <input type="text" class="form-control" name="achievement_title[]" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 me-3">
                        <label>Duration</label>
                        <input type="text" class="form-control" name="achievement_duration[]" placeholder="Jan 2012 - Dec 2012">
                    </div>
                </div>
                <div class="col-9">
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea class="form-control" rows="5" name="achievement_description[]" style="resize: none" placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="col-3 align-self-center">
                    <input type="button" class="delete-btn btn btn-danger" value="Delete"/>
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