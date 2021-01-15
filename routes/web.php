<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;

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

Route::get('/healthz', function () {
    return 'ok';
});

Route::get('/', [EleveController::class, 'index']);

Route::get('student/class/{id}', [EleveController::class, 'index']);

Route::get('student/{id}', [EleveController::class, 'form'])->name('student.edit')->where('id', '[0-9]+');

Route::get('student/add', [EleveController::class, 'add'])->name('student.add');

Route::post('student/save', [EleveController::class, 'form'])->name('student.save');

Route::post('student/remove', [EleveController::class, 'delete'])->name('student.remove');

Route::get('student/note/{studentId}', [EleveController::class, 'note'])->name('student.note')->where('studentId', '[0-9]+');

Route::get('student/report/{id}', [EleveController::class, 'report'])->name('student.report')->where('id', '[0-9]+');

Route::post('save_note', [EleveController::class, 'saveNote'])->name('student.save_note');
