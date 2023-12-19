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
                $("#edit-course-category-form input[name='id']").val(data.id);
                $("#edit-course-category-form input[name='name']").val(data.name);
                $("#edit-course-category-form select[name='status']").val(data.status);
            }
        });
    });

    $('.edit-blog-category').click(function () {
        var categoryid = $(this).data('categoryid');
        var url = '/admin/blogs_categories/' + categoryid;
        console.log(categoryid);
        $.ajax({
            method: "GET",
            url: url,
            dataType: "json",
            success: function(data) {
                $('#edit-blog-category').modal('show');
                $("#edit-blog-category-form").attr("action", "/admin/blogs_categories/" + data.id);
                $("#edit-blog-category-form input[name='id']").val(data.id);
                $("#edit-blog-category-form input[name='name']").val(data.name);
                $("#edit-blog-category-form select[name='status']").val(data.status);
            }
        });
    });

    $('.edit-faq').click(function () {
        var faqid = $(this).data('faqid');
        var url = '/admin/pages/faqs/edit/' + faqid;
        console.log(faqid);
        $.ajax({
            method: "GET",
            url: url,
            dataType: "json",
            success: function(data) {
                $('#edit-faq').modal('show');
                $("#edit-faq-form").attr("action", "/admin/pages/faqs/" + data.id);
                $("#edit-faq-form input[name='id']").val(data.id);
                $("#edit-faq-form input[name='question']").val(data.question); 
                $("#edit-faq-form input[name='order']").val(data.order); 
                $("#edit-faq-form textarea[name='answer']").val(data.answer); 
            }
        });
    });

    $('.edit-story').click(function () {
        var storyid = $(this).data('storyid');
        var url = '/admin/pages/success-stories/edit/' + storyid;
        console.log(storyid);
        $.ajax({
            method: "GET",
            url: url,
            dataType: "json",
            success: function(data) {
                $('#edit-success-stories').modal('show');
                $("#edit-success-stories-form").attr("action", "/admin/pages/success-stories/" + data.id);
                $("#edit-success-stories input[name='id']").val(data.id);
                $("#edit-success-stories input[name='name']").val(data.name); 
                $("#edit-success-stories input[name='role']").val(data.role); 
                $("#edit-success-stories textarea[name='description']").val(data.description); 
            }
        });
    });

    $('.edit-testimonial').click(function () {
        var testimonialid = $(this).data('testimonialid');
        var url = '/admin/pages/testimonials/edit/' + testimonialid;
        console.log(testimonialid);
        $.ajax({
            method: "GET",
            url: url,
            dataType: "json",
            success: function(data) {
                $('#edit-testimonial').modal('show');
                $("#edit-testimonial-form").attr("action", "/admin/pages/testimonials/" + data.id);
                $("#edit-testimonial input[name='id']").val(data.id);
                $("#edit-testimonial input[name='name']").val(data.name); 
                $("#edit-testimonial input[name='location']").val(data.location); 
                $("#edit-testimonial input[name='rating']").val(data.rating); 
                $("#edit-testimonial textarea[name='description']").val(data.description); 
            }
        });
    });

    $('.edit-food-category').click(function () {
        var categoryid = $(this).data('categoryid');
        var url = '/admin/food/processing/categories/' + categoryid;
        console.log(categoryid);
        $.ajax({
            method: "GET",
            url: url,
            dataType: "json",
            success: function(data) {
                $('#edit-food-category').modal('show');
                $("#edit-food-category-form").attr("action", "/admin/food/processing/categories/" + data.id);
                $("#edit-food-category-form input[name='id']").val(data.id);
                $("#edit-food-category-form input[name='name']").val(data.name);
            }
        });
    });

    $('.edit-event-category').click(function () {
        var categoryid = $(this).data('categoryid');
        var url = '/admin/events_categories/' + categoryid;
        console.log(categoryid);
        $.ajax({
            method: "GET",
            url: url,
            dataType: "json",
            success: function(data) {
                $('#edit-event-category').modal('show');
                $("#edit-event-category-form").attr("action", "/admin/events_categories/" + data.id);
                $("#edit-event-category-form input[name='id']").val(data.id);
                $("#edit-event-category-form input[name='name']").val(data.name);
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