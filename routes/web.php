<?php

use Illuminate\Support\Facades\Route;
use App\Models\student;
use App\Models\school;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\StudentProgressController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manage-student', function () {
    return view('manageStudent')
    ->with('studentList',Student::all())->with('schoolList',school::all());
});

Route::get('/student/login',[StudentAuthController::class, 'login'])->name('studentauth.login');
Route::post('/student/check',[StudentAuthController::class, 'check'])->name('studentauth.check');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resources([
    'students' => StudentController::class,
    'courses' => CourseController::class,
    'project' => ProjectController::class,
    'milestone' => MilestoneController::class,
    'classes' => ClassController::class,
    'studentprogress' => StudentProgressController::class,

]);
