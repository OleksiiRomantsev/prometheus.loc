@extends('modernLayout')

@section('content')
<div id="create_english_word" >

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="row-separator-colored-controls">{{$title}}</h4>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">

                        <form class="form form-horizontal row-separator" method="POST" action="{{route('english.create_word_action')}}" >
                            @csrf
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-eye"></i> Word</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput1">Word</label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput1" class="form-control border-primary" name="word" required v-model="word" @keypress.stop.prevent.enter="getWordInfo"  placeholder="word" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput2">Transcription</label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput2" class="form-control border-primary" name="transcription"  v-model="transcription" placeholder="Transcription">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control" for="userinput3">Translation</label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput3" class="form-control border-primary" name="translation" required v-model="translation" placeholder="translation">
                                            </div>
                                        </div>


                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control" for="woph">Word Or Phrase</label>
                                            <div class="col-md-9">
                                                <select id="woph" class="form-control border-primary" name="form" required v-model="form" >
                                                    <option value="word" >Word</option>
                                                    <option value="phrase" >Phrase</option>
                                                </select>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control" for="userinput4">Other meanings</label>
                                            <div class="col-md-9">
                                                <ul>
{{--                                                    <li v-for="other in otherMeanings" ></li>--}}

                                                    <table v-show="otherMeanings.length > 0" class="table table-bordered table-striped" >
                                                        <tr v-for="other in otherMeanings" >
                                                            <td>@{{other.id}}</td>
                                                            <td>@{{ other.meaning }}</td>
                                                        </tr>
                                                    </table>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control" for="userinput3">Audio</label>
                                            <div class="col-md-9">
                                                <input v-if="audio_us" type="hidden" name="selected_audio_us" :value="audio_us" >
                                                <input v-if="audio_uk" type="hidden" name="selected_audio_uk" :value="audio_uk" >
                                                <audio-player v-for="audio in audioTracks" :audio_url="audio" ></audio-player>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>

                            </div>

                            <div class="form-actions text-right">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    <i class="la la-check"></i> Create
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


@section('script')
    <script>
        {{tojs(['getWordInfoUrl' => route('english.get_word_info')])}}
    </script>


    <script src="/custom/vueComponents/createEnglishWord.vue.js"></script>
@endsection
