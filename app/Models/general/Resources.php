<?php

namespace App\Models\general;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resourses extends Model
{
    use HasFactory;

    protected $table = 'resourses';
    public $timestamps = false;

    protected $fillable = ['id', 'img', 'text', 'repeatt', 'training_count', 'start', 'cons'];



}