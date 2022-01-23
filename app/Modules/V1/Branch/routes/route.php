<?php

use Illuminate\Support\Facades\Route;
use App\Modules\V1\Branch\Http\Controllers\BranchController;



Route::group([

    'middleware' => 'api',
    'prefix' => '/branch',
    'as' => 'branch-v1',

], function ($router) {
    Route::get('/pets', [BranchController::class, 'getPets'])->name('test');
    Route::post('/pets', [BranchController::class, 'createPet'])->name('test');
    Route::put('/pets/{id}/{ss}', [BranchController::class, 'updatePet'])->name('test');
    Route::patch('/pets/{i}', [BranchController::class, 'updatePetWithSomething'])->name('test');
});
