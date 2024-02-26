@extends('modernLayout')

@section('content')
    <div id="pronunciation">

        @yield('words_array')


        <div class="col-6">
            <div class="card-box">

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Слово</th>
                        <th>Аудио</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($words AS $word)
                        <tr>
                            <td>
                                @isset($word['delimeter']) <b>{{$word['delimeter']}}</b> <br><br> @endisset
                                {{$word['word']}}
                            </td>
                            <td>

                                @foreach($word['audio'] AS $key => $val)
                                    <audio-player audio_url="{{$val}}" ></audio-player>
                                @endforeach

                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>


            </div>
        </div>
    </div>

    </div>
@endsection

@section('script')
    <script src="/custom/vueComponents/pronunciation.vue.js"></script>

@endsection
