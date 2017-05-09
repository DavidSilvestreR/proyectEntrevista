
$(document).ready(function(){
    $.getJSON("./api/getEstadisticas.php", function(result){
        console.log(result);
       Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Ventas al mes de Mayo'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cantidad de Ventas'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'N° productos vendidos: <b>{point.y:.1f}</b>'
    },
    series: [{
        name: 'Population',
        data: result,
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
    });


});


