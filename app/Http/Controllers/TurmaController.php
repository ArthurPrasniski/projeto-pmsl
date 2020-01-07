<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Aluno_turma;
use App\Http\Requests\ValidacaoTurma;
use App\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::all();
        //dd($alunos);
        return view('Turma.index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Turma.cadastro');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacaoTurma $request)
    {
        $turma = new Turma();
        //dd($request);
        $turma->descricao = $request->input('descricao');
        $turma->vagas = $request->input('vagas');
        $turma->professor = $request->input('professor');
        $turma->save();
        return redirect()->route('turma.index');
    }
    public function listaalunos($id)
    {
        $alunos = Aluno::all();
        return view('Turma.adicionaralunos', compact('alunos', 'id'));
    }
    public function alunoturma($id, $idturma)
    {
        $alunoturma = new Aluno_turma();
        $alunoturma->aluno_id = $id;
        $alunoturma->turma_id = $idturma;
        $alunoturma->save();

        return redirect()->route('turma.index');
    }
    public function veralunos($id)
    {
        $alunos = Aluno_turma::where('turma_id', $id)->get();
        // dd($alunos);
        return view('Turma.listaAlunosdeterminadaTurma', compact('alunos'));
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
        $edit = Turma::find($id);
        return view('Turma.editarturma', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacaoTurma $request, $id)
    {

        $editado = Turma::find($id);
        $editado->descricao = $request->input('descricao');
        $editado->vagas = $request->input('vagas');
        $editado->professor = $request->input('professor');
        $editado->update();
        //dd($editado);

        return redirect()->route('turma.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Turma::find($id);
        $delete->delete();
        return redirect()->route('turma.index');
    }
}
