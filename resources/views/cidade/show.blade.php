<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Cidade</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <h2 class="mx-auto" style="width: 450px;">Informações da Cidade</h2>
      </nav>
      <br><br>
        
    <table class="table" >
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">Porte</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td scope="row">{{ $dados['id'] }}</td>
                    <td>{{ $dados['nome'] }}</td>
                    <td>{{ $dados['porte'] }}</td>
                </tr>
        </tbody>
    </table>
    <br><br><br>
    <a class="btn btn-outline-dark btn-lg btn-block" href="{{route('cidade.index')}}"><h4>voltar</h4></a>
    

            
</body>
</html>
