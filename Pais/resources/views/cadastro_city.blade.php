<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Cidade</title>
</head>
<body>
    
    <form class="form-horizontal" action="" method="POST">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Cadastrar Cidade</legend>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="state_id">Selecione o Estado</label>
          <div class="col-md-4">
            <select id="state_id" name="state_id" class="form-control">
            </select>
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nome">Cidade</label>  
          <div class="col-md-4">
          <input id="nome" name="nome" type="text" placeholder="Exemplo: São Paulo" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="button"></label>
          <div class="col-md-4">
            <button type="submit" id="button" name="button" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
        
        </fieldset>
        </form>

</body>
</html>