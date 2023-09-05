var toolbarOptions = [{size: ['small', false, 'large', 'huge']}, 'bold', 'italic', 'underline', 'strike',{ 'color': [] }, { 'background': [] }, {'list': 'ordered'}, {'list': 'bullet'}, 'clean'];
var options = {
    modules: {
        toolbar: toolbarOptions,
        history: {
            delay: 1000,
            maxStack: 200,
            userOnly: true
        }
    },
    placeholder: 'Compose content',
    theme: 'snow'
};
var editorEnglish = new Quill('#editorEnglish', options);
var editorTelugu = new Quill('#editorTelugu', options);

function createCurrentAffairs() {
    $('#uploadForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('editorContent', editor.root.innerHTML);
        data.append('url', 'createcurrentaffairs');
        $.ajax ({
            url: "./route.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#outputImage').hide();
                if ($("#uploadFile").val() === "") {
                    $("#outputImage").show();
                    $("#outputImage").html("<div class='text-danger'>Choose a file to upload.</div>");
                    return false;
                }
            },
            success: function ( response ) {
                console.log(response);
                alert(response.message);
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, please check your internet connection");
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function createJobNews() {
    $('#uploadForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('editorContent', editor.root.innerHTML);
        data.append('url', 'createjobnews');
        $.ajax ({
            url: "./route.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#outputImage').hide();
                if ($("#uploadFile").val() === "") {
                    $("#outputImage").show();
                    $("#outputImage").html("<div class='text-danger'>Choose a file to upload.</div>");
                    return false;
                }
            },
            success: function ( response ) {
                console.log(response);
                alert(response.message);
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, please check your internet connection");
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function deleteCurrentAffair(img, id) {
    $.ajax({
        url: './deletecurrentaffair.php',
        type: 'post',
        data: {img:img, deletefile:id},
        success: function (result) {
            if (result === 'success') {
                alert("File deleted Successfully");
                setTimeout(function () {
                    location.reload();
                }, 200);
            }
            else {
                alert("Failed to delete the post");
            }
        },
        error: function (result) {
            alert("Failed due to " + result);
        }
    });
}

function deleteJobNews(img, id) {
    $.ajax({
        url: './deletejobnews.php',
        type: 'post',
        data: {img:img, deletefile:id},
        success: function (result) {
            if (result === 'success') {
                alert("File deleted Successfully");
                setTimeout(function () {
                    location.reload();
                }, 200);
            }
            else {
                alert("Failed to delete the post");
            }
        },
        error: function (result) {
            alert("Failed due to " + result);
        }
    });
}
