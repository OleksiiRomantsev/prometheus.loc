@extends('modernLayout')

@section('content')
    <div class="row">
        <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">English</h4>
        </div>
    </div>

    <div class="row match-height">
        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img-top img-fluid" src="/app-assets/images/ego/11.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Start training</h4>
                        <ul class="list-group list-group-flush">
                            @if(($engStartWordCount = $englishWordCounter->getStartTrainingCount()) > 0)
                            <li class="list-group-item">
                                <span class="badge badge-pill bg-primary float-right">{{$engStartWordCount}}</span>
                                <a href="{{route('training.wordTrainingPage', ['lang' => 'en', 'training_type_code' => 1])}}" >English words</a>
                            </li>
                            @endif
{{--                            <li class="list-group-item">--}}
{{--                                <span class="badge badge-pill bg-info float-right">2</span>--}}
{{--                                Dapibus ac facilisis in--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item">--}}
{{--                                <span class="badge badge-pill bg-warning float-right">1</span>--}}
{{--                                Morbi leo risus--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item">--}}
{{--                                <span class="badge badge-pill bg-success float-right">3</span>--}}
{{--                                Porta ac consectetur ac--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item">--}}
{{--                                <span class="badge badge-pill bg-danger float-right">8</span>--}}
{{--                                Vestibulum at eros--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img-top img-fluid" src="/app-assets/images/ego/22.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Consolidation training</h4>
                        <ul class="list-group list-group-flush">
                            @if(($engConstWordCount = $englishWordCounter->getContsTrainingCount()) > 0)
                            <li class="list-group-item">
                                <span class="badge badge-pill bg-primary float-right">{{$engConstWordCount}}</span>
                                <a href="{{route('training.wordTrainingPage', ['lang' => 'en', 'training_type_code' => 2])}}" >English words</a>
                            </li>
                            @endif

                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img-top img-fluid" src="/app-assets/images/ego/33.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Repeat training</h4>
                        <ul class="list-group list-group-flush">
                            @if( ($engRepeateWordCount = $englishWordCounter->getRepeatTrainingCount()) > 0 )
                            <li class="list-group-item">
                                <span class="badge badge-pill bg-primary float-right">{{$engRepeateWordCount}}</span>
                                    <a href="{{route('training.wordTrainingPage', ['lang' => 'en', 'training_type_code' => 3])}}" >English words</a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">

                    <div class="card-body">
                        <h4 class="card-title">Work statistic</h4>
                    </div>
                </div>
            </div>
        </div>


{{--        <div class="col-xl-3 col-md-6 col-12">--}}
{{--            <div class="card bg-warning">--}}
{{--                <div class="card-content">--}}
{{--                    <div class="card-body pb-1">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-7">--}}
{{--                                <h4 class="text-white mb-1"><i class="cc BTC" title="BTC"></i> Workcoin</h4>--}}
{{--                                <h6 class="text-white">3.5 BTC</h6>--}}
{{--                            </div>--}}
{{--                            <div class="col-5 text-right">--}}
{{--                                <h4 class="text-white mb-1"><i class="la la-caret-up"></i> $950</h4>--}}
{{--                                <h6 class="text-white">$9980</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-xl-3 col-md-6 col-12">--}}
{{--            <div class="card bg-gradient-directional-info">--}}
{{--                <div class="card-content">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="media d-flex">--}}
{{--                            <div class="media-body text-white text-left">--}}
{{--                                <h3 class="text-white">{{$points}}</h3>--}}
{{--                                <span>Points</span>--}}
{{--                            </div>--}}
{{--                            <div class="align-self-center">--}}
{{--                                <i class="icon-support text-white font-large-2 float-right"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-xl-6 col-md-12">--}}
{{--            <div class="card overflow-hidden">--}}
{{--                <div class="card-content">--}}
{{--                    <div class="card-body cleartfix">--}}
{{--                        <div class="media align-items-stretch">--}}
{{--                            <div class="align-self-center">--}}
{{--                                <i class="icon-pencil info font-large-2 mr-2"></i>--}}
{{--                            </div>--}}
{{--                            <div class="media-body">--}}
{{--                                <h4>Total Posts</h4>--}}
{{--                                <span>Monthly blog posts</span>--}}
{{--                            </div>--}}
{{--                            <div class="align-self-center">--}}
{{--                                <h1>18,000</h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


    </div>

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

{{--    <div class="row">--}}

{{--        <div class="col-xl-4 col-md-6 col-sm-12">--}}
{{--            <div class="card" style="height: 435.688px;">--}}
{{--                <div class="card-content">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="card-title">List Group</h4>--}}
{{--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's--}}
{{--                            content.</p>--}}
{{--                    </div>--}}
{{--                    <ul class="list-group list-group-flush">--}}
{{--                        <li class="list-group-item">--}}
{{--                            <span class="badge badge-pill bg-primary float-right">4</span>--}}
{{--                            Cras justo odio--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item">--}}
{{--                            <span class="badge badge-pill bg-info float-right">2</span>--}}
{{--                            Dapibus ac facilisis in--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item">--}}
{{--                            <span class="badge badge-pill bg-warning float-right">1</span>--}}
{{--                            Morbi leo risus--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item">--}}
{{--                            <span class="badge badge-pill bg-success float-right">3</span>--}}
{{--                            Porta ac consectetur ac--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item">--}}
{{--                            <span class="badge badge-pill bg-danger float-right">8</span>--}}
{{--                            Vestibulum at eros--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="card-body">--}}
{{--                        <a href="#" class="card-link">Card link</a>--}}
{{--                        <a href="#" class="card-link">Another link</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

    <div class="row match-height">
        <div class="col-xl-3 col-md-6 col-12">
            <div class="card bg-gradient-directional-info" ondblclick="showImg()" >
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-white text-left">
                                <h3 class="text-white">{{$points}}</h3>
                                <span>Points</span>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-support text-white font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="work_img" style="display: none; " >
        <img src="{{$img}}" style="width: 100%;">
    </div>


    <script>

        function showImg() {
            $('#work_img').css('display', 'block');
        }

    </script>


@endsection
