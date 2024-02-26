<?php

namespace App\Models\english;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnglishPhrases extends Model
{
    use HasFactory;

    protected $table = 'english_phrases';
    public $timestamps = false;
    protected $fillable = array('id', 'meaning_id', 'rus', 'original');

    public function word() {
        return $this->belongsTo(EnglishWordMeaning::class, 'meaning_id');
    }
}
