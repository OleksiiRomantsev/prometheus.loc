const wordStartTraining = {

    data() {
        return {
            ////progress: 0,
            progress_text: 'Lets begin',
            current_step: 1,
            words_getter_url: words_getter_url,
            lang: lang,
            word_id: word_id,
            wait_1: 25,
            wait_2: 120,


            // список слов для тренировки
            words: [],
            current_word: {
                audio: ""
            },


            start_repeat_count: 0,
        }
    },

    components: {
        'start-1': start_1,
        'w-rite': write,
        're-member': remember,
        't-wait': wait
    },

    emits: ['next-step'],

    beforeMount() {
      this.getWords();
    },

    methods: {

        getWords() {
            $.post(this.words_getter_url, {lang: this.lang, training_type_code: 1, id: this.word_id},(requestResult) => {

                this.words = requestResult.words;
                this.current_word = this.words[0];

                //console.log(this.current_word);

            } , 'json');
        },

        finishStartStep() {

            this.current_step++;
            this.progress_text = 'Write the word several times';

        },

        finishWrite() {

            this.current_step++;
            this.progress_text = 'Phrases list';
        },

        finishPhrase() {
            this.current_step++;
            this.progress_text = 'Wait';

            // конец всей тренировки
            if(this.current_step >= 10) {

                // success_word_url
                $.post(this.current_word.url_success, {repeat_count: this.start_repeat_count},(requestResult) => {

                    if(requestResult.status === true) {
                        document.location.href = '/';
                    } else {
                        alert('error');
                    }

                } , 'json');
            }

        },

        finishInterval() {
            this.current_step++;
            this.progress_text = 'Write the word several times';
        },

        changeRepeatCount(newRepeatCount) {
            this.start_repeat_count = newRepeatCount;
        }

    },


    computed: {

        wait() {
            if(this.current_step === 4) {
                return this.wait_1;
            } else {
                if(this.start_repeat_count == 30) return this.wait_1; // для знакомых слов
                return this.wait_2;
            }

        },

    },
};


Vue.createApp(wordStartTraining).mount('#word_start_training');
