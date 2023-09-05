// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';


$.ajax({
    url: "./route.php",
    data: {url: 'getpie'},
    success: function (result) {
        drewPieChart(result);
    },
    error: function (error) {
        console.log(error);
    }
});

// Pie Chart Example
function drewPieChart(pieData) {
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Manual", "Google", "Facebook"],
            datasets: [{
                data: pieData,
                backgroundColor: ['#ffc107', '#dc3545', '#007bff'],
            }],
        },
    });
}
