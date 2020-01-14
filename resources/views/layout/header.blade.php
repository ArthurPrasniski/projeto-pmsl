<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
        aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('aluno.create')}}">Cadastrar Alunos</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('turma.create')}}">Cadastrar Turmas</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('aluno.index')}}">Consultar Alunos</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('turma.index') }}">Consultar Turmas</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('audit.index') }}">Relatório de Mudanças</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('usuario.create') }}">Registrar Usuário</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
        </form>
    </div>
</nav>
