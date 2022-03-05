<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <title>Aprovar usuários</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7873db2fc3.js" crossorigin="anonymous"></script>

  </head>
  <body>

    <div class="container" style="margin-top:40px;">
      <div style="text-align: right">
        <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
      </div>
        <h4>Lista de usuários </h4>
        <br>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col">Nível</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>

    <?php
      include 'conexao.php';
      $sql = "SELECT * FROM usuario WHERE status = 'Inativo'";
      $busca = mysqli_query($conexao,$sql);

      while ($array = mysqli_fetch_array ($busca)) {

        $id_usuario = $array['id_usuario'];
        $nomeusuario = $array['nome_usuario'];
        $mail = $array['mail_usuario'];
        $nivel = $array['nivel_usuario'];

    ?>

    <tr>
      <td><?php echo $nomeusuario ?></td>
      <td><?php echo $mail ?></td>
      <td><?php echo $nivel ?></td>
       <td>
      <a class="btn btn-success btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>
      &nivel=1" role="button"><i class="far fa-smile-beam"></i>&nbsp;Administrador</a>
      <a class="btn btn-warning btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>
      &nivel=2" role="button"><i class="far fa-smile-beam"></i>&nbsp;Funcionario</a>
      <a class="btn btn-dark btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>
      &nivel=3" role="button"><i class="far fa-smile-beam"></i>&nbsp;Conferente</a>

      <a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>"
       role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
      </td>
    </tr>

    <?php } ?>


  </table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
