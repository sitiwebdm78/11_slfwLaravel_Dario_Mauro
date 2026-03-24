<?php

use App\Http\Controllers\OurtoursController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use Symfony\Component\Routing\Route as RoutingRoute;

Route::get('/', [PublicController::class, 'fnhpnapolimania' ])->name('rthpnapolimania');
Route::get('/ourtours/visitdetail{id}', [OurtoursController::class, 'fnpgVisitdetail'])->name('visit.rtvisitdetail');
Route::get('/aboutus', [PublicController::class, 'fnpgAboutus' ])->name('rtaboutus');
Route::get('/contatcts', [PublicController::class, 'fnpgContacts'])->name('rtcontacts');
Route::post('/contacts-us' , [PublicController::class, 'fnpgContactUs'])->name('rtcontact-us');

Route::get('/ourtours', [OurtoursController::class, 'fnpgourTours'])->name('visit.rtourtours');
Route::get('/visit/create', [OurtoursController::class, 'fnCreate'])->name('visit.rtcreate')->middleware('auth');
Route::post('visit/submit', [OurtoursController::class, 'fnVisitStore'])->name('visit.rtsubmit');