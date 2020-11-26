<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Localização</title>
</head>
<body>

    <form class="form-horizontal" action="" method="POST">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Cadastrar Localização</legend>
        
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
          <label class="col-md-4 control-label" for="latitude">Latitude </label>  
          <div class="col-md-4">
          <input id="latitude" name="latitude" type="text" placeholder="Insira a Latitude :" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="longitude">Longitude</label>  
          <div class="col-md-4">
          <input id="longitude" name="longitude" type="text" placeholder="Insira a Longitude :" class="form-control input-md">
            
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