<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <h2 class="mx-auto" style="width: 250px;">Lista de Cidades</h2>
      </nav>
    
    <br><br>
    <a class="btn btn-outline-dark" style="width:200px;" href="{{ route('cidade.create') }}"><h4>Nova Cidade</h4></a>
    <br>
    <br>
    <table class="table" >
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">Porte</th>
                <th scope="col">INFO</th>
                <th scope="col">EDITAR</th>
                <th scope="col">REMOVER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cidade as $item)
                <tr>
                    <td scope="row">{{ $item['id'] }}</td>
                    <td>{{ $item['nome'] }}</td>
                    <td>{{ $item['porte'] }}</td>
                    <td><a class="btn btn-primary btn-sm" href="{{ route('cidade.show', $item['id']) }}">info</a></td>
                    <td><a class="btn btn-secondary btn-sm" href="{{ route('cidade.edit', $item['id']) }}">editar</a></td>
                    <td>
                        <form action="{{ route('cidade.destroy', $item['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger btn-sm" type='submit' value='remover'>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        
</body>
</html>
