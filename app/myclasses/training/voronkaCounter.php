<?php

namespace App\myclasses\training;

use App\Models\english\EnglishWordMeaning;
//use App\Models\german\GermanWordMeaning;

class voronkaCounter {

    protected $lang;
    protected $model;

    public function __construct($lang) {


        $this->lang = $lang;
        switch($lang) {
            case 'en': $this->model = EnglishWordMeaning::class; break;
            //case 'de': $this->model = GermanWordMeaning::class; break;
        }

    }

    // Получение существующих уровней
    public function getLevels() {

        return $this->model::where('learned', 1)->where('const_done', 1)->select('voronka_iteration')->distinct()->get();
    }

    // получение общего кол-во слов
    public function countWords() {
        return $this->model::where('learned', 1)->where('const_done', 1)->count('id');
    }

    public function oneIterationCount($iteration) {

        return $this->model::where('learned', 1)->where('const_done', 1)->where('voronka_iteration', $iteration)->count('id');
    }

    /**
     * Get voronka level word
     * @param int $level
     * @return mixed
     */
    public function getLevelsWord(int $level) {

        return $this->model::where([
                'learned' => 1,
                'const_done' => 1,
                'voronka_iteration' => $level])->get();

    }

    /**
     * Получаем слова для тренировки уровня воронки
     * @param int $level
     * @param int $count
     * @return mixed
     */
    public function getLevelTrainingWords(int $level, int $count = 5) {
        $res = $this->model
            ::where([
                'learned' => 1,
                'const_done' => 1,
                'voronka_iteration' => $level,
                'voronka_pass' => 0])->take($count)->inRandomOrder()->get();

        return $res;
    }

    /**
     * @param int $wordMeaningId
     * @param int $result
     */
    public function trainingResultAction(int $wordMeaningId, int $result) {

        $word = $this->model::find($wordMeaningId);

        if($result == 1) {
            // успех - слово прошло
            $word->voronka_pass = 1;

        } else {
            // ошибка - увеличиваем уровень воронки
            $word->voronka_iteration++;
        }

        $word->save();
    }


    public function delVoronka() {
        $this->model::where('id', '>', 0)->update(['voronka_pass' => 0, 'voronka_iteration' => 0]);
    }

}
