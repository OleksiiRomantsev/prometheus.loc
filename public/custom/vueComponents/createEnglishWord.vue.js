var createEnglishWord = {
    data() {
        return {
            word:'',
            transcription: '[]',
            translation: '',
            otherMeanings: [],
            audioTracks: [],
            audio_uk: '',
            audio_us: '',
            form: 'word',

            getWordInfoUrl: getWordInfoUrl
        }
    },



    components: {
        'audio-player': audioPlayer,
    },


    methods: {

        getWordInfo() {
            $.post(this.getWordInfoUrl, {word: this.word},(wordInfo) => {

                this.transcription = '[' + wordInfo.transcription + ']';
                this.translation = wordInfo.trans;

                this.audioTracks = [];
                this.audio_uk = '';
                this.audio_us = '';

                if(wordInfo.audio_uk) {
                    this.audioTracks.push(wordInfo.audio_uk);
                    this.audio_uk = wordInfo.audio_uk;
                }
                if(wordInfo.audio_us) {
                    this.audioTracks.push(wordInfo.audio_us);
                    this.audio_us = wordInfo.audio_us;
                }

                this.otherMeanings = wordInfo.other_meanings;

            } , 'json');
        },

        // создание нового слова
        createNewWord() {

        }

    }
};


Vue.createApp(createEnglishWord).mount('#create_english_word');
