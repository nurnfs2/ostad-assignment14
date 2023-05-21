<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Assignment 14
// API Route

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

