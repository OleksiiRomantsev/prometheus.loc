<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\myclasses\words\cambridgeAudio;
use App\Models\english\EnglishWordMeaning;
use App\Models\english\EnglishWord;
use App\myclasses\words\localAudioSaver;

class WordCreateController extends Controller
{
    //
    public function createWordPage() {

        $title = 'Create New English Word';

        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            'Words list' => route('words-list.listPage'),
            $title => $title
        );

        return view('pages.english.create_word_page', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs
        ]);
    }


    /**
     * Получение аудиодорожек
     * @param Request $request
     * @return mixed
     */
    public function getWorldInfo(Request $request) {

        $word = $request->input('word');
        list($trans, $audio_uk, $audio_us, $transcription) = (new cambridgeAudio)->getAudio($word);

        // get other meanings
        $word = EnglishWord::where('spelling', $word)->first();
        $other_meanings = ($word) ? $word->meanings : array() ;


        return response()->json([
            'status'        => true,
            'trans'         => $trans,
            'audio_uk'      => $audio_uk,
            'audio_us'      => $audio_us,
            'transcription' => $transcription,
            'other_meanings' => $other_meanings
        ]);
    }


    /**
     * FORM POST - создание нового слова.
     * @param Request $request
     */
    public function createWord(Request $request) {


        // создание слова
        $word = EnglishWord::where('spelling', $request->input('word'))->first();
        if(!$word) {

            // создание нового слова
            $word = new EnglishWord();
            $word->spelling = $request->input('word');
            $word->transcription = $request->input('transcription');
            $word->form = $request->input('form', 'word');
            $word->save();

            // добавление audio
            if($request->input('selected_audio_uk')) {
                $folder = config('app.english_word_folder');
                $word->audio_uk = (new localAudioSaver())->save($request->input('selected_audio_uk'), $word->id.'_uk', $folder);
                $word->audio_us = (new localAudioSaver())->save($request->input('selected_audio_us'), $word->id.'_us', $folder);
                $word->save();
            }
        }

        // создание перевода
        $meaning = new EnglishWordMeaning();
        $meaning->word_id = $word->id;
        $meaning->meaning = $request->input('translation');
        $meaning->save();

        return redirect()->route('english.word_page', array('id' => $meaning->id));
    }

}
