<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <div class="container" style="width:400px">
   <center>
     <h3> Deletado com sucesso</h3>
     <div style="margin-top: 10px">
     <a href="listar_produto.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
     </div
   </center>

   </div>
