<?php

namespace  App\myclasses\training;

use App\Models\english\EnglishWordMeaning;

/**
 * Class aWordTraining
 * Определяет условия тренировки слов
 * @package App\myclasses\training
 */
abstract class aWordTraining {

    protected $meaning_word_model;
    protected $phrases_count;
    protected $words_training_count;
    protected $lang;

    public function __construct($lang = 'en')
    {
        switch($lang) {
            case 'en':
                $this->meaning_word_model = EnglishWordMeaning::class;
                $this->phrases_count = config('app.phrases_count');

                break;
//            case 'de':
//                $this->meaning_word_model = GermanWordMeaning::class;
//                $this->phrases_count = config('app.german_phrases_count');
//                break;
        }

        $this->lang = $lang;

        $this->words_training_count = config('app.words_training_count');
    }

    protected function startTraining() {
        return $this->meaning_word_model::where(['learned' => 0])->where('phrases_count', '>=', $this->phrases_count);
    }

    protected function constTraining() {
        return $this->meaning_word_model::where(['learned' => 1, 'const_done' => 0])->where('const_time', '<', toTimestampFormat());
    }

    protected function repeateTraining() {
        return $this->meaning_word_model::where(['learned' => 1, 'const_done' => 1, 'repeat' => 0]);
    }

}
