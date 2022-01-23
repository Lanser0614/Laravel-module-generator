<?php

use Illuminate\Support\Facades\Route;
use App\Modules\V1\Employee\Http\Controllers\EmployeeController;



Route::group([

    'middleware' => 'api',
    'prefix' => '/employee',
    'as' => 'employee-v1',

], function ($router) {
    Route::get('/pets', [EmployeeController::class, 'getPets'])->name('test');
    Route::post('/pets', [EmployeeController::class, 'createPet'])->name('test');
    Route::put('/pets/{id}/{ss}', [EmployeeController::class, 'updatePet'])->name('test');
    Route::patch('/pets/{i}', [EmployeeController::class, 'updatePetWithSomething'])->name('test');
});
