const write = {
    template: `
<div>
    <h1 class="primary mb-1" v-show="counter === 0" >{{current_word.spelling}}</h1>
    <h4>{{counter}} of {{max_count}}</h4>

    <input
        type="text"
        class="my-font-size form-control form-control-xl input-xl mb-1 text-center"
        @keypress.enter.prevent.stop="checkWord"
        ref="myInput"
        placeholder=""
    />

</div>
    `,
    data() {
        return {
            counter: 0,
            max_count: 3,
        }
    },
    props: {
        current_word: {
            required: true,
        }
    },

    methods: {

        checkWord() {
            this.$refs.myInput.classList.remove('is-invalid');
            let value = this.$refs.myInput.value.trim();

            if(value == this.current_word.spelling) {
                this.counter++;
                if(this.counter >= this.max_count) {
                    this.$emit('next-step');
                    this.counter = 0;
                }

                this.$refs.myInput.value = '';
            } else {
                // ошибка набора слова
                this.$refs.myInput.classList.add('is-invalid');
            }

        }

    }
};
