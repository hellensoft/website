<?php

use App\Http\Controllers\discordNotification;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
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
Route::get('startup',[PageController::class,'startup'])->name('startup');
Route::get('standard_linux',[PageController::class,'standard_linux'])->name('standard_linux');
Route::get('premium_linux',[PageController::class,'premium_linux'])->name('premium_linux');
Route::get('email_essential',[PageController::class,'email_essential'])->name('email_essential');
Route::get('email_premium',[PageController::class,'email_premium'])->name('email_premium');
Route::get('bulk_sms',[PageController::class,'bulk_sms'])->name('bulk_sms');
Route::get('contact_us',[PageController::class,'contact_us'])->name('contact_us');
Route::post('contact-form',[PageController::class,'contact_form'])->name('contact-form');
Route::get('service-enquiry',[ServiceController::class,'service_enquiry'])->name('service-enquiry');


// Domain search
Route::get('domain_search',[PageController::class,'domain_search'])->name('domain_search');
Route::get('terms',[PageController::class,'terms'])->name('terms');
Route::get('about', [PageController::class,'about'])->name('about');

//----Security and Migration-------
Route::get('ssl',[PageController::class,'ssl'])->name('ssl');
Route::get('domain-privacy',[PageController::class,'domain_privacy'])->name('domain-privacy');
Route::get('hosting-migration',[PageController::class,'hosting_migration'])->name('hosting-migration');



//---Discord Webhooks---//
Route::post('discord_contact',[discordNotification::class,'discord_contact'])->name('discord_contact');
Route::post('service_enquiry_req',[discordNotification::class,'service_enquiry_req'])->name('service_enquiry_req');

