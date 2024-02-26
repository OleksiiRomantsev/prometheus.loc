const remember = {
    template: `
<div>

    <button v-show="this.start === true" @click="startTraining" class="btn btn-success" >Start</button>
    <div v-show="this.start === false" >

        <button class="btn btn-success mb-2" ref="show" @click="showAnswer" >Show Answer</button>

        <h1 class="primary " >{{current_pair.original}}</h1>

        <p class="mb-3" >{{current_pair.comment}}</p>

        <h3 v-show="show_answer === true" class="info mb-2 rus-text" >{{current_pair.rus}}</h3>
        <h2 v-show="show_answer === true && current_pair.transcription" class="default mb-3" >{{current_pair.transcription}}</h2>


    </div>

</div>
    `,

    props: {
        data_array: {
            required: true,
        }
    },

    data() {
        return {
            index: 0,
            start: true,
            show_answer: false,
            current_pair: {
                rus: '',
                original: '',
                comment: ''
            }
        }
    },


    methods: {

        startTraining() {

            this.start = false;
            //console.log(this.data_array);
            if(this.data_array.length === 0) { // ошибка - нет данных для тренировки
                //console.error('No data for training!');
                this.start = true;
                this.$emit('next-step');
                return;
            }

            this.current_pair = this.data_array[0];
        },

        showAnswer() {

            // play audio
            if(this.index === 0) $('.myaudio').click();

            if(this.show_answer === false) { // просто показываем
                this.show_answer = true;
                this.$refs.show.innerHTML  = 'Next step';


            } else {
                // следующий шаг
                this.show_answer = false;
                this.$refs.show.innerHTML  = 'Show answer';
                this.index++;

                if(this.index === this.data_array.length) { // тренировка закончилась
                    this.index = 0;
                    shuffle(this.data_array);
                    this.$emit('next-step');
                    this.start = true;
                }

                this.current_pair = this.data_array[this.index];
            }


        },


    }
}
