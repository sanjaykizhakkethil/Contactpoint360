


var options = {
    chart: {
        height: 150,
        width: 100,
        type: "radialBar",
    },

    series: [85],
    colors: ["#4422c9"],
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "60%",
                background: "none"
            },
            dataLabels: {
                name: {
                    offsetY: -10,
                    color: "#4422c9",
                    fontSize: "10px",
                    show: false
                },
                value: {
                    offsetY: 5,
                    color: "#4422c9",
                    fontSize: "12px",
                    show: true,
                    fontWeight: 800
                }
            }
        }
    },
    stroke: {
        lineCap: "round"
    },
    labels: ["Followers"]
};
document.querySelector("#analytics-followers").innerHTML = ""
var chart5 = new ApexCharts(document.querySelector("#analytics-followers"), options);
chart5.render();

var options = {
    chart: {
        height: 150,
        width: 100,
        type: "radialBar",
    },

    series: [60],
    colors: ["#eb2323"],
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "60%",
                background: "none"
            },
            dataLabels: {
                name: {
                    offsetY: -10,
                    color: "#eb2323",
                    fontSize: "10px",
                    show: false
                },
                value: {
                    offsetY: 5,
                    color: "#eb2323",
                    fontSize: "12px",
                    show: true,
                    fontWeight: 800
                }
            }
        }
    },
    stroke: {
        lineCap: "round"
    },
    labels: ["Views"]
};
document.querySelector("#analytics-views").innerHTML = ""
var chart6 = new ApexCharts(document.querySelector("#analytics-views"), options);
chart6.render();

var options = {
    chart: {
        height: 150,
        width: 100,
        type: "radialBar",
    },

    series: [60],
    colors: ["#008a4c"],
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "60%",
                background: "none"
            },
            dataLabels: {
                name: {
                    offsetY: -10,
                    color: "#008a4c",
                    fontSize: "10px",
                    show: false
                },
                value: {
                    offsetY: 5,
                    color: "#008a4c",
                    fontSize: "12px",
                    show: true,
                    fontWeight: 800
                }
            }
        }
    },
    stroke: {
        lineCap: "round"
    },
    labels: ["Views"]
};
document.querySelector("#analytics").innerHTML = ""
var chart6 = new ApexCharts(document.querySelector("#analytics"), options);
chart6.render();


var options = {
    chart: {
        height: 150,
        width: 100,
        type: "radialBar",
    },

    series: [60],
    colors: ["#d18d02"],
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "60%",
                background: "none"
            },
            dataLabels: {
                name: {
                    offsetY: -10,
                    color: "#d18d02",
                    fontSize: "10px",
                    show: false
                },
                value: {
                    offsetY: 5,
                    color: "#d18d02",
                    fontSize: "12px",
                    show: true,
                    fontWeight: 800
                }
            }
        }
    },
    stroke: {
        lineCap: "round"
    },
    labels: ["Views"]
};
document.querySelector("#rejected").innerHTML = ""
var chart6 = new ApexCharts(document.querySelector("#rejected"), options);
chart6.render();



function statistics() {
    chart1.updateOptions({
        colors: ["rgba(" + myVarVal + ", 1)", "#06c0d9"],
    });
}

var spark1 = {
    chart: {
      type: 'line',
      height: 60,
      width: 120,
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        enabledOnSeries: undefined,
        top: 0,
        left: 0,
        blur: 3,
        color: '#000',
        opacity: 0.1
      }
    },
    stroke: {
      show: true,
      curve: 'smooth',
      lineCap: 'butt',
      colors: undefined,
      width: 1.5,
      dashArray: 0,
    },
    fill: {
      gradient: {
        enabled: false
      }
    },
    series: [{
      name: 'Value',
      data: [0, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
    }],
    yaxis: {
      min: 0,
      show: false
    },
    xaxis: {
      axisBorder: {
        show: false
      },
    },
    yaxis: {
      axisBorder: {
        show: false
      },
    },
    colors: ['#26bf94'],
    // opacity: 0.5,
  
  }
  document.getElementById('btc-chart').innerHTML = '';
  var spark1 = new ApexCharts(document.querySelector("#btc-chart"), spark1);
  spark1.render();

  var spark2 = {
    chart: {
      type: 'line',
      height: 60,
      width: 120,
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        enabledOnSeries: undefined,
        top: 0,
        left: 0,
        blur: 3,
        color: '#000',
        opacity: 0.1
      }
    },
    stroke: {
      show: true,
      curve: 'smooth',
      lineCap: 'butt',
      colors: undefined,
      width: 1.5,
      dashArray: 0,
    },
    fill: {
      gradient: {
        enabled: false
      }
    },
    series: [{
      name: 'Value',
      data: [0, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
    }],
    yaxis: {
      min: 0,
      show: false
    },
    xaxis: {
      axisBorder: {
        show: false
      },
    },
    yaxis: {
      axisBorder: {
        show: false
      },
    },
    colors: ['#5f5acf'],
  
  }
  document.getElementById('eth-chart').innerHTML = '';
  var spark2 = new ApexCharts(document.querySelector("#eth-chart"), spark2);
  spark2.render();

  var spark3 = {
    chart: {
      type: 'line',
      height: 60,
      width: 120,
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        enabledOnSeries: undefined,
        top: 0,
        left: 0,
        blur: 3,
        color: '#000',
        opacity: 0.1
      }
    },
    stroke: {
      show: true,
      curve: 'smooth',
      lineCap: 'butt',
      colors: undefined,
      width: 1.5,
      dashArray: 0,
    },
    fill: {
      gradient: {
        enabled: false
      }
    },
    series: [{
      name: 'Value',
      data: [0, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
    }],
    yaxis: {
      min: 0,
      show: false
    },
    xaxis: {
      axisBorder: {
        show: false
      },
    },
    yaxis: {
      axisBorder: {
        show: false
      },
    },
    colors: ['#0cb97f'],
  
  }
  document.getElementById('dash-chart').innerHTML = '';
  var spark3 = new ApexCharts(document.querySelector("#dash-chart"), spark3);
  spark3.render();

  var spark4 = {
    chart: {
      type: 'line',
      height: 60,
      width: 120,
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        enabledOnSeries: undefined,
        top: 0,
        left: 0,
        blur: 3,
        color: '#000',
        opacity: 0.1
      }
    },
    stroke: {
      show: true,
      curve: 'smooth',
      lineCap: 'butt',
      colors: undefined,
      width: 1.5,
      dashArray: 0,
    },
    fill: {
      gradient: {
        enabled: false
      }
    },
    series: [{
      name: 'Value',
      data: [0, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
    }],
    yaxis: {
      min: 0,
      show: false
    },
    xaxis: {
      axisBorder: {
        show: false
      },
    },
    yaxis: {
      axisBorder: {
        show: false
      },
    },
    colors: ['#e6533c'],
  
  }
  document.getElementById('da-chart').innerHTML = '';
  var spark4 = new ApexCharts(document.querySelector("#da-chart"), spark4);
  spark4.render();

  var options = {
    series: [
        {
            data: [34, 55, 41, 67, 22, 43, 21]
        },
    ],
    chart: {
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 3,
            right: 6,
            blur: 3,
            color: ['#5757d1'],
            opacity: 0.2
        },
        type: 'line',
        height: 60,
        width: 300
    },
    tooltip: {
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    },
    colors: ["#5757d1"],
    stroke: {
        width: [3],
        curve: ['smooth'],
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.9,
            opacityTo: 0.9,
            stops: [0, 98],
        }
    },
};
var chart2 = new ApexCharts(document.querySelector("#widgetsChart"), options);
chart2.render();


var options = {
    series: [
        {
            data: [34, 55, 41, 67, 22, 43, 21]
        },
    ],
    chart: {
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 3,
            right: 6,
            blur: 3,
            color: ['#5757d1'],
            opacity: 0.2
        },
        type: 'line',
        height: 60,
        width: 300
    },
    tooltip: {
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    },
    colors: ["#5757d1"],
    stroke: {
        width: [3],
        curve: ['smooth'],
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.9,
            opacityTo: 0.9,
            stops: [0, 98],
        }
    },
};
var chart2 = new ApexCharts(document.querySelector("#widgetsChart1"), options);
chart2.render();

var options = {
    series: [
        {
            data: [34, 55, 41, 67, 22, 43, 21]
        },
    ],
    chart: {
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 3,
            right: 6,
            blur: 3,
            color: ['#5757d1'],
            opacity: 0.2
        },
        type: 'line',
        height: 60,
        width: 300
    },
    tooltip: {
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    },
    colors: ["#5757d1"],
    stroke: {
        width: [3],
        curve: ['smooth'],
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.9,
            opacityTo: 0.9,
            stops: [0, 98],
        }
    },
    xaxis: {
        type: 'week',
        categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
        axisBorder: {
            show: true,
            color: 'rgba(119, 119, 142, 0.05)',
            offsetX: 0,
            offsetY: 0,
        },
        axisTicks: {
            show: true,
            borderType: 'solid',
            color: 'rgba(119, 119, 142, 0.05)',
            width: 6,
            offsetX: 0,
            offsetY: 0
        },
        labels: {
            rotate: -90
        }
    }
};
var chart2 = new ApexCharts(document.querySelector("#widgetsChart2"), options);
chart2.render();

var options = {
    series: [
        {
            data: [34, 55, 41, 67, 22, 43, 21]
        },
    ],
    chart: {
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 3,
            right: 6,
            blur: 3,
            color: ['#5757d1'],
            opacity: 0.2
        },
        type: 'line',
        height: 60,
        width: 300
    },
    tooltip: {
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    },
    colors: ["#5757d1"],
    stroke: {
        width: [3],
        curve: ['smooth'],
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.9,
            opacityTo: 0.9,
            stops: [0, 98],
        }
    },
};
var chart2 = new ApexCharts(document.querySelector("#widgetsChart3"), options);
chart2.render();
 


var options1 = {
    series: [{
        name: 'Profit Earned',
        data: [44, 42, 57, 86, 58, 55, 70],
    }, {
        name: 'Total Sales',
        data: [34, 22, 37, 56, 21, 35, 60],
    }],
    chart: {
        type: 'bar',
        height: 150,
        width: 200,
        toolbar: {
            show: false,
        }
    },
    grid: {
        borderColor: '#f1f1f1',
        strokeDashArray: 0
    },
    colors: ["#664dc9", "#e4e7ed"],
    plotOptions: {
        bar: {
            colors: {
                ranges: [{
                    from: -100,
                    to: -46,
                    color: '#664dc9'
                }, {
                    from: -45,
                    to: 0,
                    color: '#664dc9'
                }]
            },
            columnWidth: '60%',
            borderRadius: 1,
        }
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: false,
        width: 2,
        colors: undefined,
    },
    legend: {
        show: false,
        position: 'top',
    },
    yaxis: {
        title: {
            style: {
                color: '#adb5be',
                fontSize: '13px',
                fontFamily: 'poppins, sans-serif',
                fontWeight: 600,
                cssClass: 'apexcharts-yaxis-label',
            },
        },
        labels: {
            formatter: function (y) {
                return y.toFixed(0) + "";
            }
        }
    },
    xaxis: {
        type: 'week',
        categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
        axisBorder: {
            show: false,
            color: 'rgba(119, 119, 142, 0.05)',
            offsetX: 0,
            offsetY: 0,
        },
        axisTicks: {
            show: false,
            borderType: 'solid',
            color: 'rgba(119, 119, 142, 0.05)',
            width: 6,
            offsetX: 0,
            offsetY: 0
        },
        labels: {
            rotate: -90
        }
    }
};
document.getElementById('crm-profits').innerHTML = '';
var chart1 = new ApexCharts(document.querySelector("#crm-profits"), options1);
chart1.render();    

// function crmProfitsearned() {
//     chart1.updateOptions({
//         colors: ["rgba(" + myVarVal + ", 1)", "#664dc9"],
//     });
// }


var options1 = {
    series: [{
        name: 'Cash Flow',
        data: [200,110,90,-50,-100,-60,100,150,180,200,
        ]
    }],

    // series: [{
    //     name: 'Profit Earned',
    //     data: [160, 130, -57, -86, -58, 155, 170],
    // }, {
    //     name: 'Total Sales',
    //     data: [140, 110, -37, -56, -21, 115, 160],
    // }],
    chart: {
        type: 'bar',
        height: 150,
        width: 160,
        toolbar: {
            show: false,
        }
    },
    grid: {
        borderColor: '#f1f1f1',
        strokeDashArray: 0
    },
    plotOptions: {
        bar: {
            colors: {
                ranges: [{
                    from: -100,
                    to: -46,
                    color: "#aeeacf",
                }, {
                    from: 0,
                    to: 200,
                    color: "#38cb89",
                }]
            },
            columnWidth: '60%',
            borderRadius: 1,
        }
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: false,
        width: 2,
        colors: undefined,
    },
    legend: {
        show: false,
        position: 'top',
    },
    yaxis: {
        title: {
            style: {
                color: '#38cb89',
                fontSize: '13px',
                fontFamily: 'poppins, sans-serif',
                fontWeight: 600,
                cssClass: 'apexcharts-yaxis-label',
            },
        },
        labels: {
            formatter: function (y) {
                return y.toFixed(0) + "";
            }
        }
    },
    xaxis: {
        type: 'week',
        categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
        axisBorder: {
            show: false,
            color: '#38cb89',
            offsetX: 0,
            offsetY: 0,
        },
        axisTicks: {
            show: false,
            borderType: 'solid',
            color: '#38cb89',
            width: 6,
            offsetX: 0,
            offsetY: 0
        },
        labels: {
            rotate: -90
        }
    }
};
document.getElementById('crm-profits1').innerHTML = '';
var chart1 = new ApexCharts(document.querySelector("#crm-profits1"), options1);
chart1.render();


var options1 = {
    series: [{
        name: 'Cash Flow',
        data: [-200,-110,-90,50,100,60,-100,-150,-180,-200,
        ]
    }],
    // series: [{
    //     name: 'Profit Earned',
    //     data: [160, 130, -57, -86, -58, 155, 170],
    // }, {
    //     name: 'Total Sales',
    //     data: [140, 110, -37, -56, -21, 115, 160],
    // }],
    chart: {
        type: 'bar',
        height: 150,
        width: 160,
        toolbar: {
            show: false,
        }
    },
    grid: {
        borderColor: '#f1f1f1',
        strokeDashArray: 0
    },
    // colors: ["rgb(132, 90, 223)", "#e4e7ed"],
    plotOptions: {
        bar: {
            colors: {
                ranges: [{
                    from: -400,
                    to: -50,
                    color: "#ffdd99",
                }, {
                    from: 0,
                    to: 500,
                    color: "#ffab00",
                }]
            },
            columnWidth: '60%',
            borderRadius: 1,
        }
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: false,
        width: 2,
        colors: undefined,
    },
    legend: {
        show: false,
        position: 'top',
    },
    yaxis: {
        title: {
            style: {
                color: '#adb5be',
                fontSize: '13px',
                fontFamily: 'poppins, sans-serif',
                fontWeight: 600,
                cssClass: 'apexcharts-yaxis-label',
            },
        },
        labels: {
            formatter: function (y) {
                return y.toFixed(0) + "";
            }
        }
    },
    xaxis: {
        type: 'week',
        categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
        axisBorder: {
            show: false,
            color: 'rgba(119, 119, 142, 0.05)',
            offsetX: 0,
            offsetY: 0,
        },
        axisTicks: {
            show: false,
            borderType: 'solid',
            color: 'rgba(119, 119, 142, 0.05)',
            width: 6,
            offsetX: 0,
            offsetY: 0
        },
        labels: {
            rotate: -90
        }
    }
};
document.getElementById('crm-profits2').innerHTML = '';
var chart1 = new ApexCharts(document.querySelector("#crm-profits2"), options1);
chart1.render();

var options1 = {
    series: [{
        name: 'Cash Flow',
        data: [200,110,90,-50,-100,-60,100,150,180,200,
        ]
    }],
    // series: [{
    //     name: 'Profit Earned',
    //     data: [160, 130, -57, -86, -58, 155, 170],
    // }, {
    //     name: 'Total Sales',
    //     data: [140, 110, -37, -56, -21, 115, 160],
    // }],
    chart: {
        type: 'bar',
        height: 150,
        width: 160,
        toolbar: {
            show: false,
        }
    },
    grid: {
        borderColor: '#f1f1f1',
        strokeDashArray: 0
    },
    // colors: ["rgb(132, 90, 223)", "#e4e7ed"],
    plotOptions: {
        bar: {
            colors: {
                ranges: [{
                    from: -100,
                    to: -46,
                    color: "#f7a1a1",
                }, {
                    from: 0,
                    to: 200,
                    color: "#ef4b4b",
                }]
            },
            columnWidth: '60%',
            borderRadius: 1,
        }
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: false,
        width: 2,
        colors: undefined,
    },
    legend: {
        show: false,
        position: 'top',
    },
    yaxis: {
        title: {
            style: {
                color: '#adb5be',
                fontSize: '13px',
                fontFamily: 'poppins, sans-serif',
                fontWeight: 600,
                cssClass: 'apexcharts-yaxis-label',
            },
        },
        labels: {
            formatter: function (y) {
                return y.toFixed(0) + "";
            }
        }
    },
    xaxis: {
        type: 'week',
        categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
        axisBorder: {
            show: false,
            color: 'rgba(119, 119, 142, 0.05)',
            offsetX: 0,
            offsetY: 0,
        },
        axisTicks: {
            show: false,
            borderType: 'solid',
            color: 'rgba(119, 119, 142, 0.05)',
            width: 6,
            offsetX: 0,
            offsetY: 0
        },
        labels: {
            rotate: -90
        }
    }
};
document.getElementById('crm-profits3').innerHTML = '';
var chart1 = new ApexCharts(document.querySelector("#crm-profits3"), options1);
chart1.render();



var options = {
    series: [44, 55, 41],
    chart: {
      type: "donut",
      height: 290,
      width: 200,
    },
    legend: {
      position: "bottom",
    },
    colors: ["#5dd59f", "#5dd59f99", "#5dd59f4d"],
    dataLabels: {
      dropShadow: {
        enabled: false,
      },
    },
  };
  var chart = new ApexCharts(document.querySelector("#donut-simple1"), options);
  chart.render();
  var options = {
    series: [44, 55, 41],
    chart: {
      type: "donut",
      height: 350,
      width: 200,
    },
    legend: {
      position: "bottom",
    },
    colors: ["#5b73e8", "#5b73e899", "#5b73e84d"],
    dataLabels: {
      dropShadow: {
        enabled: false,
      },
    },
  };
  var chart = new ApexCharts(document.querySelector("#donut-simple2"), options);
  chart.render();

  var options = {
    series: [44, 55, 41],
    chart: {
      type: "donut",
      height: 290,
      width: 200,
    },
    legend: {
      position: "bottom",
    },
    colors: ["#ffbb33", "#ffbb3399", "#ffbb334d"],
    dataLabels: {
      dropShadow: {
        enabled: false,
      },
    },
  };
  var chart = new ApexCharts(document.querySelector("#donut-simple3"), options);
  chart.render();

  var options = {
    series: [44, 55, 41],
    chart: {
      type: "donut",
      height: 290,
      width: 200,
    },
    legend: {
      position: "bottom",
    },
    colors: ["#ef4b4b", "#ef4b4b99", "#ef4b4b4d"],
    dataLabels: {
      dropShadow: {
        enabled: false,
      },
    },
  };
  var chart = new ApexCharts(document.querySelector("#donut-simple4"), options);
  chart.render();