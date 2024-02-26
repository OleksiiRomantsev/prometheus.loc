<?php

namespace App\Models\patterns;

use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'number',
        'name',
        'block_id',
        'start',
        'cons',
        'cons_count'
    ]; // поля, которые можно заполнять
}
