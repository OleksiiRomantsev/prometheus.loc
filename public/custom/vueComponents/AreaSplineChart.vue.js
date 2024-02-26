const AreaSplineChart = {
    template: `
<div class="card">
    <div class="card-body">
        <div class="card-title">{{title}}</div>
        <div id="area-spline-chart"></div>
    </div>
</div>
    `,


    props: {
        title: {
            type: String,
            required: false,
            defauld: 'Area Spline Chart'
        },
        dates:{
            required: true,
        },
        chartdata: {
            required: true,
        }
    },

    mounted() {
        this.initChart();
    },

    methods: {
        initChart() {

            var areaSplineChart = {
                chart: {
                    height: 350,
                    type: 'area',
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    colors: $themeColor
                },
                series: [this.chartdata],

                xaxis: {
                    type: 'datetime',
                    categories: this.dates,
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                }
            }

            var area_spline_chart = new ApexCharts(
                document.querySelector("#area-spline-chart"),
                areaSplineChart
            );
            area_spline_chart.render();
        }
    }

};
