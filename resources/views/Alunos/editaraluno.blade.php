@extends('layout.principal')
@section('conteudo')

<div class="container">
    <h1>Editar Aluno</h1><br>
    <div class="form-row">
        <label class="col-md-4 control-label">{{ __('Nome Completo') }}</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i
                        class="glyphicon glyphicon-pencil"></i></span><input type="text" class="form-control" id="nome"
                    placeholder="Nome" name="nome" required>
            </div>
        </div>
    </div>
    <div class="form-row">
        <label class="col-md-4 control-label">{{__('Data de Nascimento') }}</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i
                        class="glyphicon glyphicon-calendar"></i></span><input type="date" class="form-control"
                    id="date" placeholder="Data de Nascimento" name="date" required>
            </div>
        </div>
    </div>
    <div class="form-row">
        <label class="col-md-4 control-label">{{__('Sexo')}}</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <select class="form-control" name="sexo" id="sexo" required>
                    <option value="Masculino">{{__('Masculino')}}</option>
                    <option value="Feminino">{{__('Feminino')}}</option>
                    <option value="Outro">{{__('Outro')}}</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-row">
        <label class="col-md-4 control-label">{{__('Cidade')}}</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i
                        class="glyphicon glyphicon-home"></i></span><input type="text" class="form-control" id="cidade"
                    placeholder="Cidade" name="cidade" required>
            </div>
        </div>
    </div>
    <div class="form-row">
        <label class="col-md-4 control-label">{{__('Bairro')}}</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i
                        class="glyphicon glyphicon-home"></i></span><input type="text" class="form-control" id="bairro"
                    placeholder="Bairro" name="bairro" required></div>
        </div>
    </div>
    <div class="form-row">
        <label class="col-md-4 control-label">{{__('Rua')}}</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i
                        class="glyphicon glyphicon-road"></i></span><input type="text" class="form-control" id="rua"
                    placeholder="Rua" name="rua" required>
            </div>
        </div>
    </div>
    <div class="form-row">
        <label class="col-md-4 control-label">{{__('Número')}}</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i
                        class="glyphicon glyphicon-home"></i></span><input type="number" class="form-control"
                    id="numero" placeholder="Numero" name="numero" required>
            </div>
        </div>
        <label class="col-md-4 control-label">{{__('Complemento')}}</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i
                        class="glyphicon glyphicon-home"></i></span><input type="text" class="form-control"
                    id="complemento" placeholder="Complemento" name="complemento">
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
