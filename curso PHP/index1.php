<?php
include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhausuario =$_POST['senha'];

$sql = "SELECT mail_usuario,senha_usuario FROM usuario WHERE mail_usuario = '$usuario' and status='Ativo'";
$busca = mysqli_query($conexao,$sql);

 $total = mysqli_num_rows($busca);

 while ($array = mysqli_fetch_array($busca)){

    echo $senha = $array['senha_usuario'];


  echo  $senhadecodificada = sha1($senhausuario);


 if ($total > 0) {

  if ($senhadecodificada == $senha) {
    session_start();
    $_SESSION['usuario'] = $usuario;
    header ('Location: menu.php');

  } else {
    header('Location: erro.php');
  }


 } else {

  header('Location: erro.php');
 }


 }



?>
