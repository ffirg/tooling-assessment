$(function () {
    
    window.chart = new Highcharts.Chart({
        
        chart: {
            renderTo: 'container',
            polar: true
        },
        
        title: {
            text: 'Highcharts Polar Chart'
        },
        
        pane: {
            startAngle: 0,
            endAngle: 360
        },
    
        xAxis: {
            tickInterval: 45,
            min: 0,
            max: 360,
            labels: {
                formatter: function () {
                    return this.value + '°';
                }
            }
        },
            
        yAxis: {
            min: 0
        },
        
        plotOptions: {
            series: {
                pointStart: 0,
                pointInterval: 45
            },
            column: {
                pointPadding: 0,
                groupPadding: 0
            }
        },
    
        series: [{
            type: 'area',
            name: 'Current',
            data: [1, 2, 3, 4, 5, 6, 7, 8]
        }, {
            type: 'area',
            name: 'Future',
            data: [1, 8, 2, 7, 3, 6, 4, 5]
        }]
    });
});
