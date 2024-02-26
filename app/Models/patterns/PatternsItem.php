<?php

namespace App\Models\patterns;

use Illuminate\Database\Eloquent\Model;

class PatternsItem extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['rus', 'eng', 'pattern_id', 'study'];
}
