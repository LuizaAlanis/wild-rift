<?php

try{
    $servidor = "localhost"; // escrever o ip para colocar em produção
    $usuario = "riot"; // usuário do banco de dados
    $senha = "1234567"; // a senha dela
    $banco = "dbRiot"; // o nome do banco de dados do sistema
    
    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha); // string de conexão
}
catch (PDOException $erro){
    echo $erro->getMessage();
}
