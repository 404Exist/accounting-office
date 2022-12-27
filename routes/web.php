<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\Admin\Entities\Text;

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



Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', function () {
        return view('index');
    })->name('home');
    Route::get('/team', fn() => view('index'))->name('team');
    Route::get('/o-nas', fn() => view('index'))->name('about_us');
    Route::get('/polityka-prywatnosci', fn() => view('index'))->name('privacy_policy');
    Route::get('/oferta', fn() => view('index'))->name('offer');
    Route::get('/pelna-ksiegowosc', fn() => view('index'))->name('full_accountancy');
    Route::get('/ksiega-przychodow-i-rozchodow', fn() => view('index'))->name('kpir_accounting');
    Route::get('/ewidencja-ryczaltu', fn() => view('index'))->name('lump_sum_accounting');
    Route::get('/kadry-i-place', fn() => view('index'))->name('managing_hR_and_payroll');
    Route::get('/zakladanie-firmy', fn() => view('index'))->name('establishment_of_the_company');
    Route::get('/doradztwo-podatkowe', fn() => view('index'))->name('tax_consultancy');
    Route::get('/wirtualne-biuro', fn() => view('index'))->name('virtual_office');
    Route::get('/darmowa-strona-internetowa', fn() => view('index'))->name('free_website');
    Route::get('/kontakt', fn() => view('index'))->name('contact');
    Route::get('/strefa-uzytkownika', fn() => view('index'))->name('user_zone');
    Route::get('/korzyści-księgowe', fn() => view('index'))->name('find_out_more');
    // https://www.lemontax.pl/ewidencja-ryczaltu
});
