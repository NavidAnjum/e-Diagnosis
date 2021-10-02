<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicineNameController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cache Cleared!";
});

Route::get('/', function () {
        return view('content');
});

Route::get('/medicine_information', function () {
    return view('medicine_information.med_info');
});

Route::get('medicine_name',[MedicineNameController::class,'index' ]);


Route::get('/medicine','\App\Http\Controllers\NavidController@medicine')->name('show_medicine');


Route::get('/cart_save',[CartController::class,'index']);


Route::post('/cartitem',[CartController::class,'store'])->name('cart');


Route::get('/cart_items',[CartController::class,'cart_items']);

Require 'medicine_form.php';

Route::get('/cart_items',[CartController::class,'cart_items'])->name('cart_items');;

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Require 'medicine_order_confirmation.php';

Require 'sslcommerz.php';

Require 'admin.php';
