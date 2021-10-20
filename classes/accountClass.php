<?php
    class Pessoa
    {

        public function createAccount($nome, $sobrenome, $email, $senha, $telefone, $data_nascimento)
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
                    $sql = $pdo->prepare("insert into account (nome, sobrenome, nascimento, telefone, email, senha) values (:nome, :sobrenome, :nascimento, :telefone, :email, :senha)");
                    $sql->bindParam(":nome", $nome);
                    $sql->bindParam(":sobrenome", $sobrenome);
                    $sql->bindParam(":email", $email);
                    $sql->bindParam(":senha", $senha);
                    $sql->bindParam(":telefone", $telefone);
                    //criar um regex para pode salva os data de nascimento usando date, mas por enquanto vai fica em varchar mesmo.
                    $sql->bindParam(":nascimento", $data_nascimento);
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