<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\myclasses\training\wordTrainingCounter;
use App\Models\general\Scores;

use App\myclasses\stat\WordsStat;
use App\Models\general\MotivationPic;


class MainController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $title = 'MainPage';

        $englishWordCounter = new wordTrainingCounter('en');

        $points = Scores::sum('points');

        $counter = new WordsStat('en');
        $all = $counter->allCount();
        $start = $counter->startCount();
        $const = $counter->constCount();
        $repeate = $counter->repeateCount();
        $learned = $counter->learnedCount();


        // motivation picture
        $img = (new MotivationPic())($all, $learned);
        //dd($img);

        //
        return view('pages.mainpage', [
            'noTopBlock' => true,
            'title' => $title,
            'englishWordCounter' => $englishWordCounter,
            'points' => $points,

            'all' => $all,
            'start' => $start,
            'const' => $const,
            'repeate' => $repeate,
            'learned' => $learned,

            'img' => $img
        ]);
    }



}
