<?php
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

Route::get('/', function () {return view('welcome');})->middleware('auth');

Route::get('/aluno', 'AlunoController@index')->name('aluno.index')->middleware('auth');
Route::get('/turma', 'TurmaController@index')->name('turma.index')->middleware('auth');
Route::get('/aluno/criar', 'AlunoController@create')->name('aluno.create')->middleware('auth')->middleware('usuarioti');
Route::post('/aluno/salvar', 'AlunoController@store')->name('aluno.store')->middleware('auth');
Route::get('/turma/criar', 'TurmaController@create')->name('turma.create')->middleware('auth')->middleware('usuarioti');
Route::post('/turma/salvar', 'TurmaController@store')->name('turma.store')->middleware('auth');
Route::get('/turma/{id}', 'TurmaController@listaalunos')->name('turma.adicionaralunos')->middleware('auth');
Route::get('/turma/{id}/{idturma}', 'TurmaController@alunoturma')->name('turma.salvaraluno')->middleware('auth');
Route::get('/turma/ver/alunos/{id}', 'TurmaController@veralunos')->name('turma.veraluno')->middleware('auth');
Route::get('/turmas/editar/{id}', 'TurmaController@edit')->name('turma.editarturma')->middleware('auth');
Route::get('/aluno/editar/{id}', 'AlunoController@edit')->name('aluno.editaraluno')->middleware('auth');
Route::post('/turmas/update/{id}', 'TurmaController@update')->name('turma.salvarturma')->middleware('auth');
Route::post('/alunos/update/{id}', 'AlunoController@update')->name('aluno.salvaaluno')->middleware('auth');
Route::get('/turmas/delete/{id}', 'TurmaController@destroy')->name('turma.delete')->middleware('auth');
Route::get('/alunos/delete/{id}', 'AlunoController@destroy')->name('aluno.delete')->middleware('auth');
Route::get('/registrar', 'UsuarioController@create')->name('usuario.create')->middleware('auth')->middleware('usuarioti');
Route::post('/registrar/salvar', 'UsuarioController@store')->name('usuario.store')->middleware('auth')->middleware('usuarioti');
Route::get('/pdfturma', 'TurmaController@pdf');
Route::get('/pdfaluno', 'AlunoController@pdf');

Route::get('/logout', function () {
    Auth::logout();
    return redirect("/login");
});

Auth::routes();
