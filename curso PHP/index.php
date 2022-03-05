<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tela de login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
    #tamanho {
      width: 350px;
      -webkit-box-shadow: 10px 10px 5px -148px rgba(181,174,181,1);
-moz-box-shadow: 10px 10px 5px -148px rgba(181,174,181,1);
box-shadow: 10px 10px 5px -148px rgba(181,174,181,1);
    }
  </style>
  </head>
<body>

<div class="container" id="tamanho" style="margin-top: 100px;  border-radius: 15px; border: 2px solid #f3f3f3">
<div style="padding:10px">
  <center>
  <img src="imagen/cadeado.jpg" width="100px" height="100px">
  </center>
  <form action="index1.php"  method="post">
  <div class="form-grop">
    <label>Usuario</label>
    <Input type ="text" name= "usuario" class = "form-control" placeholder = "usuario" autocomplete="off" requerid>
  </div>

  <div class="form-group">
    <label>Senha</label>
  <Input type ="password" name= "senha" class = "form-control" placeholder = "senha" autocomplete="off" requerid>
</div>
<div style="text-align:right;">
  <button type="submit" class="btn btn-sm btn-success"> Entrar</button>
</div>
</form>

</div>
</div>

<div style="margin-top:10px"></div>
<center>
  <p>Voce não possui cadastro? Clique <a href="cadastro_usuario_externo.php">aqui </a></p>
</center>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
