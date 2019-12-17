<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        //dd($alunos);
        return view('Alunos.index', compact('alunos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Alunos.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno=new Aluno();
        //dd($request);
        $aluno->nome = $request->input('nome');
        $aluno->datadenascimento = $request->input('date');
        $aluno->sexo = $request->input('sexo');
        $aluno->cidade = $request->input('cidade');
        $aluno->bairro = $request->input('bairro');
        $aluno->rua = $request->input('rua');
        $aluno->numero = $request->input('numero');
        $aluno->complemento = $request->input('complemento');
        $aluno->save();

        return redirect()->route('aluno.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Aluno::find($id);
        return view('alunos.editaraluno', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

          $editado = Aluno::find($id);
          $editado->nome = $request->input('nome');
          $editado->datadenascimento = $request->input('date');
          $editado->sexo = $request->input('sexo');
          $editado->cidade = $request->input('cidade');
          $editado->bairro = $request->input('bairro');
          $editado->rua = $request->input('rua');
          $editado->numero = $request->input('numero');
          $editado->complemento = $request->input('complemento');
          $editado->update();
          //dd($editado);
          return redirect()->route('aluno.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Aluno::find($id);
        $delete->delete();
        return redirect()->route('aluno.index');
    }
}
