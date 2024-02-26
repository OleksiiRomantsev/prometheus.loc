const trainingPattern = {

    data() {
        return {
           items: items,
           item: {},
           pattern_id: pattern_id,
           pattern_list_url: pattern_list_url,
           pattern_training_success_url: pattern_training_success_url,
           show_answer: false,
           iCounter: 0,
           isSimple: false
        }
    },

    beforeMount() {
        this.initItem();
    },

    created: function () {
        window.addEventListener('keyup', this.nextKeyHandler)
    },

    methods: {

        checkTheAnswer() {
            if(this.show_answer === false) {
                $('.pattern_answer_block').addClass('primary');
                this.show_answer = true;
                return;
            } else {
                this.initItem();
            }
        },

        nextKeyHandler(event) {

            if(event.keyCode === 13 || event.keyCode === 32) {
                this.checkTheAnswer();
            }
        },

        initItem() {
            $('.pattern_answer_block').removeClass('primary');
            this.show_answer = false;
            this.item = this.items.shift();
            this.iCounter++;
            if(this.item) {

                if(this.isSimple) {
                    let eng = this.item.eng;
                    this.item.eng = this.item.rus;
                    this.item.rus = eng;
                }

                this.item.parts = this.item.eng.split(' ');
                return;

            } else {
                // нет больше item отмечаем что паттерн пройден
                $.post(this.pattern_training_success_url, {pattern_id:this.pattern_id}, () => {
                    window.location.href = this.pattern_list_url;
                });
            }
        }

    }

}


Vue.createApp(trainingPattern).mount('#trainingPattern');
