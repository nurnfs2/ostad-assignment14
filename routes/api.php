<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// For Question 1:
Route::post('/submit-user', [AdminController::class, 'store'])->name('submit-user');

// For Question 2:
Route::post('/set-header', [AdminController::class, 'setHeader'])->name('set-header');

// For Question 3:
Route::get('/set-query', [AdminController::class, 'setQuery'])->name('set-query');

// For Question 4:
Route::get('/get-json-res', [AdminController::class, 'getJsonResponse'])->name('json-res');

// For Question 5:
Route::post('/upload', [AdminController::class, 'fileUploader'])->name('upload');

// For Question 6:
Route::get('/get-token', [AdminController::class, 'getRememberToken'])->name('get-token');

// For Question 7:
Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
})->name('submit');
