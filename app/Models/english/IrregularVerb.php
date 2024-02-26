<?php

namespace App\Models\english;

use Illuminate\Database\Eloquent\Model;

class IrregularVerb extends Model
{
    protected $table = 'irregular_verbs';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'verb',
        'audio_us_verb',
        'audio_uk_verb',

        'meaning',

        'pastsimple',
        'audio_us_pastsimple',
        'audio_uk_pastsimple',

        'pastparticiple',
        'audio_us_pastparticiple',
        'audio_uk_pastparticiple',

        'type'
    ]; // поля, которые можно заполнять
}
