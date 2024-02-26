const edit_pattern_item = {
    template:`
<div class="modal fade text-left" id="editItemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success white">
                <h4 class="modal-title white" id="myModalLabel9"><i class="la la-tree"></i> Edit Pattern Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>

            <div class="modal-body">

                <label>Phrase: </label>
                <div class="form-group"  >
                    <textarea class="form-control font-size-large" :value="rus" ref="rusTextarea" ></textarea>
                </div>

                <label>Translation: </label>
                <div class="form-group">
                    <textarea class="form-control font-size-large" ref="engTextarea" :value="eng" ></textarea>
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
        item_id: Number,
        rus: String,
        eng: String,
    },

    data() {
        return {

        };
    },

    inject: ['edit_add_item_url'],

    methods: {

        editAction() {

            this.$refs.rusTextarea.classList.remove('is-invalid');
            this.$refs.engTextarea.classList.remove('is-invalid');

            let rus = this.$refs.rusTextarea.value;
            let eng = this.$refs.engTextarea.value;

            if(!rus) {
                this.$refs.rusTextarea.classList.add('is-invalid');
                return false;
            }

            if(!eng) {
                this.$refs.engTextarea.classList.add('is-invalid');
                return false;
            }

            this.$refs.create_button.disabled = true;

            $.post(this.edit_add_item_url, {
                id          : this.item_id,
                rus         : rus,
                eng         : eng,
            },(response) => {

                this.$refs.create_button.disabled = false;

                if(response.status === true) {
                    this.eng = '';
                    this.rus = '';

                    this.$emit('edit', this.item_id, rus, eng);
                    $('#editItemModal').modal('hide')
                }

            } , 'json');

        }

    }

};
