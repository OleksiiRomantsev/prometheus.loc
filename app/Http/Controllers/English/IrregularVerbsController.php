<?php

namespace App\Http\Controllers\English;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\english\IrregularVerb;

class IrregularVerbsController extends Controller
{
    // главная страница "неправильных глаголов"
    public function indexPage() {

        // получаем неправильные глаголы
        $verbs = IrregularVerb::where('type', '>', 0)->orderBy('type')->get();

        // хлебные крошки
        $title = 'Изучение неправильных глаголов';
        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            $title => $title
        );

        return view('pages/english/irregularVerbs', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'verbs' => $verbs,
        ]);
    }


    // страница "добавить глагол"
    public function addPage() {

        // хлебные крошки
        $breadcrumbs = array(
            ['link' => route('MainPage'), 'name' => 'Главная страница'],
            ['link' => route('irregularVerbsPage'), 'name' => 'Изучение неправильных глаголов'],
            ['link' => '#', 'name' => 'Добавление']
        );

        return view('english/verbs/addVerbs', [
            'title' => 'Добавление неправильных глаголов',
            'breadcrumbs' => $breadcrumbs,
        ]);
    }


    // FORM обработка формы добавления
    public function addAction(Request $request) {

        $verb               = new IrregularVerb();
        $verb->verb         = $request->verb;
        $verb->meaning      = $request->meaning;
        $verb->pastsimple   = $request->pastsimple;
        $verb->pastparticiple = $request->pastparticiple;
        $verb->type         = $request->type;

        $verb->save();

        return redirect()->back();
    }

    // страница фонетического алфавита
    public function phoneticAlphabetPage() {

        return view('english/phonetic');
    }

    /**
     * Irrengular verb edit
     */
    public function showVerb($id) {

        $verb = IrregularVerb::find($id);

        return view('english/verbs/edit', [
            'verb' => $verb,
        ]);
    }

    /**
     *
     */
    public function editAction(Request $request) {

        $verb               = IrregularVerb::find($request->id);

        $verb->verb         = $request->verb;
        $verb->audio_uk_verb = $request->audio_uk_verb;
        $verb->audio_us_verb = $request->audio_us_verb;

        $verb->meaning      = $request->meaning;

        $verb->pastsimple   = $request->pastsimple;
        $verb->audio_us_pastsimple   = $request->audio_us_pastsimple;
        $verb->audio_uk_pastsimple   = $request->audio_uk_pastsimple;

        $verb->pastparticiple = $request->pastparticiple;
        $verb->audio_us_pastparticiple   = $request->audio_us_pastparticiple;
        $verb->audio_uk_pastparticiple   = $request->audio_uk_pastparticiple;

        $verb->type         = $request->type;

        $verb->save();

        return redirect()->back();

    }



}
