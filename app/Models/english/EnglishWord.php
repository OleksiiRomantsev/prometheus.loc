<?php

namespace App\Models\english;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnglishWord extends Model
{
    use HasFactory;

    protected $table = 'english_words';
    public $timestamps = false;
    protected $fillable = array('id', 'spelling', 'audio_uk', 'audio_us', 'form');

    public function meanings()
    {
        return $this->hasMany(EnglishWordMeaning::class, 'word_id');
    }

}
