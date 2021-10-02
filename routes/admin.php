<?php

use App\Http\Controllers\HomeController;

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
