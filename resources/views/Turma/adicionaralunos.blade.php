@extends('layout.principal')
@section('conteudo')
<div class="row justify-content-md-center">
    <div class="col-11">
    <table class="table nowrap table-bordered" style="margin-top: 20px">
        <thead>
            <tr class="table-primary">
                <th>ID</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Data de Nascimento</th>
                <th>Adicionar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{$aluno->id}}</td>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->sexo}}</td>
                    <td>{{$aluno->datadenascimento}}</td>
                    <td><a href="{{route('turma.salvaraluno',[$aluno->id,$id])}}" type="button" class="btn btn-primary">adicionar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
