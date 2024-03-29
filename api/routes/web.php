<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::prefix('api')->group(
    function () {
        Route::get('donate_categories', [MainController::class, 'getAllDonateCategories']);
    }
);
Route::prefix('api')->group(
    function () {
        Route::get('donate_categories/{donate_category_id}/donate_lots', [MainController::class, 'getAllDonateLots']);
    }
);
