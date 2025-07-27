<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MobileController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
    use App\Models\User;
Route::post('/admin/login', function (Request $request) {
    $credentials = $request->only('email', 'password');     

    if (!Auth::guard('admin')->attempt($credentials)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    $admin = Auth::guard('admin')->user();
    $token = $admin->createToken('admin-token')->plainTextToken;

    return response()->json([
        'token' => $token,
        'admin' => $admin
    ]);
});









Route::get('/mobiles', [MobileController::class, 'index']);
// Route::post('/mobiles', [MobileController::class, 'store']);
// Route::get('/mobiles/{id}', [MobileController::class, 'show']);
// Route::put('/mobiles/{id}', [MobileController::class, 'update']);
// Route::delete('/mobiles/{id}', [MobileController::class, 'destroy']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/mobiles', [MobileController::class, 'store']);
    Route::put('/mobiles/{id}', [MobileController::class, 'update']);
    Route::delete('/mobiles/{id}', [MobileController::class, 'destroy']);
});


Route::get('/test', function () {
    return 'API is working';
});

Route::post('/admin/login', [AuthController::class, 'login']);      