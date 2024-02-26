@extends('modernLayout')

@section('content')

    @if($training_type['code'] === 1)
        <!-- start training -->
        <div id="word_start_training" v-cloak >

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <section id="colored-progress">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-content collapse show">
                                        <div class="card-body text-center">
                                            <p>@{{ progress_text }}</p>

                                            <start-1
                                                v-show="current_step === 1"
                                                :current_word="current_word"
                                                @next-step="finishStartStep"
                                                @change-repeat-count="changeRepeatCount">
                                            </start-1>
                                            <w-rite v-show="current_step === 2 || current_step === 5 || current_step === 8" :current_word="current_word" @next-step="finishWrite" ></w-rite>
                                            <re-member v-show="current_step === 3 || current_step === 6 || current_step === 9" :data_array="current_word.phrases" @next-step="finishPhrase" ></re-member>
                                            <t-wait v-show="current_step === 4 || current_step === 7" :wait="wait" @next-step="finishInterval" ></t-wait>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    @elseif($training_type['code'] === 2)
        <!-- consolidation training -->
        <div id="word_const_training" v-cloak >
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body text-center position-relative">
                            <div class="position-absolute"  style="top: 0px; right: 20px;" >
                                <audio-player :audio_url="current_word.audio" ></audio-player>
                            </div>

                            <re-member v-show="show === true" :data_array="current_word.phrases" @next-step="nextWord" ></re-member>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
        <!-- repeat training -->
        <div id="word_repeat_training" v-cloak >
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-content collapse show">

                        <div class="card-body text-center position-relative">
                            <div class="position-absolute"  style="top: 0px; right: 20px;" >
                                <audio-player :audio_url="current_word.audio" ></audio-player>
                            </div>

                            <re-member v-show="show === true" :data_array="current_word.phrases" @next-step="nextWord" ></re-member>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@section('script')

    <script>
        {{tojs([
            'words_getter_url'  => route('training.get_words'),
            'lang'              => $lang,
            'word_id'           => $id,
            'current_route'     => url()->current(),
            'training_type_code'=> $training_type['code']
        ])}}
    </script>

    <!-- subcomponents -->
    <script src="/custom/vueComponents/trainings/subcomponents/start_1.vue.js"></script>
    <script src="/custom/vueComponents/trainings/subcomponents/write.vue.js"></script>
    <script src="/custom/vueComponents/trainings/subcomponents/remember.vue.js"></script>
    <script src="/custom/vueComponents/trainings/subcomponents/wait.vue.js"></script>

    <!-- components -->
    <script src="/custom/vueComponents/trainings/wordStartTraining.vue.js"></script>
    <script src="/custom/vueComponents/trainings/wordConstTraining.vue.js?v=1"></script>
    <script src="/custom/vueComponents/trainings/wordRepeatTraining.vue.js?v=1"></script>

@endsection
