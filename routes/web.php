<?php

use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WordsListController;
use App\Http\Controllers\PronunciationController;
use App\Http\Controllers\statistic\EnglishStatController;
use App\Http\Controllers\English\WordCreateController AS EngWordCreateController;
use App\Http\Controllers\English\WordsController AS EnglishWordsController;
use App\Http\Controllers\English\IrregularVerbsController;
use App\Http\Controllers\Training\WordsTrainingController;
use App\Http\Controllers\Training\VoronkaController;
use App\Http\Controllers\Training\PatternsController;

use App\Http\Controllers\resources\ResourcesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main page
Route::get('/', MainController::class)->name('mainPage');
Route::get('/test', [TestController::class, 'testAction'])->name('testPage');
Route::get('/cron', [TestController::class, 'CronAction'])->name('cron_page');

// words list
Route::prefix('words-list')->name('words-list.')->group(function() {
    Route::get('/', [WordsListController::class, 'wordsListPage'])->name('listPage');
    Route::post('/get_words_list', [WordsListController::class, 'getWordsList'])->name('get_words_list');
});

// English
Route::prefix('english')->name('english.')->group(function () {

    Route::get('create', [EngWordCreateController::class, 'createWordPage'])->name('createWordPage');
    Route::post('/get-word-info', [EngWordCreateController::class, 'getWorldInfo'])->name('get_word_info');
    Route::post('/create', [EngWordCreateController::class, 'createWord'])->name('create_word_action');

    Route::get('/word/{id}', [EnglishWordsController::class, 'wordPage'])->name('word_page');
    Route::post('/word-edit', [EnglishWordsController::class, 'wordEditAction'])->name('word_edit');
    Route::post('/get-phrases-list', [EnglishWordsController::class, 'getPhrases'])->name('get_phrases');
    Route::post('/edit-add-phrase', [EnglishWordsController::class, 'addEditPhrases'])->name('edit_add_phrase');

    Route::get('/newwords', [EnglishWordsController::class, 'newLearnedWordsPage'])->name('newLearnedWordsPage');

    Route::prefix('irregular-verbs')->group(function() {
        Route::get('/', [IrregularVerbsController::class, 'indexPage'])->name('irregular-verbs');
    });

});

// pronunciation
Route::prefix('pronunciation')->name('pronunciation.')->group(function() {
    Route::get('/german', [PronunciationController::class, 'germanPage'])->name('german');
    Route::get('/english', [PronunciationController::class, 'englishPage'])->name('english');
    Route::get('/france', [PronunciationController::class, 'francePage'])->name('france');
});

// statistic
Route::prefix('statistic')->name('statistic.')->group(function () {

    Route::get('english-words', EnglishStatController::class)->name('english_words');

});


// trainings
Route::prefix('training')->namespace('training')->name('training.')->group(function() {

    // слова (?????)
    Route::get('word/{lang}/{training_type_code}/{id?}', [WordsTrainingController::class, 'TrainingPage'])->name('wordTrainingPage');
    Route::post('/getwords', [WordsTrainingController::class, 'getWords'])->name('get_words');
    Route::post('/success-word/{lang}/{id}', [WordsTrainingController::class, 'successWord'])->name('success_word');
    Route::post('/success-word-spec/{lang}/{id}', [WordsTrainingController::class, 'successWordSpec'])->name('success_word_spec');

});


// воронка
Route::prefix('voronka')->name('voronka.')->group(function () {

    Route::get('/list/{lang}', [VoronkaController::class, 'indexPage'])->name('voronka_list');
    Route::get('/level/{lang}/{level}', [VoronkaController::class, 'showLevel'])->name('level');
    Route::get('/training/{lang}/{level}', [VoronkaController::class, 'trainingPage'])->name('voronka_training');
    Route::post('/training/{lang}/{result}', [VoronkaController::class, 'trainingAction'])->name('voronka_training_action');
    Route::get('/{lang}/del_voronka', [VoronkaController::class, 'delVoronka'])->name('del_voronka');
//
//    Route::get('/random-word', 'instruments\DiffController@randomWord')->name('random_word');
});

// паттерны
Route::prefix('patterns')->name('patterns.')->group(function() {
    Route::get('/list/{lang}', [PatternsController::class, 'listPage'])->name('listPage');
    Route::get('/add/{lang}', [PatternsController::class, 'addPage'])->name('addPage');
    Route::post('/add', [PatternsController::class, 'addAction'])->name('addAction');
    Route::post('/get_pattern_list', [PatternsController::class, 'patternListAction'])->name('pattern_list_action');
    Route::get('/show/{id}', [PatternsController::class, 'showPatternPage'])->name('pattern_page');
    Route::post('/add-edit-item', [PatternsController::class, 'addEditItemAction'])->name('add_edit_item');
    Route::get('/training/{id}', [PatternsController::class, 'trainingPage'])->name('training');
    Route::post('/training', [PatternsController::class, 'trainingAction'])->name('training-success');

});


Route::prefix('resources')->name('resources.')->group(function() {
    Route::get('/', [ResourcesController::class, 'listPage'])->name('listPage');
    Route::get('/create', [ResourcesController::class, 'createPage'])->name('create');
});








