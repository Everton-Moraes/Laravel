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
    <title>{{$cidade->nome}}</title>
</head>
<body background="mapa.png">

    <div id="exibe-pais" class="col">
        <fieldset class="border p-2">
            <legend class="w-auto">País</legend>
            <h4>{{$pais->nome}}</h4>
        </fieldset>
        <br>
        <fieldset class="border p-2">
            <legend class="w-auto">Estado</legend>
                <h5>{{$estado->nome}}              
        </fieldset>
        <br>
        <fieldset class="border p-2">
            <legend class="w-auto">Cidade</legend>
                <h5>{{$cidade->nome}}</h5>
                <button type="button" id="button2" name="button2" onclick="window.location='{{route('edita.cidade', ['id'=>$cidade->id])}}'" class="btn btn-warning">Editar</button>
                <button type="button" id="button2" name="button2" onclick="window.location='{{route('exclui.cidade',['id'=>$cidade->id])}}'" class="btn btn-danger">Excluir</button>              
        </fieldset>
        <br>
        <button type="button" id="button2" name="button2" onclick="window.location='{{route('index')}}'" class="btn btn-danger">Voltar</button>
    </div>
      
        
</body>
</html>