@extends('layout.principal')
@section('conteudo')

<div class="container">
    <h1>Editar Turma</b></h1><br>
    <form method="post" action="{{route('turma.salvarturma',$edit->id)}}">
        @csrf
        <div class="form-row">
            <label class="col-md-4 control-label">{{ __('Descrição da Turma') }}</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-pencil"></i></span><input type="text" class="form-control"
                        id="descricao" placeholder="Digite aqui a descrição" name="descricao" required>
                </div>
            </div>
        </div>

        <div class="form-row">
            <label class="col-md-4 control-label">{{ __('Quantidade de Vagas') }}</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-pencil"></i></span><input type="number" class="form-control"
                        id="vagas" placeholder="Digite aqui as vagas" name="vagas" required>
                </div>
            </div>
        </div>

        <div class="form-row">
            <label class="col-md-4 control-label">{{ __('Professor Responsável') }}</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-user"></i></span><input type="text" class="form-control"
                        id="professor" placeholder="Digite o professor responsavel" name="professor" required>
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
