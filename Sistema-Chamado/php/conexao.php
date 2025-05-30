<?php

//variaveis que receberam os dados para inserir na função de conexão

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$database = "bd_sistema_chamado";

//Função de conexões com o banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $database);

if ($conn->connect_error) {
    die("error:".$conn->connect_error);
}

?>