const createPhraseModal = {
    template: `
<div class="modal fade text-left" id="createPhraseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title white" id="myModalLabel8">Create new phrase</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <label>Phrase: </label>
                <div class="form-group"  >
                    <textarea class="form-control font-size-large" v-model="phrase" ref="phraseTextarea" ></textarea>
                </div>

                <label>Translation: </label>
                <div class="form-group">
                    <textarea class="form-control font-size-large" ref="translationTextarea" v-model="translation" ></textarea>
                </div>

                <label>Comment: </label>
                <div class="form-group">
                    <textarea class="form-control font-size-large" ref="commentTextarea" v-model="comment" ></textarea>
                </div>

                <label>Memorise: </label>
                <div class="form-group">
                    <input class="form-control font-size-large mycheckbox" type="checkbox" ref="memorise_input" v-model="memorise"  >
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" ref="create_button" @click="createAction" >Create new phrase</button>
            </div>
        </div>
    </div>
</div>
    `,
    data() {
        return {
            phrase: '',
            translation: '',
            comment: '',
            memorise: false
        };
    },

    inject: ['words_meaning_id', 'edit_add_phrase_url'],

    methods: {

        createAction() {

            this.$refs.phraseTextarea.classList.remove('is-invalid');
            this.$refs.translationTextarea.classList.remove('is-invalid');
            this.$refs.commentTextarea.classList.remove('is-invalid');

            if(!this.phrase) {
                this.$refs.phraseTextarea.classList.add('is-invalid');
                return false;
            }

            if(!this.translation) {
                this.$refs.translationTextarea.classList.add('is-invalid');
                return false;
            }

            this.$refs.create_button.disabled = true;

            $.post(this.edit_add_phrase_url, {
                meaning_id  : this.words_meaning_id,
                original    : this.phrase,
                rus         : this.translation,
                comment     : this.comment,
                memorise    : this.memorise === false ? 0 : 1
            },(response) => {

                this.$refs.create_button.disabled = false;
                if(response.status === true) {
                    this.phrase = '';
                    this.translation = '';

                    this.$emit('reload');

                    $('#createPhraseModal').modal('hide')
                }

            } , 'json');

        }

    }
};
