<!DOCTYPE html>
<html >
<head>
  <title>Listagem de Produtos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d36137915e.js" crossorigin="anonymous"></script>


</head>
<body>

  <div class="container" style=" margin-top: 40px">

    <div style="text-align: right">
      <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>

    <h3>Lista de Produtos</h3>  

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome Categoria</th>
          <th scope="col">Ação</th>
      </tr>
      </thead>

        <?php
        include 'conexao.php';
        $sql = "SELECT * FROM `categoria`";
        $buscar = mysqli_query($conexao,$sql);
        While ($array = mysqli_fetch_array($buscar)) {

             $id_categoria = $array['id_categoria'];
             $nomecategoria = $array['nome_categoria'];

      ?>

      <tr>
        <td><?php echo $nomecategoria?></td>

        <td><a class="btn btn-warning btn-sm" href="editar_categoria.php?id=<?php echo $id_categoria ?>
    " role="button"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar</a>

          <a class="btn btn-danger btn-sm" href="listar_categoria.php?id=<?php echo $id_categoria ?>
    " role="button"><i class="fa-solid fa-trash-can"></i>&nbsp;Excluir</a>
        </td>
      </tr>
      <?php } ?>
      </tr>

    </table>


  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>


</body>

</html>
