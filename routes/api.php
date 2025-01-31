<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\StudentController;

Route::prefix('students')->group(function () {
    Route::post('/', [StudentController::class, 'store']); // إنشاء طالب جديد
    Route::put('/{student}', [StudentController::class, 'update']); // تحديث طالب
    Route::get('/{student}', [StudentController::class, 'show']); // عرض بيانات طالب
    Route::delete('/{student}', [StudentController::class, 'destroy']); // حذف طالب
});


Route::resource('courses', CourseController::class);
Route::post('courses/{course}/comments', [CommentController::class, 'store']);



Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('courses/register', [RegistrationController::class, 'store']);
});
