$(document).ready(function () {
    $('#progressbar').css('display', 'none');
    $('#submitButton').click(function () {
        $('#uploadForm').ajaxForm({
            target: '#outputImage',
            url: './uploadfile.php',
            beforeSubmit: function () {
                $('#outputImage').hide();
                if ($("#uploadFile").val() === "") {
                    $("#outputImage").show();
                    $("#outputImage").html("<div class='text-danger'>Choose a file to upload.</div>");
                    return false;
                }
                $('#progressbar').css('display', 'block');
                var percentValue = '0%';

                $('#progressBar').width(percentValue);
            },
            uploadProgress: function (event, position, total, percentComplete) {
                var percentValue = percentComplete + '%';
                $("#outputImage").show();
                $("#outputImage").html(percentValue);
                $("#progressBar").animate({
                    width: '' + percentValue + ''
                }, 0, "linear");
            },
            error: function (response, status, e) {
                alert('Oops something went.');
            },
            complete: function (xhr) {
                if (xhr.responseText && xhr.responseText !== "error") {
                    $("#outputImage").show();
                    $("#outputImage").html("<div class='text-success'>File Uploaded Successfully</div>");
                    alert('File Uploaded Successfully');
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                }
                else {
                    console.log(xhr.responseText);
                    $("#outputImage").show();
                    $("#outputImage").html("<div class='text-danger'>Problem in uploading file.</div>");
                    $("#progressBar").stop();
                }
            }
        });
    });
});