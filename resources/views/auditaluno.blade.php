@extends('layout.principal')
@section('conteudo')
<div class="container-fluid no-padding table-responsive-sm">
    <h3 align="center" style="padding-top: 10px">Alterações Realizadas </h3>
    <table id="audicao" class="table table-striped nowrap" style="width:100%">
        <thead align="center">
            <tr class="table-primary">
                <th>ID</th>
                <th>Responsável</th>
                <th>Data/Hora</th>
                <th>Alteração</th>
                <th>Evento</th>
                <th>Endereço de IP</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody align="center" id="teste">
            @foreach($audits as $auditoria)
            <tr>
                <td>{{$auditoria->id}}</td>
                <td>{{App\User::whereId($auditoria->user_id)->pluck('name')}}</td>
                <td>{{ date('d-m-Y H:i:s', strtotime($auditoria->created_at)) }}</td>
                <td>{{$auditoria->new_values}}</td>
                <td>{{$auditoria->event}}</td>
                <td>{{$auditoria->ip_address}}</td>
                <td>{{$auditoria->url}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Javascript Requirements -->

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{!! JsValidator::formRequest('App\Http\Requests\ValidacaoAluno') !!}
@endsection
