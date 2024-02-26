<?php

namespace App\Http\Controllers\statistic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\english\EnglishWordMeaning;

use App\myclasses\stat\WordsStat;

class EnglishStatController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $title = 'English words statistic';

        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            'Words list' => route('words-list.listPage'),
            $title => ''
        );

        $counter = new WordsStat('en');
        $all = $counter->allCount();
        $start = $counter->startCount();
        $const = $counter->constCount();
        $repeate = $counter->repeateCount();
        $learned = $counter->learnedCount();
        //$learned = $counter->specLearnedCount();
        //$start = $counter->specStartCount();


        $stat_info = [$learned, $start, $const, $repeate];
        $labels_info = ['Learned', 'Start', 'Consolidation', 'Repeat'];

        // spline chart
        $spline_chart_dates = [
            date("Y-m-d")
        ];

        $spline_chart_data = array(
            'name' => 'Repeat words',
            'data' => [$repeate]
        );

        for($i = 1; $i < 5; $i++ ) {
            $spline_chart_dates[] = date('Y-m-d',strtotime("+{$i} days"));
            $repeate_future = EnglishWordMeaning::where(['learned' => 1, 'const_done' => 1, 'repeat' => $i])->count();
            $spline_chart_data['data'][] = $repeate_future;
        }

        return view('pages.stat.english',[
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'all' => $all,
            'start' => $start,
            'const' => $const,
            'repeate' => $repeate,
            'learned' => $learned,
            'labels_info' => $labels_info,
            'stat_info' => $stat_info,
            'spline_chart_dates' => $spline_chart_dates,
            'spline_chart_data' => $spline_chart_data

        ]);

    }
}
