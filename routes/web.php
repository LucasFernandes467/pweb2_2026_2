<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('main');
});

############ Aluno ###########
Route::get('/aluno', [AlunoController::class, 'index']);
Route::get('/aluno/create', [AlunoController::class, 'create']);
Route::post(
    '/aluno/store',
    [AlunoController::class, 'store']
)->name('aluno.store');

Route::get(
    '/aluno/edit/{id}',
    [AlunoController::class, 'edit']
)->name('aluno.edit');
Route::put(
    '/aluno/update/{id}',
    [AlunoController::class, 'update']
)->name('aluno.update');

Route::delete(
    '/aluno/{id}',
    [AlunoController::class, 'destroy']
)->name('aluno.destroy');

Route::post(
    '/aluno/search',
    [AlunoController::class, 'search']
)->name('aluno.search');

######## FIM ALUNO #########

######## CURSO ##########

Route::get(
    '/curso/report',
    [\App\Https\Controllers\CursoController::class, 'report']
)->name('curso.report');

Route::get(
    '/curso/report-matriculados',
    [\App\Https\Controllers\CursoController::class, 'reportMatriculados']
)->name('curso.reportMatriculados');

Route::get(
    '/curso/chart',
    [\App\Https\Controllers\CursoController::class, 'chart']
)->name('curso.chart');

Route::get(
    '/curso/chart-qtd-aluno-curso-chart',
    [\App\Https\Controllers\CursoController::class, 'qtdAlunoCursoChart']
)->name('curso.qtdAlunoCursoChart');

Route::resource('curso', \App\Http\Controllers\CursoController::class);

Route::get('/curso/{curso}/turmas',
 [\App\Http\Controllers\TurmaController::class, 'index'])->name('curso.turmas');

Route::get('/curso/{curso}/turmas/create',
 [\App\Http\Controllers\TurmaController::class, 'create'])->name('curso.turmas.create');

Route::post(
    '/curso/search',
    [\App\Http\Controllers\CursoController::class, 'search']
)->name('curso.search');
######## FIM CURSO ##########


Route::resource('turma', \App\Http\Controllers\TurmaController::class);
Route::post(
    '/turma/search',
    [\App\Http\Controllers\TurmaController::class, 'search']
)->name('turma.search');

Route::resource('matricula', \App\Http\Controllers\MatriculaController::class);
Route::post(
    '/matricula/search',
    [\App\Http\Controllers\MatriculaController::class, 'search']
)->name('matricula.search');

/*
Route::get('/aluno', function () {
    return view('aluno.list');
    //return "<h3>Olá mundo Laravel!</h3>";
});
*/
