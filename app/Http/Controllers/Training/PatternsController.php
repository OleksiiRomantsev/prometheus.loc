<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\patterns\Pattern;
use App\Models\patterns\PatternsItem;
use App\Models\general\Scores;

use App\myclasses\training\patternTraining;


class PatternsController extends Controller {

    /**
     * Страница - список паттернов
     */
    public function listPage($lang) {

        $title = 'List of patterns';

        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            $title => ''
        );

        return view('pages.patterns.list', [
            'lang' => $lang,
            'title' => $title,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    /**
     * Страница создания нового паттерна
     */
    public function addPage($lang) {

        $title = 'Add new pattern';

        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            'Pattern List' => route('patterns.listPage', ['lang' => $lang]),
            $title => ''
        );

        return view('pages.patterns.add', [
            'lang' => $lang,
            'title' => $title,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    /**
     * Creation of a new pattern
     * @param Request $request
     */
    public function addAction(Request $request) {

        $pattern = new Pattern();
        $pattern->lang      = $request->input('lang');
        $pattern->number    = $request->input('number');
        $pattern->name      = $request->input('name');
        $pattern->block_id  = $request->input('block_id', 0);
        $pattern->save();

        return redirect()->route('patterns.pattern_page', ['id' => $pattern->id]);
    }

    /**
     *
     */
    public function patternListAction(Request $request) {

        $filter = $request->input('filter');

        $trainer = new patternTraining($filter['lang']);

        $patternsList = $trainer->getPatternList($filter);

        return response()->json(['status' => true, 'patterns' => $patternsList]);
    }

    /**
     * Страница одного паттерна
     * @param $id
     */
    public function showPatternPage($id) {

        $pattern = Pattern::findOrfail($id);
        $items = PatternsItem::where('pattern_id', $id)->get();
        $items_count = count($items);

        $title = "Pattern Page {$pattern->name} ";
        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            'Patterns list' => route('patterns.listPage', ['lang' => $pattern->lang]),
            $title => $title
        );

        return view('pages.patterns.one', [
            'breadcrumbs'   => $breadcrumbs,
            'title'         => $title,
            'pattern'       => $pattern,
            'items'         => $items,
            'items_count'   => $items_count
        ]);
    }


    /**
     * Add/Edit items
     */
    public function addEditItemAction(Request $request) {

        $id = $request->input('id', null);
        $rus = $request->input('rus', '');
        $eng = $request->input('eng', '');

        if($id) {
            $item = PatternsItem::findOrFail($id);
        } else {
            $item = new PatternsItem();
            $item->pattern_id = $request->input('pattern_id');
        }

        $item->eng = $eng;
        $item->rus = $rus;
        $item->save();

        return response()->json(['status' => true, 'item'=> $item]);
    }

    /**
     * Training page
     */
    public function trainingPage($id) {

        $pattern = Pattern::findOrfail($id);
        $items = PatternsItem::where('pattern_id', $id)->get();
        $items_count = count($items);

        $title = "Pattern Training";

        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            'Patterns list' => route('patterns.listPage', ['lang' => $pattern->lang]),
            "Pattern -  {$pattern->name} " => route('patterns.pattern_page', ['id' => $pattern->id]),
            $title => ''
        );

        return view('pages.patterns.training', [
            'title'         => $title,
            'breadcrumbs'   => $breadcrumbs,
            'items'         => $items,
            'pattern'       => $pattern,
            'items_count'   => $items_count
        ]);
    }

    /**
     * Успешное завершение паттерна
     * @param Request $request
     */
    public function trainingAction(Request $request) {

        $id = $request->input('pattern_id');
        $pattern = Pattern::findOrfail($id);
        $count = PatternsItem::where('pattern_id', $id)->count();

        // увеличение счетчика повторений
        $pattern->repeatt += 30;
        $pattern->training_count++;
        $pattern->save();

        // начисление баллов за прохождение
        Scores::updateOrCreate(
            ['date' => date("Y-m-d")],
        )->increment('points', $count);

        response()->json(['status' => true]);
    }

}
