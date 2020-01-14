@extends('layouts.app')

@section('content')
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>--}}

<head>
    <meta charset="utf-8">
    <title>َlogin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form class="box" action="" method="post">
        <h1>Login</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                {{--Usuario--}}
                <h6>Email / Usuário</h6>
                <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label text-md-right"></label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                {{--senha--}}
                <h6>Senha</h6>
                <div class="form-group row">
                    <label for="password" class="col-md-3 col-form-label text-md-right"></label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                {{--Login--}}
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-2">
                        <input type="submit" name="" value="Login">
                    </div>
                </div>
            </form>
</body>
@endsection
