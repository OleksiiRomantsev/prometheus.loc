const start_1 = {
    template: `
<div class="position-relative" >

    <div v-if="current_word.audio" class="position-absolute" style="top: 0px; right: 20px;" >
        <audio-player :audio_url="current_word.audio" ></audio-player>
    </div>

    <h1 class="primary mb-1 lfont" >{{current_word.spelling}}</h1>

    <h2 class="default mb-3" >{{current_word.transcription}}</h2>

    <h3 class="info mb-2 rus-text" >{{current_word.meaning}}</h3>


    <div class="row d-flex justify-content-center">
        <div class="col-md-4" >
            <select v-model="start_repeat_count" class="form-control mb-2 square" >
                <option value="0">Unknown word</option>
                <option value="15">Easy word</option>
                <option value="30">Learned word</option>
            </select>
        </div>
    </div>


    <button class="btn btn-success" type="button" @click="nextStep" >Start training</button>

</div>
    `,

    data() {
        return {
            start_repeat_count: 0
        };
    },

    watch: {

        start_repeat_count(newRepeateCount) {
            this.$emit('change-repeat-count', newRepeateCount);
        }
    },

    components: {
        'audio-player': audioPlayer,
    },

    props: {
        current_word: {
            required: true,
        }
    },

    methods: {
        nextStep() {
            this.$emit('next-step');
        }
    }
};
