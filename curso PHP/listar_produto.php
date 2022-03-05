<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/d36137915e.js" crossorigin="anonymous"></script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Produtos</title>
  <br>
</head>
<body>

<?php

session_start();
  $usuario = $_SESSION['usuario'];

  if(!isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }

  include 'conexao.php';

$sql = "SELECT nivel_usuario FROM usuario WHERE mail_usuario = '$usuario' and status='Ativo'";
$busca = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($busca);
 $nivel = $array['nivel_usuario'];

 ?>



  <div class="container" style=" margin-top: 40px">

  <div style="text-align: right">
  <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
  </div>

  <h3>Lista de Produtos</h3>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nro Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    <tr>
      <?php
        include 'conexao.php';

        $sql = "SELECT * FROM `estoque`";
        $busca = mysqli_query($conexao,$sql);
        While ($array = mysqli_fetch_array($busca)) {

             $id_estoque = $array['id_estoque'];
             $nroproduto = $array['nroproduto'];
             $nomeproduto = $array['nomeproduto'];
             $categoria = $array['categoria'];
             $quantidade = $array['quantidade'];
             $fornecedor = $array['fornecedor'];
      ?>

      <tr>

    <td><?php echo $nroproduto ?></td>
    <td><?php echo $nomeproduto ?></td>
    <td><?php echo $categoria ?></td>
    <td><?php echo $quantidade ?></td>
    <td><?php echo $fornecedor ?></td>
    <td>

    <?php

    if (($nivel ==1)||($nivel ==2)) {
      ?>
      <a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>"
       role="button"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar</a>
    <?php }

       if ($nivel == 1) {
      ?>

<a class="btn btn-danger btn-sm" href="listar_produto.php?id=<?php echo $id_estoque ?>"
 role="button"><i class="fa-solid fa-trash-can"></i>&nbsp;Excluir</a>

     <?php } ?>
  </td>
    </tr>

    <?php } ?>

    </tr>

  </table>


  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
