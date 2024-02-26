<?php

namespace App\Models\general;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    use HasFactory;

    protected $table = 'scores';
    public $timestamps = false;

    protected $fillable = ['id', 'date', 'points'];



}
