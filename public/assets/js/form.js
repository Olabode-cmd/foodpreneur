$(document).ready(function() {

    $("#selected-img").hide();

    $('.edit-course-category').click(function () {
        
        var categoryid = $(this).data('categoryid');
        var url = '/admin/courses_categories/' + categoryid;
        console.log(categoryid);
        $.ajax({
            method: "GET",
            url: url,
            dataType: "json",
            success: function(data) {
                $('#edit-course-category').modal('show');
                $("#edit-course-category-form").attr("action", "/admin/courses_categories/" + data.id);
                $("#edit-course-category-form input[name='wallet_address']").val(data.wallet_address);
                $("#edit-course-category-form input[name='id']").val(data.id);
                $("#edit-course-category-form input[name='name']").val(data.name);
                $("#edit-course-category-form select[name='status']").val(data.status);
            }
        });
    });


});


function displaySelectedImage() {
    // Get the selected file input element

    var fileInput = document.getElementById('selectedimage');
   

    // Get the selected file
    var selectedFile = fileInput.files[0];

    // Get the img element
    var imgElement = document.getElementById('selected-img');
    imgElement.style.display = "block";

    // Create a FileReader to read the selected file
    var reader = new FileReader();

    // Define a function to run when the FileReader has successfully loaded the image
    reader.onload = function(e) {
        // Set the src attribute of the img element to the data URL of the selected image
        imgElement.src = e.target.result;
    };

    // Read the selected file as a data URL (this will trigger the onload function)
    reader.readAsDataURL(selectedFile);
}

function displayBannerImage(){
    // Get the selected file input element
    var fileInput = document.getElementById('bannerimage');

    // Get the selected file 
    var selectedFile = fileInput.files[0];

    // Get the img element
    var imgElement = document.getElementById('banner-img');

    // Create a FileReader to read the selected file
    var reader = new FileReader();

    // Define a function to run when the FileReader has successfully loaded the image
    reader.onload = function(e) {
        // Set the src attribute of the img element to the data URL of the selected image
        imgElement.src = e.target.result;
    };

    // Read the selected file as a data URL (this will trigger the onload function)
    reader.readAsDataURL(selectedFile);
}

ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
            console.log( editor );
    } )