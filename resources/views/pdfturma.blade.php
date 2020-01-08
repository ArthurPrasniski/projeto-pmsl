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
    <table class="table table-bordered">
        <thead>
            <tr class="active" class="table-primary">
                <td width="25%">Descrição</td>
                <td width="25%">Vagas</td>
                <td width="25%">Professor</td>
            </tr>
        </thead>
        <Tbody>
            @foreach ($turma as $class)
            <tr>
                <td>{{$class->descricao}}</td>
                <td>{{$class->vagas}}</td>
                <td>{{$class->professor}}</td>
            </tr>
            @endforeach
        </Tbody>
    </table>
</body>

</html>
