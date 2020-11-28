<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Estado</title>
</head>
<body>

    <form class="form-horizontal" action="" method="POST">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Cadastro de Estado</legend>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="country_id">Selecione o País :</label>
          <div class="col-md-4">
            <select id="country_id" name="country_id" class="form-control">
            </select>
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nome">Estado</label>  
          <div class="col-md-4">
          <input id="nome" name="nome" type="text" placeholder="Digite um Estado:" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="iniciais">Inicial</label>  
          <div class="col-md-4">
          <input id="iniciais" name="iniciais" type="text" placeholder="Exemplo : SP" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nome"></label>
          <div class="col-md-4">
            <button type="submit" id="button" name="button" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
        
        </fieldset>
        </form>
    
</body>
</html>