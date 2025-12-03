<?php
include_once("admin/config.inc.php");

// ==== RECEBENDO DADOS DO FORMULÁRIO ====
$nome     = $_POST['nome'];
$email    = $_POST['email'];
$telefone = $_POST['telefone'];
$plano    = $_POST['plano'];
$senha    = $_POST['senha'];

// ==== CRIPTOGRAFANDO A SENHA ====
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// ==== PREPARA O INSERT ====
$sql = "INSERT INTO assinaturas (nome, email, telefone, plano, senha_hash)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

if (!$stmt) {
    die("Erro na preparação do SQL: " . mysqli_error($conexao));
}

// ==== VINCULA PARÂMETROS ====
mysqli_stmt_bind_param($stmt, "sssss",
    $nome, $email, $telefone, $plano, $senha_hash
);

// ==== EXECUTA ====
if (mysqli_stmt_execute($stmt)) {
    header("Location: index.php?pg=obrigado");
    exit;
} else {
    echo "Erro ao salvar: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
?>

