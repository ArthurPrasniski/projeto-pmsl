@extends('layout.principal')
@section('conteudo')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Alunos')}}</h3>
            </div>
            <table class="table table-hover" id="dev-table">
                <table id="tabelaaluno" class="table table-striped nowrap" style="width:100%">
                    <thead>
                        <tr class="table-primary">
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sexo</th>
                            <th>Data de Nascimento</th>
                            <th>Adicionar</th>
                        </tr>
                    </thead>
                    <tbody align="center" id="teste">
                        @foreach($alunos as $aluno)
                        <tr>
                            <td>{{$aluno->id}}</td>
                            <td>{{$aluno->nome}}</td>
                            <td>{{$aluno->sexo}}</td>
                            <td>{{$aluno->datadenascimento}}</td>
                            <td><a href="{{route('turma.salvaraluno',[$aluno->id,$id])}}" type="button"
                                    class="btn btn-primary">adicionar</a></td>
                        </tr>
                        @endforeach
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
