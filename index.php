<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
    .col{
        float: none !important;
        margin-top: 100px !important;
        margin-bottom: auto !important;
        margin-left: auto !important;
        margin-right: auto !important;
    }
    </style>
    
  </head>

  <body>
    <div class="row">
        <div class="col s4 m4">
          <div class="card light-blue darken-3">
            <div class="card-content white-text">
                <span class="card-title">ACESSO RESTRITO</span>

                <form action="login.php" method="POST">
                  <label for="#">Usuário</label>
                  <input id="#" type="text" class="validate" name="txtusuario" required>
                  <i class="small material-icons">account_circle</i><br>
                  <label for="#">Senha</label>
                  <input id="#" type="password" class="validate" name="txtpassword" required>
                  <i class="small material-icons">lock_outline</i>

                  <button class="btn waves-effect light-blue darken-2" type="submit" name="#">ACESSAR
                    <i class="material-icons right">send</i>
                  </button>

                  <button class="btn waves-effect light-blue darken-2" type="submit" name="#">ACESSAR
                    <i class="material-icons right">cancel</i>
                  </button>
              </form>
            </div>
          </div>
        </div>
      </div>
  
          
    





      <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>