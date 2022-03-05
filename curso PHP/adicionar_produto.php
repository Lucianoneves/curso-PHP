<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">

  <title>Formulário de Cadastro</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style type="text/css">

    #tamanhoContainer {
      width:500px;
    }

    #botao{
      background-color: #E7708A;   /* cor de fundo  */
      color:#ffffff;  /* cor da letra*/

    }
  </style>

</head>
<body>

  <div class="container" id="tamanhoContainer" style="margin-top: 40px;">

  <div style=" text-align:right;">
  <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
  </div>

  <h4>Formulario de Cadastro</h4>
  <form action="_inserir_produto.php" method="POST" style="margin-top: 20px">

<div class="form-group">
    <label>Nro produto</label>
    <input type="number" class="form-control" name="nroproduto"  placeholder="Insira o numero do produto" required>
  </div>
<div class="form-group">
    <label>Nome produto</label>
    <input type="text" class="form-control" name="nomeproduto"  placeholder="Insira o nome do produto"
    autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Categoria</label>
    <select class="form-control" name="categoria">


     <?php
    include 'conexao.php';
    $sql = "SELECT * FROM categoria order by nome_categoria ASC";
    $busca = mysqli_query($conexao,$sql);

    while ($array = mysqli_fetch_array($busca)) {

      echo $id_categoria = $arrayT['id_categoria'];
    echo  $nome_categoria = $array['nome_categoria'];

      ?>
      <option><?php echo $nome_categoria ?></option>

     <?php } ?>
    </div>
  </select>

<div class="form-group" name="quantidade">
    <label>Quantidade</label>
    <input type="number" class="form-control" name= "quantidade"  placeholder="Insira a quantidade do produto" required>
  </div>



  <div class="form-group" name="fornecedor">
    <label >Fornecedor</label>
    <select class="form-control" name="fornecedor">
      <?php
      include 'conexao.php';
      $sql2 = "SELECT * FROM fornecedor";
      $buscar2 = mysqli_query($conexao,$sql2);

      while ($array2 = mysqli_fetch_array($buscar2)) {
          $id_fornecedor =  $array2['id_forn'];
          $nome_fornecedor = $array2['nome_forn'];

          ?>

      <option> <?php echo $nome_fornecedor ?> </option>
      <?php } ?>

    </select>
  </div>

  <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
</form>
  </div>
  </div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

