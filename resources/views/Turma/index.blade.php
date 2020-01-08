@extends('layout.principal')
@section('conteudo')
<div class="container-fluid no-padding table-responsive-sm">
    <h3 align="center" style="padding-top: 10px"> Lista das Turmas </h3>
    <table id="tabelaaluno" class="table table-striped nowrap" style="width:100%">
        <thead>
            <tr class="table-primary">
                <th>ID</th>
                <th>Descrição</th>
                <th>Vagas</th>
                <th>Professor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody align="center" id="teste">
            @foreach($turmas as $turma)
            <tr>
                <td>{{$turma->id}}</td>
                <td>{{$turma->descricao}}</td>
                <td>{{$turma->vagas}}</td>
                <td>{{$turma->professor}}</td>
                <td>
                    @if(auth()->user()->nivel >=2)
                    <a href="{{route('turma.adicionaralunos', $turma->id)}}" type="button"
                        class="btn btn-primary">Cadastrar</a>
                    <a href="{{route('turma.editarturma',$turma->id)}}" type="button" class="btn btn-primary">Editar</a>
                    <a href="{{route('turma.delete',$turma->id)}}" type="button" class="btn btn-danger">Excluir</a>
                    @endif
                    <a href="{{route('turma.veraluno', $turma->id)}}" type="button" class="btn btn-primary">Ver
                        Alunos</a>
                </td>
            </tr>
            @endforeach
            <a href="pdfturma" type="button" class="btn btn-primary">Relátorio</a>
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
