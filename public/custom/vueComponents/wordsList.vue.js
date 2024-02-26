
const wordsList = {
    data() {
        return {
            languages: {},
            words: {},
            total: undefined,
            filter: {
                lang:'en',
                status: 0,
                sort: 'desc',
                search: '',
                ready: false,
                form: 'all'
            },
            // statuses: [
            //     {name: 'All', code: 0},
            //     {name: 'Start', code: 10},
            //     {name: 'Consolidation', code: 20},
            //     {name: 'Learned', code: 30}
            // ],
            sorts: [
                {field: 'id', dir: 'asc'},
                {field: 'id', dir: 'desc'}
            ],
            forms: ['all', 'word', 'phrase'],
            pagination: {
                pageNumber: 0,
                pageSize: 50,
                showPages: [ // активные страницы
                ],
                showPageCount: 3,
                pageCount:0, // всего кол-во страниц
                total: 0,

                // флаги показа отдельный крайних кнопок
                showFistButton: false,
                showPrevButton: false,
                showNextButton: false,
                showLastButton: false
            },

        };
    },

    components: {
        'audio-player': audioPlayer,
    },

    created() {

        if( localStorage.getItem('words_filter') ) {

            let storage_filter = JSON.parse(localStorage.getItem('words_filter'));
            this.filter = storage_filter;
        }

        //this.pagination.pageNumber = window.location.hash = '#page='
        if(window.location.hash) {
            let hash = window.location.hash;
            let page = parseInt(hash.substring(6)) - 1;
            console.log(page);
            this.pagination.pageNumber = page;
        }

        this.getWords();
    },

    watch: {
        filter: {
            handler() {
                this.pagination.pageNumber = 0;
            },
            deep: true,
        },
    },

    methods: {


        // получение слов
        getWords() {

            localStorage.setItem('words_filter', JSON.stringify(this.filter));
            $.post("/words-list/get_words_list", {filter:this.filter, pagination:this.pagination},this.setWorlds , 'json');
        },

        getUrl(word_id) {

            var url;

            switch(this.filter.lang) {
                case 'en': url = '/english/word/' + word_id; break;
                case 'de': url = '/german/word/' + word_id; break;
            }

            return url;
        },

        setWorlds(responce) {
            this.words = responce.words;
            this.total = responce.total;

            this.formPagination();
        },


        formPagination() {

            // rewrite pagination
            window.location.hash = '#page=' + (this.pagination.pageNumber + 1);

            // рассчитать всего кол-во страниц
            this.pagination.pageCount = Math.ceil(this.total / this.pagination.pageSize);

            // по условию расчитать все условия отображения
            if(this.pagination.pageNumber === 0) {
                this.pagination.showFistButton = false;
                this.pagination.showPrevButton = false;
            } else {
                this.pagination.showFistButton = true;
                this.pagination.showPrevButton = true;
            }

            if(this.pagination.pageNumber >= (this.pagination.pageCount - 1) ) {
                this.pagination.showNextButton = false;
                this.pagination.showLastButton = false;
            } else {
                this.pagination.showNextButton = true;
                this.pagination.showLastButton = true;
            }

            var pages = [];

            // формирование страниц (на понижение)
            var limit = this.pagination.pageNumber - this.pagination.showPageCount;
            for(let ii = this.pagination.pageNumber - 1; ii >= limit ; ii-- ) {

                if(ii >= 0) {
                    pages.push({number: ii, active: false});
                }
            }
            pages = pages.reverse();

            pages.push({number: this.pagination.pageNumber, active:true});

            // формирование страниц (на повышение)
            var limit = this.pagination.pageNumber + this.pagination.showPageCount;
            for(let ii = this.pagination.pageNumber + 1; ii <= limit ; ii++ ) {

                if(ii <= (this.pagination.pageCount - 1) ) {
                    pages.push({number: ii, active:false});
                }
            }

            this.pagination.showPages = pages;
        },

        toPage(number) {
            this.pagination.pageNumber = number;
            this.getWords();
        },


    },
};

Vue.createApp(wordsList).mount('#words_list');


