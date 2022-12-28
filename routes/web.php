<?php

use App\Http\Controllers\SendContactMessageContoller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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
    Route::get('/', fn() => view('index'))->name('home');
    Route::get('/o-nas', fn() => view('about_us'))->name('about_us');
    Route::get('/polityka-prywatnosci', fn() => view('index'))->name('privacy_policy');
    Route::get('/pelna-ksiegowosc', fn() => view('full_accountancy'))->name('full_accountancy');
    Route::get('/ksiega-przychodow-i-rozchodow', fn() => view('ledger'))->name('ledger');
    Route::get('/ewidencja-ryczaltu', fn() => view('registerd_lump_sum'))->name('registerd_lump_sum');
    Route::get('/kadry-i-place', fn() => view('hr_and_payroll'))->name('hr_and_payroll');
    Route::get('/zakladanie-firmy', fn() => view('establishment_of_the_company'))->name('establishment_of_the_company');
    Route::get('/doradztwo-podatkowe', fn() => view('tax_consultancy'))->name('tax_consultancy');
    Route::get('/wirtualne-biuro', fn() => view('virtual_office'))->name('virtual_office');
    Route::get('/darmowa-strona-internetowa', fn() => view('free_website'))->name('free_website');
    Route::get('/team', fn() => view('team'))->name('team');
    Route::get('/kontakt', fn() => view('contact'))->name('contact');
    Route::post('/kontakt', SendContactMessageContoller::class)->name('contact');

    // Route::get('/strefa-uzytkownika', fn() => view('user_zone'))->name('user_zone');
    // Route::get('/korzyści-księgowe', fn() => view('index'))->name('find_out_more');
    // Route::get('/oferta', fn() => view('index'))->name('offer');
    // https://www.lemontax.pl/ewidencja-ryczaltu
});
