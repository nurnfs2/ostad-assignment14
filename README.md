<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Assignment 14


 // For Question 1:
    public function store(Request $request)
    {
        $name = $request->input('name');
        return response()->json($name);
    }



    // For Question 2:
    public function setHeader(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        return response()->json($userAgent);
    }


    // For Question 3:
    public function setQuery(Request $request)
    {
        $page = $request->input('page', null);
        return response()->json($page);
    }


    // For Question 4:
    public function getJsonResponse()
    {
        $data = [
            'name' => 'John Doe',
            'age' => 25
        ];

        return response()->json([
            'message' => 'Success',
            'data' => $data
        ]);
    }


    // For Question 5:
    public function fileUploader(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $originalFilename = $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $originalFilename, 'public');
            return response()->json($filePath);
        }
    }


    // For Question 6:
    public function getRememberToken(Request $request)
    {
        $rememberToken = $request->cookie('remember_token', null);
        return response()->json($rememberToken);
    }










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

