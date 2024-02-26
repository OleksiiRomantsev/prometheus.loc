const wordConstTraining = {

    components: {

        're-member': remember,
        'audio-player': audioPlayer
    },

    data() {
        return {
            words_getter_url: words_getter_url,
            lang: lang,
            word_id: word_id,
            index: 0,
            ph_index: 0,
            current_route: current_route,
            show: false,
            training_type_code: training_type_code,


            // список слов для тренировки
            words: [],
            current_word: {
                audio: ""
            },
        }
    },

    beforeMount() {
        this.getWords();
    },

    methods: {
        getWords() {
            $.post(this.words_getter_url, {lang: this.lang, training_type_code: this.training_type_code, id: this.word_id},(requestResult) => {

                this.words = requestResult.words;

                if(this.words.length === 0) {
                    // слов уже не осталось
                    document.location.href = '/';
                } else {
                    this.index = 0;
                    this.setCurrentWord();

                }

            } , 'json');
        },


        setCurrentWord() {
            let phrases = this.words[this.index].phrases;
            shuffle(phrases);

            // add word to the first position
            // phrases.unshift({
            //     original:this.words[this.index].spelling,
            //     rus: this.words[this.index].meaning,
            // });

            phrases.unshift({
                original:       this.words[this.index].meaning,
                rus:            this.words[this.index].spelling,
                transcription:  this.words[this.index].transcription
            });

            this.words[this.index].phrases = phrases;
            this.current_word = this.words[this.index];
            this.show = true;
        },


        nextWord() {

            this.show = false;

            //отправляем сообщение об успешной тренировке
            $.post(this.current_word.url_success, {},(requestResult) => {

                if(requestResult.status === true) {

                    this.index++;
                    if(typeof this.words[this.index] === 'undefined') {
                        // нужно загрузить новые слова
                        this.getWords();
                    } else {
                        // просто переход на новое слово
                        this.setCurrentWord();
                    }

                } else {
                    alert('error');
                }

            } , 'json');
        }
    }


};


Vue.createApp(wordConstTraining).mount('#word_const_training');
