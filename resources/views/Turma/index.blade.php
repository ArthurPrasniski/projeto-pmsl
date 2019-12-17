@extends('layout.principal')
@section('conteudo')
<div class="row justify-content-md-center">
        <div class="col-11">
        <table class="table nowrap table-bordered" style="margin-top: 20px">
            <thead>
            <tr class="table-primary">
                <th>ID</th>
                <th>Descrição</th>
                <th>Vagas</th>
                <th>Professor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($turmas as $turma)
            <tr>
                <td>{{$turma->id}}</td>
                <td>{{$turma->descricao}}</td>
                <td>{{$turma->vagas}}</td>
                <td>{{$turma->professor}}</td>
                <td>
                    <a href="{{route('turma.adicionaralunos', $turma->id)}}" type="button" class="btn btn-primary">Cadastrar</a>
                    <a href="{{route('turma.veraluno', $turma->id)}}" type="button" class="btn btn-primary">Ver Alunos</a>
                    <a href="{{route('turma.editarturma',$turma->id)}}" type="button" class="btn btn-primary">Editar</a>
                    <a href="{{route('turma.delete',$turma->id)}}" type="button" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsection
