const editPhraseModal = {
    template:`
<div class="modal fade text-left" id="editPhraseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success white">
                <h4 class="modal-title white" id="myModalLabel9"><i class="la la-tree"></i> Edit Phrase</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>

            <div class="modal-body">

                <label>Phrase: </label>
                <div class="form-group"  >
                    <textarea class="form-control font-size-large" :value="phrase" ref="phraseTextarea" ></textarea>
                </div>

                <label>Translation: </label>
                <div class="form-group">
                    <textarea class="form-control font-size-large" ref="translationTextarea" :value="translation" ></textarea>
                </div>

                <label>Comment: </label>
                <div class="form-group">
                    <textarea class="form-control font-size-large" ref="commentTextarea" :value="comment" ></textarea>
                </div>

                <label>Memorise: </label>
                <div class="form-group">
                    <input class="form-control font-size-large mycheckbox" type="checkbox" ref="memorise_input" v-model="input_memorise"  >
                </div>

            </div>

            <div class="modal-footer">

                <button type="button" ref="create_button" @click="editAction" class="btn btn-outline-success">Save changes</button>
            </div>
        </div>
    </div>
</div>
    `,
    props: {
        phrase_id: Number,
        phrase: String,
        translation: String,
        comment: String,
        memorise: Boolean

    },

    data() {
        return {
            input_memorise:false
        };
    },

    watch: {
        memorise: {
            immediate: true,
            handler (val, oldVal) {
                this.input_memorise = this.$props.memorise
            }
        }
    },

    inject: ['words_meaning_id', 'edit_add_phrase_url'],

    methods: {

        editAction() {

            this.$refs.phraseTextarea.classList.remove('is-invalid');
            this.$refs.translationTextarea.classList.remove('is-invalid');

            let phrase = this.$refs.phraseTextarea.value;
            let translation = this.$refs.translationTextarea.value;
            let comment = this.$refs.commentTextarea.value;


            if(!phrase) {
                this.$refs.phraseTextarea.classList.add('is-invalid');
                return false;
            }

            if(!translation) {
                this.$refs.translationTextarea.classList.add('is-invalid');
                return false;
            }

            let memorise = this.$refs.memorise_input.checked ? 1 : 0;

            this.$refs.create_button.disabled = true;

            $.post(this.edit_add_phrase_url, {
                id          : this.phrase_id,
                original    : phrase,
                rus         : translation,
                comment     : comment,
                memorise    : memorise
            },(response) => {

                this.$refs.create_button.disabled = false;
                if(response.status === true) {
                    this.phrase = '';
                    this.translation = '';
                    this.input_memorise = false;
                    this.$emit('reload');

                    $('#editPhraseModal').modal('hide')
                }

            } , 'json');

        }

    }
};
