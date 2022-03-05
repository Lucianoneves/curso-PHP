<!DOCTYPE html>
<html lang="pt-BR">
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <style type="text/css">
     #botao{
     background-color: #ff1168;
     color:#ffff;

     }

</style>
</head>
<body>

<div class="container style= margin-top: 40px; width: 500px ">
<div style=" text-align:right;">
  <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
  </div>

  <h4>Cadastro de Categoria</h4>
  <form action="_inserir_categoria.php" method= "post">
    <label>Categoria</label>
    <div class="form-group">
      <input type="text" name="categoria" class="form-control" placeholder=" Digite o nome da Categoria"
      autocomplete ="off">
    </div>

    <div style="text-align:right">
    <button type="submit" id="botao" class="btn bt-sm">Cadastrar</button>
  </div>
</form>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
