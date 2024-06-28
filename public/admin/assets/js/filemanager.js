

/* Impressions Chart */
var options = {
    chart: {
        height: 120,
        width: 100,
        type: "radialBar",
    },

    series: [85],
    colors: ["#38cb89"],
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "50%",
                background: "#fff"
            },
            dataLabels: {
                name: {
                    offsetY: -10,
                    color: "#4b9bfa",
                    fontSize: "10px",
                    show: false
                },
                value: {
                    offsetY: 5,
                    color: "#4b9bfa",
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
document.querySelector("#filemanager-1").innerHTML = ""
var chart5 = new ApexCharts(document.querySelector("#filemanager-1"), options);
chart5.render();
/* Impressions Chart */




