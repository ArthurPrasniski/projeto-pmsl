<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <img src="saoleo2.png" width=60 height=80>
    <table class="table table-striped">
        <thead>
            <tr class="table-primary info">
                <td>Nome</td>
                <td>Sexo</td>
                <td>Data de Nascimento</td>
                <td>Cidade</td>
                <td>Bairro</td>
                <td>Rua</td>
                <td>Número</td>
                <td>Complemento</td>
            </tr>
        </thead>
        <Tbody>
            @foreach ($aluno as $alun)
            <tr>
                <td>{{$alun->nome}}</td>
                <td>{{$alun->sexo}}</td>
                <td>{{$alun->datadenascimento}}</td>
                <td>{{$alun->cidade}}</td>
                <td>{{$alun->bairro}}</td>
                <td>{{$alun->rua}}</td>
                <td>{{$alun->numero}}</td>
                <td>{{$alun->complemento}}</td>
            </tr>
            @endforeach
        </Tbody>
    </table>
</body>

</html>
