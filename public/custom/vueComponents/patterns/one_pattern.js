const one_pattern = {

    components: {
        'edit-pattern-item': edit_pattern_item,
        'create-pattern-item': create_pattern_item
    },

    data() {
        return {
            items: items,
            edit:{}
        }
    },

    provide: {
        'edit_add_item_url':edit_add_item_url
    },

    emits: ['edit', 'create'],

    methods: {
        // показываем окно редактирования itema
        showEditPopup(event) {
            let button = event.currentTarget;
            let id = button.dataset.id;
            let item = this.findItemById(id);

            if(item) {
                this.edit = item;
                $('#editItemModal').modal({
                    backdrop: false,
                    keyboard: true,
                    focus: true
                });
            }
        },

        // находим item по его id
        findItemById(id) {
            id = parseInt(id);
            for(let item in this.items) {
                if(this.items[item].item_id === id) {
                    return this.items[item];
                }
            }
        },


        // редактирование компонента - обработчик
        editItemEventHandler( item_id, rus, eng) {

            for(let item in this.items) {
                if(this.items[item].item_id === item_id) {

                    this.items[item].rus = rus;
                    this.items[item].eng = eng;

                }
            }
        },


        addItemEventHandler(item) {

            let newitem = {
                item_id: item.id,
                eng: item.eng,
                rus: item.rus
            };

            this.items.push(newitem);

        },


        showCreateModal() {

            $('#createITemModal').modal({
                backdrop: false,
                keyboard: true,
                focus: true
            });
        }
    }

};


Vue.createApp(one_pattern).mount('#one_pattern');
