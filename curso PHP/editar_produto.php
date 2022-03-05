<?php

include 'conexao.php';

  $id = $_GET['id'];



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">


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
  <h4>Formulario de Cadastro</h4>
  <form action="_atualizar_produto.php" method="POST" style="margin-top: 20px">
  <?php

   $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id ";
   $buscar = mysqli_query($conexao,$sql);
   while ($array = mysqli_fetch_array($buscar)) {

    $id_estoque = $array['id_estoque'];
    $nroproduto = $array['nroproduto'];
    $nomeproduto = $array['nomeproduto'];
    $categoria = $array['categoria'];
    $quantidade = $array['quantidade'];
    $fornecedor = $array['fornecedor'];

  ?>

<div class="form-group">
     <label>Nro produto</label>
    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disable>
    <input type="number" class="form-control" name="id" value="<?php echo $id?> " style="
    display:none">

  </div>
<div class="form-group">
    <label>Nome produto</label>
    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
  </div>

  <div class="form-group">
    <label >Categoria</label>
    <select class="form-control"name="categoria" >
      <option>Perifericos</option>
      <option>Hardware</option>
      <option>Sofware</option>
      <option>Celulares</option>

    </select>
<div class="form-group" name="quantidade">
    <label>Quantidade</label>
    <input type="number" class="form-control" name= "quantidade">
  </div>



  <div class="form-group" name="fornecedor">
    <label >Fornecedor</label>
    <select class="form-control" name="fornecedor">
      <option>Fornecedor A</option>
      <option>Fornecedor B</option>
      <option>Fornecedor C</option>
    </select>
  </div>
  <div style=" text-align:right;">
  <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
</div>
<?php } ?>
</form>
  </div>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>




