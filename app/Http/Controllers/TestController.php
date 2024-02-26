<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function testAction() {

        $title = 'Test page';

        return view('pages.test.test', [
            'title' => $title
        ]);
    }
    
    public function cronAction()
    {

        // повторение слов
        DB::table('english_word_meaning')->where('learned', 1)->where('const_done', 1)->where('repeat', '>', 0)->decrement('repeat');

        // плавное уменьшения рейтинга паттернов
        DB::table('patterns')->decrement('repeatt');

        die('cron ok');

    }
    
}
