<?php

namespace  App\myclasses\training;
use Illuminate\Database\Eloquent\Model;

class wordTrainingGetter extends aWordTraining {

    public function getWords($training_code) {

        switch($training_code) {
            case 1: $words = $this->getStartedTrainingWords(); break;
            case 2: $words = $this->getConstTrainingWords(); break;
            case 3: $words = $this->getRepeateTrainingWords(); break;
        }

        $words = $this->formWordsData($words);

        return $words;
    }

    protected function getStartedTrainingWords($id = 0) {

        $queryBuider = $this->startTraining()->take( 1 );
        if($id) $queryBuider->where('id', $id);
        return $queryBuider->inRandomOrder()->get();
    }

    protected function getStartedTrainingWord($id) {
        return $this->startTraining()->where('id', $id)->take( 1 )->get();
    }

    protected function getConstTrainingWords() {
        return $this->constTraining()->take( $this->words_training_count )->inRandomOrder()->get();
    }

    protected function getRepeateTrainingWords() {
        return $this->repeateTraining()->take( $this->words_training_count )->inRandomOrder()->get();
    }

    protected function formWordsData($words) {

        $res = array();

        if($words) foreach($words AS $word) {

            if(isset($word->word->articles) AND $word->word->articles != '') {
                $word->word->spelling .= ', '.$word->word->articles;
            }

            // select prefer english audio
            $audio_en = env('PREFER_AUDIO', 'UK');
            $audio_en = ($audio_en === 'UK') ? $word->word->audio_uk : $word->word->audio_us;

            $res[] = array(
                'audio' => (isset($word->word->audio)) ? $word->word->audio : $audio_en ,
                'spelling' => $word->word->spelling,
                'transcription' => $word->word->transcription,
                'meaning' => $word->meaning,
                'phrases' => $word->phrases()->inRandomOrder()->get(),
                'url_success' => route('training.success_word', ['lang' => $this->lang, 'id' => $word->id]),
                'form' => $word->word->form
            );
        }

        return $res;
    }

    /**
     * Check if this word model enable for start training
     * @param Model $model
     * @return bool
     */
    public function isStartWord(Model $model) : bool {
        $res = false;

        if($model->learned == 0 AND $model->phrases_count >= $this->phrases_count) {
            $res = true;
        }

        return $res;
    }


    public function getDirectWord(int $training_code, int $id) {

        switch($training_code) {
            case 1: $words = $this->getStartedTrainingWords($id); break;
            case 2: $words = $this->getConstTrainingWords(); break;
            case 3: $words = $this->getRepeateTrainingWords(); break;
        }

        $words = $this->formWordsData($words);

        return $words;
    }

}
