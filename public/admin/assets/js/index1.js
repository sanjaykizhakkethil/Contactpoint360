/* statistics Chart */
var options1 = {
    series: [{
        name: 'Net Profityyyyyyyyyyyyyyyyyyyyy',
        data: [22, 34, 56, 37, 35, 21, 34, 60, 78, 56, 53, 89],
    }, {
        name: 'Sales',
        data: [42, 50, 70, 57, 55, 58, 43, 80, 54, 23, 34, 77],
    }],
    chart: {
        type: 'bar',
        height: 378,
        toolbar: {
            show: false,
        }
    },
    grid: {
        borderColor: '#f7f9fa1a',
        // strokeDashArray: 3
    },
    colors: ["rgb(132, 90, 223)", "rgb(68, 196, 250)"],
    plotOptions: {
        bar: {
            colors: {
                ranges: [{
                    from: -100,
                    to: -46,
                    color: '#f7f9fa1a'
                }, {
                    from: -45,
                    to: 0,
                    color: '#f7f9fa1a'
                }]
            },
            columnWidth: '25%',
            borderRadius: 4,
            borderRadiusApplication: 'end'
        }
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        width: 1,
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
    legend: {
			show: true,
			position: 'bottom',
			labels: {
				color: 'rgba(142, 156, 173, 0.9)'
			},
			fontFamily: 'Hind Siliguri',
      markers: {
        radius: 12,
      },
		},
    xaxis: {
        type: 'week',
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
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
document.getElementById('statistics').innerHTML = '';
var chart1 = new ApexCharts(document.querySelector("#statistics"), options1);
chart1.render();

function statistics() {
    chart1.updateOptions({
        colors: ["rgba(" + myVarVal + ", 1)", "rgb(68, 196, 250)"],
    });
}
/* statistics Chart */
var spark1 = {
  chart: {
    type: 'line',
    height: 60,
    width:120,
    sparkline: {
    enabled: true
    },
    dropShadow: {
      enabled: false,
      blur: 3,
      opacity: 0.2,
      show:false,
    }
    },
    stroke: {
      show: true,
      curve: 'smooth',
      lineCap: 'butt',
      colors: undefined,
      width: 2,
      dashArray: 0,
    },
  fill: {
    gradient: {
    enabled: false
    }
  },
  series: [{

    name: 'Total Sales',
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
  colors: ['rgba(255,255,255,0.3)'],
  
  }
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
    colors: ['rgba(255, 255, 255, 0.4)'],
  
  }
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
    colors: ['rgba(255, 255, 255, 0.4)'],
  
  }
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
    colors: ['rgba(255, 255, 255, 0.4)'],
  
  }
  var spark4 = new ApexCharts(document.querySelector("#da-chart"), spark4);
  spark4.render();
