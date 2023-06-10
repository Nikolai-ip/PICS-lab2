<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
/*|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
Route::get('/articles', 'App\Http\Controllers\ArticleController@index')->name('articles.index');

Route::get('/articles/{code}', 'App\Http\Controllers\ArticleController@filterByTag')->name('articles.code');