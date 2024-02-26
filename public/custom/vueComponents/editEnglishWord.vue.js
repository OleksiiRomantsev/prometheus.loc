const editEnglishWord = {

    components: {
        'audio-player': audioPlayer,
    },

    data() {
      return {
          translation: translation,
          transcription: transcription,
          word_meaning_id: word_meaning_id,
          english_word_edit_route: english_word_edit_route,
          success_word_url: success_word_url,
          ligva_form: ligva_form
      };
    },

    methods: {

        // редактирование слова
        editWord() {

            this.$refs.editButton.disabled = true;


            $.post(this.english_word_edit_route, {
                translation:        this.translation,
                transcription:      this.transcription,
                id:                 this.word_meaning_id,
                ligva_form:         this.ligva_form
            },(response) => {

                this.$refs.editButton.disabled = false;

                if(response.status === true) {
                    sweetAlert('Word change saved!');
                }

            } , 'json');

        },


        finishThisWord() {

            $.post(this.success_word_url, {repeat_count: 30},(response) => {


                if(response.status === true) {
                    sweetAlert('Word passed start training!');
                }

            } , 'json');

        }
    }

};


Vue.createApp(editEnglishWord).mount('#edit_english_word');
