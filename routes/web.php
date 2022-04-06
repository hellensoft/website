<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[MainController::class,'index'])->name('index');
Route::get('standard_linux',[PageController::class,'standard_linux'])->name('standard_linux');
Route::get('premium_linux',[PageController::class,'premium_linux'])->name('premium_linux');
Route::get('email_essential',[PageController::class,'email_essential'])->name('email_essential');
Route::get('email_premium',[PageController::class,'email_premium'])->name('email_premium');
Route::get('bulk_sms',[PageController::class,'bulk_sms'])->name('bulk_sms');
Route::get('contact_us',[PageController::class,'contact_us'])->name('contact_us');
Route::post('contact-form',[PageController::class,'contact_form'])->name('contact-form');


// Domain search
Route::get('domain_search',[PageController::class,'domain_search'])->name('domain_search');
Route::get('terms',[PageController::class,'terms'])->name('terms');
Route::get('about', [PageController::class,'about'])->name('about');
