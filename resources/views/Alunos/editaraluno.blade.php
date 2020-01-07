@extends('layout.principal')
@section('conteudo')

<div class="container">
    <h1>Editar Aluno</h1><br>
    <form method="post" action="{{route('aluno.salvaaluno',$edit->id)}}">
        @csrf
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome"
                        value="{{$edit->nome}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date">Data Nascimento: </label>
                    <input type="date" class="form-control" id="date" placeholder="date" name="date"
                        value="{{$edit->datadenascimento}}" required>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sexo">Sexo: </label>
                    <input type="text" class="form-control" id="nome" placeholder="Sexo" name="sexo"
                        value="{{$edit->sexo}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cidade">Cidade: </label>
                    <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade"
                        value="{{$edit->cidade}}">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="bairro">Bairro: </label>
                    <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro"
                        value="{{$edit->bairro}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="rua">Rua: </label>
                    <input type="text" class="form-control" id="rua" placeholder="Rua" name="rua"
                        value="{{$edit->rua}}">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="numero">Número: </label>
                    <input type="number" class="form-control" id="numero" placeholder="Numero" name="numero"
                        value="{{$edit->numero}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="complemento">Complemento: </label>
                    <input type="text" class="form-control" id="complemento" placeholder="Complemento"
                        name="complemento" value="{{$edit->complemento}}">
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

{!! JsValidator::formRequest('App\Http\Requests\ValidacaoAluno') !!}
@endsection
