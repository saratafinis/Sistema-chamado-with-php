<?php

//variaveis que receberam os dados para inserir na função de conexão

$servername = "localhost";
$username = "root";
$password = "root";
$database = "bd_sistema_chamado";

//Função de conexões com o banco de dados
$conexao = new mysqli($servername, $username, $password, $database);

if ($conexao->connect_error) {
    die("Connection failed: ". $conexao->connect_error);
}

?>