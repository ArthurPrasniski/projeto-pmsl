@extends('layout.principal')
@section('conteudo')
{{--<div class="container">
    <h1>Cadastro de Aluno</h1><br>
    <form method="post" action="{{route('aluno.store')}}">
@csrf

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="date">Data Nascimento: </label>
            <input type="date" class="form-control" id="date" placeholder="date" name="date" required>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="sexo">Sexo: </label>
            <select class="form-control" name="sexo" id="sexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="cidade">Cidade: </label>
            <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="bairro">Bairro: </label>
            <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="rua">Rua: </label>
            <input type="text" class="form-control" id="rua" placeholder="Rua" name="rua">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="numero">Número: </label>
            <input type="number" class="form-control" id="numero" placeholder="Numero" name="numero">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="complemento">Complemento: </label>
            <input type="text" class="form-control" id="complemento" placeholder="Complemento" name="complemento">
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

{!! JsValidator::formRequest('App\Http\Requests\ValidacaoAluno') !!}--}}
<div class="container">
    <h1>Cadastro de Aluno</h1><br>
    <form method="post" action="{{route('aluno.store')}}">
        @csrf
        <div class="container">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td colspan="1">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Nome Completo</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-user"></i></span><input type="text"
                                                class="form-control" id="nome" placeholder="Nome" name="nome" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Data de Nascimento</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-calendar"></i></span><input type="date"
                                                class="form-control" id="datadenascimento"
                                                placeholder="Data de Nascimento" name="datadenascimento" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Sexo</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-user"></i></span>
                                            <select class="form-control" name="sexo" id="sexo" required>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                                <option value="Outro">Outro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Cidade</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-home"></i></span><input type="text"
                                                    class="form-control" id="cidade" placeholder="Cidade" name="cidade"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Rua</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-road"></i></span><input type="text"
                                                    class="form-control" id="rua" placeholder="Rua" name="rua" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Bairro</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-home"></i></span><input type="text"
                                                    class="form-control" id="bairro" placeholder="Bairro" name="bairro"
                                                    required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Número</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-home"></i></span><input type="number"
                                                    class="form-control" id="numero" placeholder="Numero" name="numero"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Complemento</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-home"></i></span><input type="text"
                                                    class="form-control" id="complemento" placeholder="Complemento"
                                                    name="complemento">
                                            </div>
                                        </div>
                                        <input type="submit" value="Salvar" class="btn btn-primary">
                                        <input type="reset" value="Limpar" class="btn btn-danger">
                            </fieldset>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{!! JsValidator::formRequest('App\Http\Requests\ValidacaoAluno') !!}--}}

@endsection
