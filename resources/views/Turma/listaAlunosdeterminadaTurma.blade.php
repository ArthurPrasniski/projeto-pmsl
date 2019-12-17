@extends('layout.principal')
@section('conteudo')
<div class="row justify-content-md-center">
    <div class="col-11">
    <h3>Alunos em determinada turma</h3>
    <table class="table nowrap table-bordered" style="margin-top: 20px">
        <thead>
            <tr class="table-primary">
                <th>ID</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Data de Nascimento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{$aluno->aluno->id}}</td>
                    <td>{{$aluno->aluno->nome}}</td>
                    <td>{{$aluno->aluno->sexo}}</td>
                    <td>{{$aluno->aluno->datadenascimento}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
