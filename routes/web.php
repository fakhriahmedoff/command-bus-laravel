<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/command',function () {
    $columns = \Illuminate\Support\Facades\DB::getSchemaBuilder()->getColumnListing('posts');
    dd($columns);
});
Route::resource('/',\App\Http\Controllers\PostController::class)->names('posts');
Route::get('/test', function (\Illuminate\Support\Facades\Request $request) {
    \App\Events\SendMessage::dispatch($request->test);
    dd('Event fired.');
});
