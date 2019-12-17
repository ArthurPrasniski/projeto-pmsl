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
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Número</th>
                <th>Complemento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{$aluno->id}}</td>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->sexo}}</td>
                    <td>{{$aluno->datadenascimento}}</td>
                    <td>{{$aluno->cidade}}</td>
                    <td>{{$aluno->bairro}}</td>
                    <td>{{$aluno->numero}}</td>
                    <td>{{$aluno->complemento}}</td>
                    <td>
                    <a href="{{route('aluno.editaraluno',$aluno->id)}}" type="button" class="btn btn-primary">Editar</a>
                    <a href="{{route('aluno.delete',$aluno->id)}}" type="button" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
