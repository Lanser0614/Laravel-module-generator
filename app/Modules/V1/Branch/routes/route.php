<?php

use Illuminate\Support\Facades\Route;
use App\Modules\V1\Branch\Http\Controllers\BranchController;



Route::group([

    'middleware' => 'api',
    'prefix' => '/branch',
    'as' => 'branch-v1',

], function ($router) {
    Route::get('/', [BranchController::class, 'all'])->name('all');
    Route::get('/{id?}', [BranchController::class, 'show'])->name('show');
    Route::post('/', [BranchController::class, 'create'])->name('create');
    Route::put('/{id?}', [BranchController::class, 'updateContent'])->name('updateContent');
    Route::delete('/{id?}', [BranchController::class, 'delete'])->name('delete');
});
