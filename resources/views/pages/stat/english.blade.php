@extends('modernLayout')

@section('content')
<div id="english_stat" v-cloak >

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-5">
                                <div class="float-left pl-2">
                                    <span class="font-large-3 text-bold-300">{{$all}}</span>
                                </div>
                                <div class="float-left mt-2 ml-1">
                                    <span class="blue-grey darken-1 block">All</span>
                                    <span class="blue-grey darken-1 block"></span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-5">
                                <div class="float-left pl-2">
                                    <span class="font-large-3 text-bold-300">{{$start}}</span>
                                </div>
                                <div class="float-left mt-2 ml-1">
                                    <span class="blue-grey darken-1 block">Start</span>
                                    <span class="blue-grey darken-1 block"></span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-5">
                                <div class="float-left pl-2">
                                    <span class="font-large-3 text-bold-300">{{$const}}</span>
                                </div>
                                <div class="float-left mt-2 ml-1">
                                    <span class="blue-grey darken-1 block">Cons</span>
                                    <span class="blue-grey darken-1 block"></span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="float-left pl-2">
                                    <span class="font-large-3 text-bold-300">{{$learned}}</span>
                                </div>
                                <div class="float-left mt-2 ml-1">
                                    <span class="blue-grey darken-1 block">Learned</span>
                                    <span class="blue-grey darken-1 block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <pie-chart title="English words" :stat_info="stat_info" :labels_info="labels_info" ></pie-chart>
                            </div>
                            <div class="col-6">
                                <area-spline-chart :dates="areaSplineChart.dates" :chartdata="areaSplineChart.data" ></area-spline-chart>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


@section('script')

    <script>
        {{ tojs([
                'labels_info' => $labels_info,
                 'stat_info' => $stat_info,
                 'spline_chart_dates' => $spline_chart_dates,
                 'spline_chart_data' => $spline_chart_data
         ]) }}
    </script>



    <script src="/custom/vueComponents/pieChart.vue.js"></script>
    <script src="/custom/vueComponents/AreaSplineChart.vue.js"></script>
    <script src="/custom/vueComponents/english_stat.vue.js"></script>
@endsection
