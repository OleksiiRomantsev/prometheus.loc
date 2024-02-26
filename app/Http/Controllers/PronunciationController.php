<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PronunciationController extends Controller
{
    //
    public function germanPage() {
        $title = 'Pronunciation German';

        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            $title => ''
        );

       return view('pages.pronunciation.german',[
           'title' => $title,
           'breadcrumbs' => $breadcrumbs
       ]);
    }

    public function englishPage() {
        $title = 'Pronunciation English';

        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            $title => ''
        );

        return view('pages.pronunciation.english',[
            'title' => $title,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function francePage() {
        $title = 'Pronunciation France';

        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            $title => ''
        );

        return view('pages.pronunciation.france',[
            'title' => $title,
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
