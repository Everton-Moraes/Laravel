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
    <title>Excluir País</title>
</head>
<body>
    
    <form class="form-horizontal" action="{{route('pais.excluido', ['id'=>$pais->id])}}" method="POST">
      @csrf  
      <fieldset>
        
        <!-- Form Name -->
        <legend>Excluir País</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nome">País</label>  
          <div class="col-md-4">
          <input id="nome" name="nome" type="text" value="{{$pais->nome}}" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nome"></label>
            <div class="col-md-4">
              <button type="submit" id="button" name="button" class="btn btn-danger">Excluir</button>
              <button type="button" id="button2" name="button2" onclick="window.location='{{url()->previous()}}'" class="btn btn-danger">Voltar</button>
            </div>
        </div>
          
        </fieldset>
        </form>

</body>
</html>