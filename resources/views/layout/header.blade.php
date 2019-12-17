<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="http://127.0.0.1:8000/">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/aluno/criar">Cadastrar Alunos<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/turma/criar">Cadastrar Turmas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aluno">Consultar Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/turma">Consultar Turmas</a>
                </li>
                <li class="nav-item">
                <a id="navbarDropdown" class="nav-link" href="{{url('logout')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Logout
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
</nav>
