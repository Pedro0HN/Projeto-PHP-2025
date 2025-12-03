<?php
session_start();
require_once "admin/config.inc.php"; // <-- arquivo que conecta ao banco

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    // Consulta o aluno pelo email
    $sql = "SELECT id, nome, email, senha_hash FROM assinaturas WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {

        $aluno = $resultado->fetch_assoc();

        // Confere a senha (considerando senha HASH)
        if (password_verify($senha, $aluno['senha_hash'])) {

            // Login OK, cria sessão
            $_SESSION['aluno_id'] = $aluno['id'];
            $_SESSION['aluno_nome'] = $aluno['nome'];
            $_SESSION['aluno_email'] = $aluno['email'];

            header("Location: painel_aluno.php");
            exit();
        } else {
            echo "<script>alert('Senha incorreta.'); window.history.back();</script>";
        }

    } else {
        echo "<script>alert('E-mail não encontrado.'); window.history.back();</script>";
    }

}
?>
