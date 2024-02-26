<?php

namespace  App\myclasses\stat;

use App\Models\english\EnglishWordMeaning;


class WordsStat {

    protected $meaning_word_model;

    public function __construct($lang = 'en')
    {
        switch($lang) {
            case 'en':
                //$this->meaning_word_model = EnglishWordMeaning::class;
                $this->meaning_word_model = EnglishWordMeaning::class;


                break;
//            case 'de':
//                $this->meaning_word_model = GermanWordMeaning::class;
//                $this->phrases_count = config('app.german_phrases_count');
//                break;
        }
    }

    public function allCount() {
        return (new $this->meaning_word_model)
            ->join('english_words', 'english_word_meaning.word_id', '=', 'english_words.id')
            ->where('english_words.form', 'word')
            ->count();
    }

    public function startCount() {
        return (new $this->meaning_word_model)
            ->join('english_words', 'english_word_meaning.word_id', '=', 'english_words.id')
            ->where('english_words.form', 'word')
            ->where(['learned' => 0])
            ->count();
    }

    public function constCount() {
        return (new $this->meaning_word_model)
            ->join('english_words', 'english_word_meaning.word_id', '=', 'english_words.id')
            ->where('english_words.form', 'word')
            ->where(['learned' => 1, 'const_done' => 0])
            ->count();
    }

    public function repeateCount() {
        return (new $this->meaning_word_model)
            ->join('english_words', 'english_word_meaning.word_id', '=', 'english_words.id')
            ->where('english_words.form', 'word')
            ->where(['learned' => 1, 'const_done' => 1, 'repeat' => 0])
            ->count();
    }

    public function learnedCount() {
        return (new $this->meaning_word_model)
            ->join('english_words', 'english_word_meaning.word_id', '=', 'english_words.id')
            ->where('english_words.form', 'word')
            ->where(['learned' => 1, 'const_done' => 1])
            ->count();
    }

}
