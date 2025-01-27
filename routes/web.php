<?php

use A17\Blast\Controllers\StoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

if (config('blast.enabled')) {
    Route::get('/storybook_preview/{name?}', StoryController::class)->where(
        'name',
        '.*',
    );
}
