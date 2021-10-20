<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="POST">
  <div class="container">
    <h1>Inscrever-se</h1>
    <p>Por favor, preencha este formulário para criar uma conta.</p>
    <hr>
    <label for="nome">Nome:</label>
    <input type="text" placeholder="Digite seu Nome" name="nome" required>

    <label for="sobrenome">Sobrenome:</label>
    <input type="text" placeholder="Digite seu Sobrenome" name="sobrenome" required>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script type="text/javascript">
    $("#telefone").mask("(00) 00000-0000");
    $("#data_de_nascimento").mask("00/00/0000");
    </script>

    <label for="telefone">Telefone:</label>
    <input type="text" class="form-control" placeholder="(00)00000-0000" id="telefone" name="telefone" ><br>

    <label for="telefone">Data de Nascimento:</label>
    <input type="text" class="form-control" placeholder="__/__/____" id="data_de_nascimento" name="data_de_nascimento" ><br>

    <label for="email">Email:</label>
    <input type="text" placeholder="Digite seu email" name="email" required>

    <label for="senha">Senha:</label>
    <input type="senha" placeholder="Digite a senha" name="senha" required>

    <label for="repetir_senha">Repita a senha:</label>
    <input type="password" placeholder="Repita a senha" name="repetir_senha" required>

    <p>Ao criar uma conta, você concorda com nossos <a href="#">Termos e Privacidade</a>.</p>

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


  if(isset($_POST['nome']))
  {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $data_de_nascimento = $_POST['data_de_nascimento'];
    $repetir_senha = $_POST['repetir_senha'];

    $p = new Pessoa();
    if(!empty($nome) and !empty($sobrenome) and !empty($email) and !empty($senha) and !empty($telefone))
    {
      if($senha != $repetir_senha)
      {
        echo "senha não é igual";
      }
      else
      {
        $p->createAccount($nome, $sobrenome, $email, $senha, $telefone, $data_de_nascimento);
        echo $data_de_nascimento;
      }
    }
    else
    {
      echo "preencha todos os campos";
    }

  }







?>