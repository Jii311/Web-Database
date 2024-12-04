<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactControllerAdmin;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DepartmentControllerAdmin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllerAdmin;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentControllerAdmin;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GradeControllerAdmin;
use Illuminate\Support\Facades\Route;


Route::get('/', action: [HomeController::class, 'index']);
Route::get('/admin', action: [HomeControllerAdmin::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact-admin', [ContactControllerAdmin::class, 'index']);

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students-admin', [StudentControllerAdmin::class, 'index']);

Route::get('/grade', [GradeController::class, 'index']);
Route::get('/grade-admin', [GradeControllerAdmin::class, 'index']);

Route::get('/department', [DepartmentController::class, 'index']);
Route::get('/department-admin', [DepartmentControllerAdmin::class, 'index']);
