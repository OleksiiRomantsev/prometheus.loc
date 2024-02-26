<?php

namespace App\myclasses\words;

use Illuminate\Support\Facades\DB;

class getWordsList {

    protected $lang;
    protected $filter;
    protected $pagination;
    protected $table_meaning;
    protected $table_words;
    protected $colums;
    protected $phrase_count;

    protected $db_request;

    public function __construct($filter, $pagination)
    {
        $this->filter = $filter;
        $this->pagination = $pagination;

        $this->selectLanguage();

        // определяем колонки
        $this->setColums();
    }

    public function __invoke() {
        // get total
        $this->db_request = DB::table($this->table_meaning)
            ->select($this->colums)
            ->leftJoin($this->table_words, $this->table_meaning.'.word_id', '=', $this->table_words.'.id');

        // filter
        $this->setFilter();
        $this->setSort();

        $total = $this->db_request->count();

        // get words
        $skip = $this->pagination['pageSize'] * $this->pagination['pageNumber'];
        $this->db_request->skip($skip)->take($this->pagination['pageSize']);
        $words = $this->db_request->get();

        $words = $this->postAction($words);

        return array($words, $total);
    }

    protected function selectLanguage() {

        $languages = config('app.languages');
        $this->lang = $table_prefix = $languages[ $this->filter['lang'] ]['table_prefix'];

        $this->table_meaning = $table_prefix . 'word_meaning';
        $this->table_words = $table_prefix . 'words';
    }

    protected function setFilter() {

        // фильтр статуса слов
        if(isset($this->filter['status'])) {
            switch($this->filter['status']) {
                case 30: $this->db_request->where(['learned' => 1, 'const_done' => 1]); break;
                case 20: $this->db_request->where(['learned' => 1, 'const_done' => 0]); break;
                case 10: $this->db_request->where(['learned' => 0]); break;
            }
        }

        // фильтр по поиску слов
        if( isset($this->filter['search']) AND $this->filter['search'] != '' ) {
            $this->db_request->where('spelling', 'like', '%' . $this->filter['search'] . '%');
        }

        // фильтр по флагу "ready"
        if(isset($this->filter['ready']) AND $this->filter['ready'] === 'ready') {

            $this->db_request->where( 'phrases_count', '>=', $this->phrase_count );
            $this->db_request->where(['learned' => 0]);
        }

        // фильтр по флагу " not ready"
        if(isset($this->filter['ready']) AND $this->filter['ready'] === 'not ready') {

            $this->db_request->where( 'phrases_count', '<', $this->phrase_count );
            $this->db_request->where(['learned' => 0]);
        }


        // фильтр по типу (form - фраза или слово)
        if(isset($this->filter['form']) AND $this->filter['form'] != 'all') {

            $this->db_request->where( $this->table_words.'.form', $this->filter['form'] );
        }

    }


    protected function setSort() {

        if(isset($this->filter['sort'])) {
            switch($this->filter['sort']) {
                case 'desc': $this->db_request->orderBy($this->table_meaning.'.id', 'desc'); break;
                case 'asc': $this->db_request->orderBy($this->table_meaning.'.id', 'asc'); break;
            }
        }

    }

    protected function setColums() {

        switch($this->lang) {
            case 'english_':
                $this->colums = array($this->table_meaning.'.id', 'meaning', 'spelling', 'learned', 'const_done', 'repeat');
                $this->phrase_count = config('app.phrases_count');
                break;
            case 'german_':
                $this->colums = array($this->table_meaning.'.id', 'meaning', 'spelling', 'articles');
                $this->phrase_count = config('app.german_phrases_count');
                break;
        }
    }

    protected function postAction($words) {


        if($words) foreach($words AS &$word) {
            //dd($word);
            if($word->learned == 0) {
                $word->status = 'Start';
            } elseif($word->const_done == 0) {
                $word->status = 'Consolidation';
            } else {
                $word->status = 'Learned';
            }

        }


        // пока мёртвый кусок кода
//        switch($this->lang) {
//            case 'english_':
//
//                break;
//            case 'german_':
//                if($words) foreach($words AS &$word) {
//                    if($word->articles) $word->spelling = $word->articles . ' ' . $word->spelling ;
//                }
//                break;
//        }

        return $words;

    }
}
