<?php
    class Pessoa
    {

        public function criarConta($nome, $email, $senha)
        {
        try
            {
            global $pdo;


                //verificar email
                $sql = $pdo->prepare("select id from account where email = :email");
                $sql->bindParam(":email", $email);
                $sql->execute();
                if($sql->rowCount() > 0)
                {
                    echo "esse email já existe";
                    return false;
                }
                else
                {
                    $sql = $pdo->prepare("insert into account (nome, email, senha) values (:nome, :email, :senha)");
                    $sql->bindParam(":nome", $nome);
                    $sql->bindParam(":email", $email);
                    $sql->bindParam(":senha", $senha);
                    $sql->execute();
                    echo "conta criada";
                    return true;
                }

            }
            catch(PDOException $err)
            {
                echo "erro".$err;
            }
        }
    }


?>