const create_pattern_item = {
    template: `
<div class="modal fade text-left" id="createITemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title white" id="myModalLabel8">Create new item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <label>Rus: </label>
                <div class="form-group"  >
                    <textarea class="form-control font-size-large" v-model="rus" ref="rusTextarea" ></textarea>
                </div>

                <label>Eng: </label>
                <div class="form-group">
                    <textarea class="form-control font-size-large" ref="engTextarea" v-model="eng" ></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" ref="create_button" @click="createAction" >Create new item</button>
            </div>
        </div>
    </div>
</div>
    `,



    data() {
        return {
            rus: '',
            eng: '',

        }
    },

    inject: ['edit_add_item_url'],

    methods: {
        createAction() {

            this.$refs.engTextarea.classList.remove('is-invalid');
            this.$refs.rusTextarea.classList.remove('is-invalid');

            if(!this.rus) {
                this.$refs.rusTextarea.classList.add('is-invalid');
                return false;
            }

            if(!this.eng) {
                this.$refs.engTextarea.classList.add('is-invalid');
                return false;
            }

            this.$refs.create_button.disabled = true;

            $.post(this.edit_add_item_url, {
                rus         : this.rus,
                eng         : this.eng,
                pattern_id  : pattern_id
            },(response) => {

                this.$refs.create_button.disabled = false;

                if(response.status === true) {
                    this.phrase = '';
                    this.translation = '';
                    this.rus = '';
                    this.eng = '';

                    this.$emit('create', response.item );

                    $('#createITemModal').modal('hide')
                }

            } , 'json');

        }
    }
}
