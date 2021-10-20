<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="action_page.php" method="post">
  <div class="container">
    <h1>Inscrever-se</h1>
    <p>Por favor, preencha este formulário para criar uma conta.</p>
    <hr>
    <label for="primeiro_nome">Nome:</label>
    <input type="text" placeholder="Digite seu Nome" nome="nome" required>

    <label for="sobrenome">Sobrenome:</label>
    <input type="text" placeholder="Digite seu Sobrenome" nome="sobrenome" required>

    <label for="email">Email:</label>
    <input type="text" placeholder="Digite seu email" name="email" required>

    <label for="senha">Senha:</label>
    <input type="senha" placeholder="Digite a senha" name="senha" required>

    <label for="repetir_senha">Repita a senha:</label>
    <input type="password" placeholder="Repita a senha" name="repetir_senha" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>Ao criar uma conta, você concorda com nossos <a href="#" style="color:dodgerblue">Termos e Privacidade</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancelar</button>
      <button type="submit" value="cadastrar" class="signupbtn">Inscrever-se</button>
    </div>
  </div>
</form>

</body>
</html>



<?php
  require_once("config.php");
  require_once("classes/accountClass.php");

    $p = new Pessoa();

    $p->criarConta("null","vitoar@hotmail.com","21321312");



?>