@extends('layout.principal')
@section('conteudo')
<div class="container-fluid no-padding table-responsive-sm">
    <h3 align="center" style="padding-top: 10px">Lista de Alunos </h3>
    <table id="tabelaaluno" class="table table-striped nowrap" style="width:100%">
        <thead align="center">
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
        <tbody align="center" id="teste">
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
                    @if(auth()->user()->nivel >=2)
                    <a href="{{route('aluno.editaraluno',$aluno->id)}}" type="button" class="btn btn-primary">Editar</a>
                    <a href="{{route('aluno.delete',$aluno->id)}}" type="button" class="btn btn-danger">Excluir</a>
                    @endif
                </td>
            </tr>
            @endforeach
            <a href="pdfaluno" type="button" class="btn btn-primary">Relátorio</a>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('#tabelaaluno').DataTable({
            select: false,
            responsive: true,
            "order": [
                [1, "asc"]
            ],
            columnDefs: [
                { responsivePriority: 1, targets: 0 },
                { responsivePriority: 2, targets: -1 }
            ],
            "info": false,
            "sLengthMenu": false,
            "bLengthChange": false,
            "oLanguage": {

                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de START até END de TOTAL registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de MAX registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "MENU resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }

            }
        });
    });
</script>
@endsection
