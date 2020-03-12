<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Ediatr</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <h2 class="mx-auto" style="width: 350px;">Alterar {{$dados['nome']}}</h2>
      </nav>
      <br><br>
    

<form action="{{ route('cidade.update', $dados['id']) }}" method="POST">
    @csrf
    
    @method('PUT')
    <div class="form-group">
        <label >Nome: </label> <input type='text' name='nome' value='{{$dados['nome']}}'>
        <label>Porte: </label> <input type='text' name='porte' value='{{$dados['porte']}}'>
        <input class="btn btn-primary" type="submit" value="Salvar">
    </div>
    
</form>
<br><br>
<a class="btn btn-outline-dark btn-lg btn-block" href="{{route('cidade.index')}}"><h4>voltar</h4></a>


    
</body>
</html>
