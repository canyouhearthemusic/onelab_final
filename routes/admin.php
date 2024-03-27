<?php

use App\Http\Controllers\OrderController;

Route::middleware('role:admin')->name('admin.')->group(function () {
    Route::resource('orders', OrderController::class)->only(['index', 'show', 'update']);
});