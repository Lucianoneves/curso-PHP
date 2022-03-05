<!DOCTYPE html>
<html lang="pr-BR">
<head>
  <title>Menu</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<div class="container" style="width:400px; margin-top: 40px">
<div style="text-align: right">
<a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</div>
<h4>Cadastro de Usuário</h4>
<form action="_inserir_usuario.php"method="post">
  <div class="form-group">
    <label>Nome do Usuario</label>
    <input type="text" name = "nomeusuario" class = "form-control" required autocomplete = "off" placeholder="Nome Completo">
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="email" name = "mailusuario" class = "form-control" required autocomplete = "off" placeholder="Seu E-mail">
  </div>

  <div class="form-group">
    <label>Senha do Usuario</label>
    <input  id="txtSenha" type="password" name = "senhausuario" class = "form-control" required autocomplete = "off" placeholder="Senha">
  </div>

  <div class="form-group">
    <label>Repetir Senha</label>
    <input type="password" name = "senhausuario2" class = "form-control" required autocomplete = "off" placeholder="Repetir Senha"
    oninput="validaSenha(this)">
    <small>Precisa ser igual a senha digitada acima</small>
  </div>

  <div class="form-group">
    <label>Nivel de Acesso</label>
    <select name="nivelusuario" class="form-control">

        <option value="1">Administrador</option>
        <option value="2">Funcionario</option>
        <option value="3">Conferente</option>



    </select>
  </div>
  <div style="text-align: right">
 <button type="submit" class= "btn btn-sm btn-success">Cadastrar</button>
</div>


  </form>

</div>



</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>


<script>
function validaSenha (input){
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
}
</script>

</body>
</html>


















