<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\myclasses\training\wordTrainingGetter;
use App\myclasses\training\wordTrainingFinish;

class WordsTrainingController extends Controller
{
    // единая страница тренировки слов
    public function TrainingPage($lang, $training_type_code, $id = 0) {

        $training_type = getTrainingTypeInfo($training_type_code);
        $title = 'Words training page ('.$training_type['name'].')';

        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            $title => ''
        );

        return view('pages.training.words',[
            'title'         => $title,
            'breadcrumbs'   => $breadcrumbs,
            'lang'          => $lang,
            'training_type' => $training_type,
            'id'            => $id
        ]);
    }

    /**
     * (AJAX) Получение списка слов для тренировки
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getWords(Request $request) {

        $lang = $request->input('lang');
        $tr = $request->input('training_type_code');
        $id = $request->input('id');

        $wordsGetter = new wordTrainingGetter($lang);
        $words = ($id > 0) ? $wordsGetter->getDirectWord($tr, $id) : $wordsGetter->getWords($tr) ;

        return response()->json(['words' => $words]);
    }

    /**
     *
     * @param Request $request
     * @param $lang
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function successWord(Request $request, $lang, $id) {

        $wordTrainingFinish = new wordTrainingFinish($lang, $id, $request->input('repeat_count', 0));
        $wordTrainingFinish();
        return response()->json(['status' => true]);
    }

    public function successWordSpec(Request $request, $lang, $id) {

        $wordTrainingFinish = new wordTrainingFinish($lang, $id, $request->input('repeat_count', 0));

        // start
        $wordTrainingFinish();

        // cons
        $wordTrainingFinish();
        $wordTrainingFinish();
        $wordTrainingFinish();

        return response()->json(['status' => true]);
    }



}
