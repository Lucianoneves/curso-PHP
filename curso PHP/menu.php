<!DOCTYPE html>
<html lang="pr-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
<div class="container" style="margin-top: 100px">

  <div class="row">
   <?php

   if (($nivel == 1)||($nivel ==2)) {


?>


  <div class="col-sm-6" style = "margin-top: 20px ">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produto</h5>
        <p class="card-text">Opção para adiconar  produtos em estoque.</p>
        <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
      </div>
    </div>
  </div>

  <?php } ?>

  <div class="col-sm-6" style = "margin-top: 20px ">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Visualizar, editar, e excluir os produtos.</p>
        <a href="listar_produto.php" class="btn btn-primary">Produtos</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6" style = "margin-top: 20px ">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Categoria</h5>
        <p class="card-text">Opção para adiconar categoria de produto.</p>
        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6" style = "margin-top: 20px ">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Fornecedor</h5>
        <p class="card-text">Opção para adicionar fornecedores.</p>
        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fronecedores</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6" style = "margin-top: 20px ">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Usuarios</h5>
        <p class="card-text">Cadastrar Usuarios.</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuarios</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6" style = "margin-top: 20px ">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuarios</h5>
        <p class="card-text">Aprovar Usuarios Cadastrados.</p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuarios</a>
      </div>
    </div>
  </div>


</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>











