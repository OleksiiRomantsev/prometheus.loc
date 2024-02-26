@extends('modernLayout')

@section('content')
    <div class="row" id="voronka_training" >
        <div class="col-lg-12" >
            <div class="card m-t-30 text-center">
                <input id="wordId" type="hidden" value="0" >
                <input id="spelling" type="hidden" value="0" >

                <div class="card-body ">

                    <p class="word-translation font-size-large rus-text"  >@{{ currentWord.meaning }}</p>
                    <p v-show="show_tip" class="word-trans" >@{{ currentWord.transcription }}</p>
                    <p v-show="show_tip" class="word" >@{{ currentWord.spelling }}</p>
                    <p v-html="diff" style="font-size: 40px;" ></p>

                    <p class="word-input" >
                        <input ref="input" v-model="answer" autofocus @keypress.enter="checkAnswer"  type="text" class="form-control text-center pro-font font50px" >
                    </p>

                </div>

                <div class="card-footer mt-2 mb-2">
                    <button @click="this.show_tip = true;" type="button" class="btn btn-warning btn-min-width mr-1 mb-1 waves-effect waves-light" >Показать</button>
                    <button @click="fail" type="button" class="btn btn-danger btn-min-width mr-1 mb-1 waves-effect waves-light">Не знаю</button>
                    <button @click="checkAnswer" type="button" class="btn btn-success btn-min-width mr-1 mb-1 waves-effect waves-light">Проверить</button>
                </div>


                <div class="counter-block mb-2">
                    <span id="words-counter" >@{{ counter }}</span> из <span>{{$words->count()}}</span>
                </div>


            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="/public/custom/js/diff.js"></script>


    <script>

        // формируем массив данных
        const words = {
            @foreach($words AS $word)
                {{$loop->iteration}}:{
                meaning: '{{$word->meaning}}',
                audio_us: '{{$word->word->audio_us}}',
                audio_uk: '{{$word->word->audio_uk}}',
                transcription: '{{$word->word->transcription}}',
                spelling: '{{$word->word->spelling}}',
                id: '{{$word->id}}'
            },
            @endforeach
        };

        var i = 1;
        var word_id;

        var redirectUrl = '{{$redirect_url}}';
        var successUrl = '{{route('voronka.voronka_training_action', ['lang' => $lang, 'result' => 1])}}';
        var failUrl = '{{route('voronka.voronka_training_action', ['lang' => $lang, 'result' => 0])}}';

        function diffStr(checkString, correctString) {
            return checkString.diff(correctString);
        }


    </script>
    <script src="/public/custom/vueComponents/trainings/voronkaTraining.js"></script>
@endsection
