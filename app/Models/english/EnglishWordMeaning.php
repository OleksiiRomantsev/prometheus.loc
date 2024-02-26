<?php

namespace App\Models\english;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnglishWordMeaning extends Model
{
    use HasFactory;

    protected $table = 'english_word_meaning';
    public $timestamps = false;

    protected $fillable = array('id', 'word_id', 'meaning');


    public function word() {
        return $this->belongsTo(EnglishWord::class, 'word_id');
    }

    public function phrases() {
        return $this->hasMany(EnglishPhrases::class, 'meaning_id');
    }

}
