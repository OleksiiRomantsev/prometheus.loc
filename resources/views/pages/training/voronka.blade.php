@extends('modernLayout')

@section('content')
    <div class="row match-height">

        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Voronka</h4>
                        <p class="card-text">Уровни воронки</p>
                    </div>
                    <ul class="list-group list-group-flush">

                        @foreach($levels AS $level)
                        <li class="list-group-item">
                            <span class="badge badge-pill bg-primary float-right">{{$level['count']}}</span>
                            <a href="{{route('voronka.level', ['lang' => $lang, 'level' => $level['level']])}}" >Level # {{$level['level']}}</a> (persent {{$level['persent']}})
                            <a href="{{route('voronka.voronka_training', ['lang' => $lang, 'level' => $level['level']])}}">Training</a>
                        </li>
                        @endforeach

                    </ul>

                </div>
            </div>
        </div>


        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body d-flex justify-content-center align-items-center">

                        <a href="{{route('voronka.del_voronka', ['lang'=>$lang])}}">
                            <button class="btn btn-primary waves-effect waves-light" >
                                Delete voronka
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


@section('script')

@endsection
