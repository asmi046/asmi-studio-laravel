<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioPageController;
use App\Http\Controllers\SenderController;

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

Route::get('/', [IndexController::class, 'index'])->name("home");
Route::get('/contacts', [ContactsController::class, 'index'])->name("contacts");
Route::get('/policy', [PolicyController::class, 'policy'])->name("policy");
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name("portfolio");
Route::get('/portfolio/{pagename}', [PortfolioPageController::class, 'portfolioportfolio_page'])->name("portfolio_page");

Route::post('/send', [SenderController::class, 'send_contact_form'])->name("send_contact_form");