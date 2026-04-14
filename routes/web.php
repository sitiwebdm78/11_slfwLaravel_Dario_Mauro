<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OurtoursController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MyTourController;

//Rotte gestite dal MyToursController
Route::get('mytours/create', [MyTourController::class, 'create'])->name('mytours.create');
Route::post('mytours/create/submit', [MyTourController::class, 'store'])->name('mytours.submit');
Route::get('mytours/index', [MyTourController::class, 'index'])->name('mytours.index')->middleware('auth');
Route::get('mytours/show/{mytour}', [MyTourController::class, 'show'])->name('mytours.show')->middleware('auth');
Route::get('mytours/edit/{mytour}', [MyTourController::class, 'edit'])->name('mytours.edit')->middleware('auth');
Route::put('mytours/update/{mytour}', [MyTourController::class, 'update'])->name('mytours.update');
Route::delete('mytours/delete/{mytour}', [MyTourController::class, 'destroy'])->name('mytours.delete');

//Rotte gestite dal Public Controller
Route::get('/', [PublicController::class, 'fnhpnapolimania' ])->name('rthpnapolimania');
Route::get('/aboutus', [PublicController::class, 'fnpgAboutus' ])->name('rtaboutus');
Route::get('/contacts', [PublicController::class, 'fnpgContacts'])->name('rtcontacts');
Route::post('/contacts-us' , [PublicController::class, 'fnpgContactUs'])->name('rtcontact-us');

//Rotte gestite dal OurtoursController
Route::get('/ourtours', [OurtoursController::class, 'fnpgourTours'])->name('visit.rtourtours');
Route::get('/visit/create', [OurtoursController::class, 'fnCreate'])->name('visit.rtcreate')->middleware('auth');
Route::post('visit/submit', [OurtoursController::class, 'fnVisitStore'])->name('visit.rtsubmit')->middleware('auth');
Route::get('/ourtours/visitdetail/{monument}', [OurtoursController::class, 'fnpgVisitdetail'])->name('visit.rtvisitdetail');
Route::get('monument/edit/{monument}', [OurtoursController::class, 'edit'])->name('monument.edit')->middleware('auth');
Route::put('monument/update/{monument}', [OurtoursController::class, 'update'])->name('monument.update')->middleware('auth');

//Category
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/create/submit', [CategoryController::class, 'store'])->name('category.submit')->middleware('auth');
Route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/show/{category}', [CategoryController::class, 'show'])->name('category.show');
