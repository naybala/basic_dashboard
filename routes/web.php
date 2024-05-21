<?php

use App\Http\Controllers\LangController;
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

require __DIR__ . "/Guest/guestRoute.php";
require __DIR__ . "/Localization/localizationRoute.php";
Route::group(['middleware' => ['auth']], function () {
   Route::get('/base',function(){
        dd("Hello");
   });
});