$(document).ready( function(){
    $('.dash').click(function(keyframes, options) {
        var toggleWidth = $("#mySidenav").width() == 0 ? "250px" : "0px";
        $('#mySidenav').animate({width: toggleWidth}, 500, );
        var $lwidth = $('#mySidenav');
        var width = $lwidth.css('width');

    });
    $('.dash-fw').click(function() {
        var clicks = $(this).data('clicks');
        if (clicks) {
            document.getElementById("auto-dash").style.paddingLeft = "280px";
            document.getElementById("auto-dash").style.transition = "all 1s ease-in-out";
        } else {
            document.getElementById("auto-dash").style.paddingLeft = "30px";
            document.getElementById("auto-dash").style.transition = "all 1s ease-in-out";
        }
        $(this).data("clicks", !clicks);
    });

    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Ponedeljek", "Torek", "Sreda", "Četrtek", "Petek", "Sobota", "Nedelja"],
            datasets: [{
                label: 'Opravila',
                data: [6, 9, 4, 5, 8, 7, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(64, 178, 113, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(64, 178, 113, 1)'
                ],
                borderWidth: 1
            }]
        },
        maintainAspectRatio: false,
        options:  {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [
                    {
                        ticks: {
                            min: 0, // it is for ignoring negative step.
                            beginAtZero: true,
                            stepSize: 1  // if i use this it always set it '1', which look very awkward if it have high value  e.g. '100'.
                        }
                    }
                ]
            }
        }
    });


    var ctx = document.getElementById("myChartDonut").getContext('2d');
    var myChartDonut = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Vlado", "Janja", "Mario", "Julijan"],
            datasets: [{
                label: 'Task',
                data: [67, 94, 46, 51],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
            }]
        },
        maintainAspectRatio: false,
        options:  {
            responsive: true,
            legend: {
                position: 'bottom',
                labels: {
                    padding: 20,
                },

            },
            maintainAspectRatio: false,
            scales: {
            }
        }

    });
});


/*
function padding() {
    let compare = document.getElementById("mySidenav").style.width;
    let comparemax = document.getElementById("mySidenav").style.width = "250px";
    let comparemin = document.getElementById("mySidenav").style.width = "3px";

    if (compare = comparemax ) {
        document.getElementById("auto-dash").style.paddingLeft = "30px";
        document.getElementById("auto-dash").style.transition = "all 1s ease-in-out";
    }
    else if (compare = comparemin) {
        document.getElementById("auto-dash").style.paddingLeft = "280px";
        document.getElementById("auto-dash").style.transition = "all 1s ease-in-out";
    }

}
*/



/*
function menu() {
    var x = document.getElementById("mySidenav");
    if (x.style.width === "0") {
        x.style.width = "250px";
    } else if (x.style.width === "250"){
        x.style.width = "0";
    }
    else {
        x.style.width = "0";
    }
}
*/

$(document).ready(function(){
    $(".hamburger").click(function(){
        $(this).toggleClass("is-active");
    });

    $('.widget-sm').hover(
        function(){ $(this).addClass('animated pulse') },
        function(){ $(this).removeClass('animated pulse') }
    )
});

