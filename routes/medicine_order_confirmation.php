<?php

use App\Http\Controllers\Medicine_Delivery_Controller;

Route::get('/medicine_order_confirmation', [Medicine_Delivery_Controller::class, 'index']);

