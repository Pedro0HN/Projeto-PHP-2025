<?php
// Conexão com o banco
$conexao = mysqli_connect("127.0.0.1", "root", "");

if (!$conexao) {
    die("<p style='color:red; font-family:Arial;'>Erro ao conectar ao MySQL.</p>");
}

$db = mysqli_select_db($conexao, "projeto_academia");

if (!$db) {
    die("<p style='color:red; font-family:Arial;'>Banco 'projeto_academia' não encontrado.</p>");
}
?>
