<?php
use App\Http\Controllers\BabycareController;
use App\Http\Controllers\FeminieHygieneController;
use App\Http\Controllers\HealthbeautyController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\ViewMedicine;
use App\Http\Controllers\WelbeingController;

Route::get('/medicine_form','\App\Http\Controllers\MedicineController@index');
Route::post('/save_med', [MedicineController::class, 'store'])->name('save_med');

Route::get('/babycare_form',[BabycareController::class,'index']);
Route::post('/babycare',[BabycareController::class,'store'])->name('babycare');

Route::get('/feminine_form',[FeminieHygieneController::class,'index']);

Route::post('/feminine',[FeminieHygieneController::class,'store'])->name('feminine');

Route::get('/welbeing_form',[WelbeingController::class,'index']);

Route::post('/welbeing',[WelbeingController::class,'store'])->name('welbeing');

Route::get('/health_form',[HealthbeautyController::class,'index']);
Route::post('/health',[HealthbeautyController::class,'store'])->name('health');

Route::get('/other_form',[OtherController::class,'index']);

Route::post('/other',[OtherController::class,'store'])->name('other');

Route::get('/view_medicine',[ViewMedicine::class,'index']);

Route::get('/baby',[BabycareController::class,'babycare']);

Route::get('/feminine',[FeminieHygieneController::class,'feminine']);

Route::get('/wel',[WelbeingController::class,'wel']);

Route::get('/healthbeauty',[HealthbeautyController::class,'healthbeauty']);

Route::get('/other_items',[OtherController::class,'other_items']);
