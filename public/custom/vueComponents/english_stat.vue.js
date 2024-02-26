const english_stat = {

    components: {
        'pie-chart': pieChart,
        'area-spline-chart': AreaSplineChart
    },
    data() {
        return {
            // chart data
            stat_info: stat_info,
            labels_info: labels_info,

            areaSplineChart: {
                dates: spline_chart_dates,
                data: spline_chart_data
            }
        };
    }
};


Vue.createApp(english_stat).mount('#english_stat');
