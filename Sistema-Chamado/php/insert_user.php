<?php 

include 'conexao.php';

//recebendo os dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$setor = $_POST['setor'];
$senha = $_POST ['senha'];


$sql = "INSERT INTO `tb_user` VALUES (NULL, '$nome','$email','$setor', '$senha');";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('usuario cadastrado com sucesso!'); history.back();</script>";
}

$conn->close();
?>
