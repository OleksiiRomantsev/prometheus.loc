<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\myclasses\training\voronkaCounter;


class VoronkaController extends Controller {


    public function indexPage($lang) {

        $title = 'Voronka Training';

        $counter = new voronkaCounter($lang);
        $dbLevels = $counter->getLevels($lang);
        $countWords = $counter->countWords();

        $levels = array();
        if($dbLevels) foreach($dbLevels AS $l) {

            $count = $counter->oneIterationCount($l->voronka_iteration);

            $levels[$l->voronka_iteration] = array(
                'level' => $l->voronka_iteration,
                'count' => $count,
                'persent' => round(($count * 100 / $countWords),2)
            );
        }

        $levels = array_reverse($levels);

        //dd($levels);

        return view('pages.training.voronka', [
            'levels' => $levels,
            'title' => $title,
            'lang' => $lang
        ]);

    }

    public function showLevel($lang, $level) {
        $title = "Voronka level - {$level}";
        $level = (int)$level;
        $counter = new voronkaCounter($lang);
        $wordsMeaning = $counter->getLevelsWord($level);

        return view('pages.training.voronka_level', [
            'wordsMeaning' => $wordsMeaning,
            'title' => $title,
        ]);
    }

    // страница тренировки
    public function trainingPage($lang, $level) {

        $title = "Training voronka level #{$level}";

        $counter = new voronkaCounter($lang);
        $words = $counter->getLevelTrainingWords($level);

        if(!$words->count()) return redirect()->route('voronka.voronka_list', ['lang' => $lang]);

        return view('pages.training.voronka_training', [
            'words' => $words,
            'redirect_url' => route('voronka.voronka_training', ['lang' => $lang,'level' => $level]),
            'title' => $title,
            'lang' => $lang
        ]);
    }

    public function trainingAction(Request $request, $lang ,$result) {

        $wordMeaningId = $request->input('word_id', 0);
        $counter = new voronkaCounter($lang);
        $counter->trainingResultAction($wordMeaningId, $result);



        return response()->json([]);
    }

    // удаление данных о текущей воронке
    public function delVoronka(Request $request, $lang) {
        $counter = new voronkaCounter($lang);
        $counter->delVoronka();

        return redirect()->route('voronka.voronka_list', ['lang' => $lang]);
    }



}
