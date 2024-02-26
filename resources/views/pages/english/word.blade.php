@extends('modernLayout')

@section('content')

<div id="edit_english_word" v-cloak >

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="row-separator-colored-controls">{{$title}}</h4>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">



                        <form class="form form-horizontal row-separator" >

                            <div class="form-body">
                                <h4 class="form-section">

                                    @if($is_start)
                                    <a href="{{route('training.wordTrainingPage', ['lang' => 'en', 'training_type_code' => 1, 'id' => $wordMeaning->id])}}">
                                        <i class="la la-toggle-up green cursor-pointer"></i>
                                    </a>
                                    @endif

                                    Word

                                    @if($is_start)
                                    <a href="javascript:void(0)" @click="finishThisWord"  >
                                        <i class="la la-check-square-o green cursor-pointer"></i>
                                    </a>
                                    @endif

                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput1">Word</label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput1" class="form-control border-primary" name="word" required  readonly value="{{$wordMeaning->word->spelling}}"  placeholder="word" >
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
                                                <input type="text" id="userinput3" class="form-control border-primary" v-model="translation" name="translation" required placeholder="translation">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control" for="userinput55">Status</label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput55" class="form-control border-primary" readonly value="{{$wordMeaning->status}}" placeholder="Status">
                                            </div>
                                        </div>


                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control" for="userinput55">Word or Phrase</label>
                                            <div class="col-md-9">
                                                <select class="form-control border-primary" v-model="ligva_form" >
                                                    <option value="phrase" >Phrase</option>
                                                    <option value="word" >Word</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control" for="userinput4">Other meanings</label>
                                            <div class="col-md-9">

                                                @if($other_meanings)

                                                    <table  class="table table-bordered table-striped" >
                                                        @foreach($other_meanings AS $other)
                                                            @if($other['id'] != $wordMeaning->id)
                                                            <tr>
                                                                <td>
                                                                    <a href="{{route('english.word_page', ['id' => $other['id']])}}">{{ $other['id'] }}</a>
                                                                </td>
                                                                <td>{{ $other['meaning'] }}</td>
                                                            </tr>
                                                            @endif
                                                        @endforeach
                                                    </table>

                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control" for="userinput3">Audio</label>
                                            <div class="col-md-9">

                                                @if($wordMeaning->audio)
                                                    <audio-player audio_url="{{$wordMeaning->audio}}" ></audio-player>
                                                @endif

                                                @if($wordMeaning->audio_us)
                                                    <audio-player audio_url="{{$wordMeaning->audio_us}}" ></audio-player>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>

                            </div>

                            <div class="form-actions text-right">
                                <button type="button" @click="editWord" ref="editButton"  class="btn btn-primary waves-effect waves-light">
                                    <i class="la la-check"></i> Edit
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Phrases -->
<div id="phrases_list" v-cloak >
        <div class="row" >
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Phrases</h4>
                        <create-phrase-modal @reload="getPhrases" ></create-phrase-modal>
                        <edit-phrase-modal
                            @reload="getPhrases"
                            :phrase_id="edit.phrase_id"
                            :phrase="edit.phrase"
                            :translation="edit.translation"
                            :comment="edit.comment"
                            :memorise="edit.memorise"
                        ></edit-phrase-modal>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 mb-2">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>English</th>
                                                <th>Translation</th>
                                                <th>Comment</th>
                                                <th>Memorise</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                            <tr v-for="phrase in phrases" >
                                                <td class="text-middle">@{{ phrase.id }}</td>
                                                <td>@{{ phrase.original }}</td>
                                                <td>@{{ phrase.rus }}</td>
                                                <td>@{{ phrase.comment }}</td>
                                                <td>
                                                    <span v-if="phrase.memorise == 1">Yes</span>
                                                    <span v-else="phrase.memorise == 1">No</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-dark" @click="editPhrase(phrase.id, phrase.original, phrase.rus, phrase.comment, phrase.memorise)" >Edit</button>
                                                </td>
                                            </tr>

                                            <tr v-show="phrases.length == 0" >
                                                <td  colspan="6" class="text-center" >
                                                    No phrases yet
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5" class="text-center" >
                                                    <button class="btn btn-success" @click="createNewPhraseOpenModal" >Create new phrase</button>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12">
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
        {{tojs([
            'translation'               => $wordMeaning->meaning,
            'transcription'             => ($wordMeaning->word->transcription) ? $wordMeaning->word->transcription : '',
            'word_meaning_id'           => $wordMeaning->id,
            'ligva_form'                => $wordMeaning->word->form,
            'english_word_edit_route'   => route('english.word_edit'),
            'phrase_list_url'           => route('english.get_phrases'),
            'edit_add_phrase_url'       => route('english.edit_add_phrase'),
            'success_word_url'          => route('training.success_word_spec', ['lang' => 'en', 'id' => $wordMeaning->id]),
         ])}}
    </script>


    <script src="/custom/vueComponents/editEnglishWord.vue.js"></script>
    <script src="/custom/vueComponents/modals/createPhraseModal.vue.js"></script>
    <script src="/custom/vueComponents/modals/editPhraseModal.vue.js"></script>
    <script src="/custom/vueComponents/phrasesList.vue.js"></script>

@endsection
