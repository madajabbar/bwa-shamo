<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.dashboard');
});

Route::get('/form', [FrontendController::class, 'index']);
Route::get('/answer', [FrontendController::class, 'answer']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
Route::middleware('auth:sanctum')->group(function () {
    Route::get('admin/pertanyaan', [QuestionController::class,'index']);
    Route::post('admin/pertanyaan/simpan', [QuestionController::class,'create']);
    Route::post('admin/pertanyaan/edit/{id}', [QuestionController::class,'edit']);
    Route::get('admin/pertanyaan/hapus/{id}', [QuestionController::class,'delete']);

    Route::get('admin/kategori', [CategoryController::class,'index']);
    Route::post('admin/kategori/simpan', [CategoryController::class,'create']);
    Route::post('admin/kategori/edit/{id}', [CategoryController::class,'edit']);
    Route::get('admin/kategori/hapus/{id}', [CategoryController::class,'delete']);

    Route::get('admin/jawaban', [AnswerController::class,'index']);
    Route::post('admin/jawaban/simpan', [AnswerController::class,'create']);
    Route::post('admin/jawaban/edit/{id}', [AnswerController::class,'edit']);
    Route::get('admin/jawaban/hapus/{id}', [AnswerController::class,'delete']);

    Route::get('admin/tips', [AnswerController::class,'index']);
    Route::post('admin/tips/simpan', [AnswerController::class,'create']);
    Route::post('admin/tips/edit/{id}', [AnswerController::class,'edit']);
    Route::get('admin/tips/hapus/{id}', [AnswerController::class,'delete']);
});
