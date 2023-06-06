<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// This funtion is part of the default boilerplate
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**DEBUG: This listens for database queries and prints them**/
// \Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
//     echo'<pre>';
//     var_dump($query->sql);
//     var_dump($query->bindings);
//     var_dump($query->time);
//     echo'</pre>';
// });

Route::group(['middleware' => 'cors'], function(){
	// Auth::routes();

    Route::resource('item', 'ItemController', ['only' => [
        'index', 'store', 'show', 'destroy'
    ]]);

    // Copied from NoteWorthy
	// Route::resource('event', 'EventController', ['except' => [
	// 	'create', 'edit'
	// ]]);

    // Route::resource('event.image', 'ImageController', ['only' => [
    //     'index', 'store', 'show', 'destroy'
    // ]]);

	// Route::resource('category', 'CategoryController', ['only' => [
    //     'index', 'store', 'show', 'destroy'
	// ]]);
});

//This tells any OPTIONS request on any endpoint which methods are allowed
Route::options('{all}', function () {
    $response = Response::make('');

    $response->header('Access-Control-Allow-Origin', '*');
    $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, Authorization');
    $response->header('Access-Control-Expose-Headers', 'Content-Type, Cache-Control, Authorization');
    $response->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');
    $response->header('Access-Control-Allow-Credentials', 'true');
    $response->header('X-Content-Type-Options', 'nosniff');

    return $response;
})->where('all', '.*');
