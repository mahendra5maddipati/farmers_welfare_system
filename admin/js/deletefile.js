function deleteFile(type, id) {
    $.ajax({
        url: './deletefile.php',
        type: 'post',
        data: {type: type, deletefile:id},
        success: function (result) {
            if (result === 'success') {
                alert("File deleted Successfully");
                setTimeout(function () {
                    location.reload();
                }, 200);
            }
            else {
                alert("Failed to delete the file");
            }
        },
        error: function (result) {
            alert("Failed due to " + result);
        }
    });
}