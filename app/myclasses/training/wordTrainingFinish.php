<?php

namespace  App\myclasses\training;

use App\Models\english\EnglishWordMeaning;
use App\Models\german\GermanWordMeaning;

class wordTrainingFinish extends aTrainingFinish {

    protected $lang;
    protected $repeat_count;

    public function __construct($lang, $id, $repeat_count)
    {
        $this->lang = $lang;
        $this->repeat_count = $repeat_count;
        switch($lang) {
            case 'en': $this->model = EnglishWordMeaning::find($id); break;
            case 'de': $this->model = GermanWordMeaning::find($id); break;
        }
    }

}
