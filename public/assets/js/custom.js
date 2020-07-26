jQuery(document).ready(function($) {
    "use strict";

    // Pie chart flotPie1
    var piedata = [
    { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
    { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
    { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
    ];

    $.plot('#flotPie1', piedata, {
        series: {
            pie: {
                show: true,
                radius: 1,
                innerRadius: 0.65,
                label: {
                    show: true,
                    radius: 2/3,
                    threshold: 1
                },
                stroke: {
                    width: 0
                }
            }
        },
        grid: {
            hoverable: true,
            clickable: true
        }
    });
    // Pie chart flotPie1  End
    
    // cellPaiChart
    var cellPaiChart = [
    { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
    { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
    ];
    $.plot('#cellPaiChart', cellPaiChart, {
        series: {
            pie: {
                show: true,
                stroke: {
                    width: 0
                }
            }
        },
        legend: {
            show: false
        },grid: {
            hoverable: true,
            clickable: true
        }

    });
    // cellPaiChart End



});