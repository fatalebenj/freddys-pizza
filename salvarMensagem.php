<?php
require "model/Mensagem.php";
$nome = $_POST['nome'];
$telefone = $_POST ['fone'];
$email = $_POST ['email'];
$mensagem = $_POST['mensagem'];
 

if ($nome == "" || $telefone == "" || $email == "" || $mensagem == "") {
    echo "Preencha todos os campos. <a href='index.html'>Voltar</a>";
    exit;
}

SalvarMensagem($nome, $telefone, $email, $mensagem);
header("Location: index.html");
exit;
?>
