<?php

use Illuminate\Support\Facades\Route;
use App\Module\V1\Branch\Controllers\BranchController;



Route::group([

    'middleware' => 'api',
    'prefix' => '/branch',
    'as' => 'branch-v1.'

], function ($router) {
    // search, order, pagination, filter ?optional
    Route::get('/', [ BranchController::class, 'all' ])->name('all');

});
