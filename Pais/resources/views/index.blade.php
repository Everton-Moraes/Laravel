<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paises</title>
</head>
<body>

    <div id="Botoes" class="col">
        <fieldset class="border p-2">
        <legend class="w-auto">Cadastro</legend>
            <button id='btn1' type="button" onclick="window.location='{{route('cadastro.pais')}}'" class="btn btn-primary">Cadastrar País</button>
            <button id='btn2' type="button" onclick="window.location='{{route('cadastro.localizacao')}}'" class="btn btn-primary">Cadastrar Localização</button>
            <button id='btn3' type="button" onclick="window.location='{{route('cadastro.estado')}}'" class="btn btn-primary">Cadastrar Estado</button>
            <button id='btn4' type="button" onclick="window.location='{{route('cadastro.cidade')}}'" class="btn btn-primary">Cadastrar Cidade</button>
        </fieldset>
    </div>
    <br>
    <br>
    <div id="Butons" class="col">
        <fieldset class="border p-2">
        <legend class="w-auto">Busca</legend>
            <button id='btn5' type="button" onclick="window.location='{{route('busca.pais')}}'" class="btn btn-success">Buscar País</button>
            <button id='btn6' type="button" onclick="window.location='{{route('busca.localizacao')}}'" class="btn btn-success">Buscar Localização</button>
            <button id='btn7' type="button" onclick="window.location='{{route('busca.estado')}}'" class="btn btn-success">Buscar Estado</button>
            <button id='btn8' type="button" onclick="window.location='{{route('busca.cidade')}}'" class="btn btn-success">Buscar Cidade</button>
        </fieldset>
    </div>    
        
</body>
</html>