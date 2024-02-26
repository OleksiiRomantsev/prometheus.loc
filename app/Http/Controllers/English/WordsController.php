<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use App\Models\english\EnglishWord;
use Illuminate\Http\Request;

use App\Models\english\EnglishWordMeaning;
use App\Models\english\EnglishPhrases;

use App\myclasses\training\wordTrainingGetter;

class WordsController extends Controller
{
    // страница редактирования слова
    public function wordPage($id) {

        $wordMeaning = EnglishWordMeaning::findOrFail($id);
        $wordMeaning->audio = $wordMeaning->word->audio_uk;
        $wordMeaning->audio_us = $wordMeaning->word->audio_us;

        $title = 'English Word Edit - '.$wordMeaning->word->spelling;

        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            'Words list' => route('words-list.listPage'),
            $title => ''
        );

        $word = EnglishWord::where('spelling', $wordMeaning->word->spelling)->first();
        $other_meanings = ($word) ? $word->meanings : array();


        $is_start = (new wordTrainingGetter('en'))->isStartWord($wordMeaning);

        if($wordMeaning->learned == 0) {
            $wordMeaning->status = 'Start';
        } elseif($wordMeaning->const_done == 0) {
            $wordMeaning->status = 'Consolidation';
        } else {
            $wordMeaning->status = 'Learned';
        }

        return view('pages.english.word', [
            'title'             => $title,
            'breadcrumbs'       => $breadcrumbs,
            'wordMeaning'       => $wordMeaning,
            'word'              => $word,
            'other_meanings'    => $other_meanings,
            'is_start'          => $is_start
        ]);
    }


    // (ajax) редактирование слова
    public function wordEditAction(Request $request) {

        $word_meaning_id = $request->input('id');
        $translation = $request->input('translation');

        $wordMeaning = EnglishWordMeaning::findOrFail($word_meaning_id);
        $wordMeaning->meaning = $translation;
        $wordMeaning->save();

        $wordMeaning->word->transcription = $request->input('transcription', '[]');
        $wordMeaning->word->form = $request->input('ligva_form', 'word');
        $wordMeaning->word->save();

        return response()->json(['status' => true]);
    }


    public function getPhrases(Request $request) {

        $id = $request->input('id');
        $word = EnglishWordMeaning::findOrFail($id);

        return response()->json(['status' => true, 'phrases' => $word->phrases, 'ph_count' => count($word->phrases)]);
    }


    public function addEditPhrases(Request $request) {

        if( $request->has('id') ) {
            $phrase = EnglishPhrases::findOrFail($request->id);
        } else {
            $phrase = new EnglishPhrases();
            $phrase->meaning_id = $request->input('meaning_id');

        }

        $phrase->rus        = $request->input('rus');
        $phrase->original   = $request->input('original');
        $phrase->comment    = $request->input('comment', '');
        $phrase->memorise   = (bool)$request->input('memorise', 0);
        $phrase->save();

        // увеличение счетчика фраз (только для новой фразы)
        if( !$request->has('id') ) {
            $phrase->word->increment('phrases_count');
            $phrase->word->repeat_count = 0;
            $phrase->word->repeat = 1;
            $phrase->word->save();
        }

        return response()->json(['status' => true]);
    }


    public function newLearnedWordsPage() {
        $lastWords = EnglishWordMeaning::where('learned', 1)->take(100)->orderBy('const_time', 'desc')->get();
        $title = 'Recently consolidated words';
        return view('pages.english.newwords', [
            'title'=> $title,
            'newwords' => $lastWords
        ]);
    }

}
