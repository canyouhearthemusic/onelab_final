<?php

use App\Http\Controllers\DashboardController;

Route::middleware('role:admin')->name('admin.')->group(function () {
    
});