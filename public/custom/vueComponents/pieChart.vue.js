const pieChart = {
    template: `
<div class="card">
    <div class="card-body">
        <div class="card-title">{{title}}</div>
        <div ref="chart" ></div>
    </div>
</div>
    `,

    props: {
        title: {
            type: String,
            required: false,
            defauld: 'Pie Simple Chart'
        },
        labels_info: {
            required: true
        },
        stat_info: {
            required: true
        }
    },

    mounted() {
        this.initChart();
    },

    methods: {
        initChart() {

            let pieSimpleChart = {
                chart: {
                    height: 350,
                    type: 'pie',
                },
                labels: this.labels_info,
                series: this.stat_info,
                responsive: [{
                    breakpoint: 1200,
                    options: {
                        chart: {
                            width: 300
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }, {
                    breakpoint: 768,
                    options: {
                        chart: {
                            width: 520
                        },
                        legend: {
                            position: 'right'
                        }
                    }
                }, {
                    breakpoint: 620,
                    options: {
                        chart: {
                            width: 450
                        },
                        legend: {
                            position: 'right'
                        }
                    }
                }, {
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 250
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
                fill: {
                    colors: $themeColor
                }
            }


            // Initializing Pie Simple Chart
            let pie_simple_chart = new ApexCharts(
                this.$refs.chart,
                pieSimpleChart
            );
            pie_simple_chart.render();
        }
    }

}
