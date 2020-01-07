@extends('layout.principal')
@section('conteudo')

<div class="container">
    <h1>Editar Turma</b></h1><br>
    <form method="post" action="{{route('turma.salvarturma',$edit->id)}}">
        @csrf
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="descricao">Descrição da Turma: </label>
                    <input type="text" class="form-control" id="descricao" placeholder="Descrição da Turma"
                        name="descricao" value="{{$edit->descricao}}" required>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="vagas">Quantidade de Vagas</label>
                    <input type="number" class="form-control" id="vagas" placeholder="Quantidade de Vagas" name="vagas"
                        value="{{$edit->vagas}}" required>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="professor">Professor </label>
                    <input type="text" class="form-control" id="professor" placeholder="Professor" name="professor"
                        value="{{$edit->professor}}" required>
                </div>
            </div>
        </div>

        <input type="submit" value="Salvar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </form>
</div>
<!-- Javascript Requirements -->

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{!! JsValidator::formRequest('App\Http\Requests\ValidacaoTurma') !!}
@endsection
