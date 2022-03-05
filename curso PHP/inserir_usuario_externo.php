<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Inativo';

$sql = "INSERT INTO usuario (nome_usuario,mail_usuario,senha_usuario,nivel_usuario,status)
values ('$nomeusuario','$mail',sha1('$senha'),$nivel,'$status')";

$inserir = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <center>
    <h3>Usuario adicionado com Sucesso</h3>
    <div style="margin-top: 10px">
      <a href="cadastro_usuario.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
  </div>
   </center>
   </div>
