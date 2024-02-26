const resources_list = {

    data() {
        return {
            filter: {
                search: '',
                sort: 'asd',

            },

            sort: {
                sort_code: 'id',
                sort_name: 'eer'
            }
        }
    },

    beforeMount() {

    },

    created: function () {

    },

    methods: {
        getResources() {

        }
    }

};


Vue.createApp(resources_list).mount('#resources_list');
