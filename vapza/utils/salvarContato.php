<?php
require_once("../cadastro/conn.php");

$nome = $_REQUEST["nome"];
$email = $_REQUEST["email"];
$nome = $_REQUEST["senha"];
$confirma_senha = $_REQUEST["confirma_senha"];

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";

$query = $db -> prepare($sql);

$salvar = $query -> execute([
    ":nome"-> $nome,
    ":email"-> $email,
    ":senha"-> $senha
]);

if(isset($salvou) && $salvou == true){
    echo "Usuário cadastrado com sucesso";
  } else { 
    echo "Não foi desta vez, tente novamente";
}
?>