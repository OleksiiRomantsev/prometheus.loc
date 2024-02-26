const phrasesList = {

    data() {
        return {
            phrase_list_url: phrase_list_url,
            edit_add_phrase_url: edit_add_phrase_url,
            words_meaning_id: word_meaning_id,

            phrases: [],

            edit: {
                phrase_id: 0,
                phrase: '',
                translation: '',
                comment: '',
                memorise: 0
            }
        }
    },

    beforeMount() {
        this.getPhrases();
    },

    components: {
        'create-phrase-modal': createPhraseModal,
        'edit-phrase-modal': editPhraseModal
    },

    provide() {
        return {
            words_meaning_id: this.words_meaning_id,
            edit_add_phrase_url: edit_add_phrase_url
        }
    },

    emits: ['reload'],

    methods: {
        getPhrases() {

            $.post(this.phrase_list_url, {id: this.words_meaning_id},(response) => {

                if(response.status === true) {
                    this.phrases = response.phrases;
                }

            } , 'json');

        },

        createNewPhraseOpenModal() {
            $('#createPhraseModal').modal({
                backdrop: false,
                keyboard: true,
                focus: true
            });
        },


        editPhrase(phrase_id, phrase, translation, comment, memorise) {

            this.edit.phrase_id = phrase_id;
            this.edit.phrase = phrase;
            this.edit.translation = translation;
            this.edit.comment = comment;
            this.edit.memorise = memorise == '1' ? true : false;

            $('#editPhraseModal').modal({
                backdrop: false,
                keyboard: true,
                focus: true
            });

        }
    },



};

Vue.createApp(phrasesList).mount('#phrases_list');
