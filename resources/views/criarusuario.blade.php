@extends('layout.principal')
@section('conteudo')

<div class="container">
    <br>
    <h4>Cadastro de Usuário</h4><br>
    <form method="post" action="{{route('usuario.store')}}">
        @csrf
        <div class="form-row">
            <label class="col-md-4 control-label">{{ __('Nome') }}</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-pencil"></i></span>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-row">
            <label class="col-md-4 control-label">{{ __('Email') }}</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-envelope"></i></span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-row">
            <label class="col-md-4 control-label">{{ __('Senha') }}</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-row">
            <label class="col-md-4 control-label">{{ __('Confirme a senha') }}</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>
            </div>
        </div>
        <div class="form-row">
            <label class="col-md-4 control-label">{{ __('Descrição da Turma') }}</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <select class="form-control" name="nivel" id="nivel">
                        <option value="1">Estagiario</option>
                        <option value="2">Administrador</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <br><button type="submit" class="btn btn-primary">
                    {{ __('Registrar') }}
                </button>
            </div>
        </div>
    </form>
    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\ValidacaoAluno') !!}
    @endsection
