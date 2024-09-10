<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\StudentController;

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index']); // Get all students
    Route::post('/', [StudentController::class, 'store']); // Create a new student
    Route::get('/{id}', [StudentController::class, 'show']); // Get a specific student
    Route::put('/{id}', [StudentController::class, 'update']); // Update a specific student
    Route::delete('/{id}', [StudentController::class, 'destroy']); // Delete a specific student
});
