@extends('modernLayout')


@section('content')
    <div class="card-box" >
        <div class="row m-b-15">
            <div class="col-sm-12" >
{{--                <a href="{{route('irregularVerbsAddPage')}}" class="btn btn-success btn-custom waves-effect w-md waves-light m-b-5">Добавить слово</a>--}}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12" >
                <table class="table table-hover" style="font-size: 18px; " >
                    <thead class="thead-default" >
                    <th>Перевод</th>
                    <th>Первая форма</th>
                    <th>Вторая форма</th>
                    <th>Третья форма</th>
                    </thead>

                    <tbody>
                    <? foreach($verbs AS $verb): ?>

                    <? if(isset($last) AND $last != $verb->type): ?>
                    <tr style="background-color: #b8e4b8;" >
                        <td colspan="4" ></td>
                    </tr>
                    <? endif; ?>

                    <tr onclick="$(this).find('td').css('font-size', '18px')" >
                        <td>{{$verb->meaning}}</td>
                        <td class="hiddentext" >
{{--                            <a href="{{route('edit_iverb', ['id' => $verb->id])}}">{{$verb->verb}}</a>--}}
                            {{$verb->verb}}
                            @if($verb->audio_uk_verb)
                                <span>
                                        <i class="ion-android-volume" ></i>
                                        <input type="hidden" value="{{$verb->audio_uk_verb}}" >
                                    </span>
                            @endif


                        </td>
                        <td class="hiddentext" onclick="$(this).css('font-size', '18px')" >
                            {{$verb->pastsimple}}
                            @if($verb->audio_us_pastsimple)
                                <div style="display: inline">
                                    <i class="ion-android-volume" onclick="playAudio(this)" ></i>
                                    <input type="hidden" value="{{$verb->audio_us_pastsimple}}" >
                                </div>
                            @endif

                        </td>
                        <td class="hiddentext" onclick="$(this).css('font-size', '18px')" >
                            {{$verb->pastparticiple}}

                            @if($verb->audio_us_pastparticiple)
                                <div style="display: inline" >
                                    <i onclick="playAudio(this)" class="ion-android-volume"  ></i>
                                    <input type="hidden" value="{{$verb->audio_us_pastparticiple}}" >
                                </div>
                            @endif
                        </td>
                    </tr>

                    <? $last = $verb->type; ?>

                    <? endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {


            $('input[type="text"]').on('change', function(Event) {

                var $input = $(Event.currentTarget);
                var $p = $input.parent().find('p');

                var userValue = $input.val();
                var word = $input.data('value');

                if(userValue != word) {
                    $p.html( userValue.diff(word) );
                } else {
                    $input.addClass('green');
                    $p.html(' ');
                }


            });

            //$('.ion-android-volume').on('click', playAudio);


        });
    </script>

    <style>

        tr td.hiddentext {
            font-size: 0px;
        }

    </style>

@endsection
