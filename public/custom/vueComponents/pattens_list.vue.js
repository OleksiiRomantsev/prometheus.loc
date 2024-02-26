const pattens_list = {

    data() {
        return {
            filter: {
                lang: lang,
                sort: 'id_desc',
                search: '',
            },

            sorts: [
                {sort_name: 'Reverse', sort_code:'id_desc'},
                {sort_name: 'Straight', sort_code:'id_ask'},
                {sort_name: 'Trained max', sort_code: 'trained_max'},
                {sort_name: 'Trained min', sort_code: 'trained_min'},
                {sort_name: 'Not trained', sort_code: 'repeatt_desc'}
            ],

            patterns: []
        }
    },

    created() {

        if( localStorage.getItem('pattern_filter') ) {

            let storage_filter = JSON.parse(localStorage.getItem('pattern_filter'));
            this.filter = storage_filter;
        }

        this.getPattens();
    },

    methods: {

        getPattens() {
            console.log('getPattens');
            localStorage.setItem('pattern_filter', JSON.stringify(this.filter));
            $.post(pattern_list_url, {filter:this.filter},(result) => {
                this.patterns = result.patterns;
            } , 'json');
        },

        getUrl(pattern_id) {
            return '/patterns/show/' + pattern_id + '/';
        },
    }

};

Vue.createApp(pattens_list).mount('#patterns_list');
