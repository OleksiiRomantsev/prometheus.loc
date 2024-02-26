<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\myclasses\words\getWordsList;

class WordsListController extends Controller
{
    // страница - список слов
    public function wordsListPage() {

        $title = 'Words List';
        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            'Words List' => ''
        );

        return view('pages.words.words_list', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // (ajax) получение списка слов
    public function getWordsList(Request $request) {

        list($words, $total) = (new getWordsList($request->input('filter'), $request->input('pagination')))();
        return response()->json(['status' => true, 'words' => $words, 'total' => $total]);
    }
}
