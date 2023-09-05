function addCrop() {
    $('#cropForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'crop');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Crop Added Successfully');
                } else {
                    alert('Failed to add the crop');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function addMarketPrice() {
    $('#cropForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'market');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Market Price Added Successfully');
                } else {
                    alert('Failed to add the market price');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function addSeeds() {
    $('#seedForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'seed');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Seeds Added Successfully');
                } else {
                    alert('Failed to add the seeds');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function addPesticides() {
    $('#pesticideForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'pesticide');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Pesticides Added Successfully');
                } else {
                    alert('Failed to add the pesticides');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function addFertilizers() {
    $('#fertilizerForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'fertilizer');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Fertilizer Added Successfully');
                } else {
                    alert('Failed to add the fertilizers');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function addSoilFertility() {
    $('#soilfertilityForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'soilfertility');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Soil Fertility Added Successfully');
                } else {
                    alert('Failed to add the soil fertility');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function addArea() {
    $('#areaForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'area');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Areas Added Successfully');
                } else {
                    alert('Failed to add the areas');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function addWeather() {
    $('#weatherForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'weather');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Weather details added Successfully');
                } else {
                    alert('Failed to add the weather details');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function addSchemes() {
    $('#govtForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'scheme');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Scheme added Successfully');
                } else {
                    alert('Failed to add the scheme');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function addFunds() {
    $('#govtForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'fund');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Fund added Successfully');
                } else {
                    alert('Failed to add the fund');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function addLoans() {
    $('#govtForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'loan');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Loan added Successfully');
                } else {
                    alert('Failed to add the loan');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}

function addEquipment() {
    $('#equipmentForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        data.append('comments_en', editorEnglish.root.innerHTML);
        data.append('comments_te', editorTelugu.root.innerHTML);
        data.append('url', 'equipment');
        $.ajax ({
            url: "./core/apipost.php",
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function ( response ) {
                console.log(response);
                if (response == 'true') {
                    alert('Equipment added Successfully');
                } else {
                    alert('Failed to add the equipment');
                }
                setTimeout(function () {
                    location.reload();
                }, 500);
            },
            error: function ( response ) {
                alert("Failed to send the request, " + response);
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
    });
}
