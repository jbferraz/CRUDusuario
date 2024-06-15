<?php
class cUsuario
{
    public function inserir()
    {
        if (isset($_POST['salvar'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $pas = $_POST['pas'];
            $pdo = require_once '../pdo/connection.php';
            $sql = "insert into usuario (nome, email, pass) values (?,?,?)";
            $sth = $pdo->prepare($sql);
            $sth->bindParam(1, $nome, PDO::PARAM_STR);
            $sth->bindParam(2, $email, PDO::PARAM_STR);
            $sth->bindParam(3, $pasENC, PDO::PARAM_STR);
            $pasENC = password_hash($pas, PASSWORD_DEFAULT);
            $sth->execute();
            unset($sth);
            unset($pdo);
        }
    }
}
