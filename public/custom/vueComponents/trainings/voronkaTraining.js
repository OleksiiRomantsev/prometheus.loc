const voronkaTraining = {
    data() {
        return {
            show_tip: false,
            diff: '',
            index: 1,
            counter: 0,
            currentWord: {},
            answer: ''
        }
    },

    mounted() {
        this.$refs.input.focus();
        this.initCard();
    },
    methods: {

        initCard() {

            this.show_tip = false;
            this.diff = '';
            this.answer = '';
            if(typeof(words[this.index]) != 'undefined') {

                this.counter = this.index;
                this.currentWord = words[this.index];
                this.index++;

            } else {

                // завершение прохода слов
                window.location.href = redirectUrl;
            }
        },


         checkAnswer() {
             this.answer = this.answer.trim();
             let ans = this.answer.toString().toLowerCase();
             let checkStr = this.currentWord.spelling.toString().toLowerCase();
            if(ans == checkStr) {
                console.log('success');
                this.success();
            } else {
                console.log('fail');

                this.diff = diffStr(ans, checkStr);
            }
        },

         success() {
            $.post(successUrl, {word_id:this.currentWord.id}, () => {
                this.initCard();
            });
        },


         fail() {
            $.post(failUrl, {word_id:this.currentWord.id}, () => {
                this.initCard();
            });
        }


    }
};


Vue.createApp(voronkaTraining).mount('#voronka_training');
