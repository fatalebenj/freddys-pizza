<?php

# THACILA
function SalvarMensagem ($nome, $telefone, $email, $mensagem) {
    $linha = $nome . "|" . $telefone . "|" . $email . "|" . $mensagem ."\n";
    file_put_contents("mensagens.txt", $linha, FILE_APPEND);

}
function FormularioDeMensagens(){
#MUDEI O NOME DA FUNÇÃO (ESTAVA CONTATOS) E MUDEI O NOME DA VARIAVEL DE MENSAGEM PRA MENSAGENS
$arquivo =__DIR__."/../mensagens.txt";
if (file_exists($arquivo)) {
 $linhas = file($arquivo, FILE_IGNORE_NEW_LINES);
 $Mensagens = [];
 foreach ($linhas as $linha){
    $partes = explode("|", $linha,4);
    $Mensagens[]= [
        "nome"=> $partes[0],
        "telefone"=> $partes[1],
        "email"=> $partes[2],
        "mensagem"=> $partes[3]
    ];
 }
 return $Mensagens;
}
return[];
}
?>