<?php
include_once("admin/config.inc.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $cpf   = $_POST['cpf'];
    $plano = $_POST['plano'];

    // Criar hash da senha
    $senha_hash = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Inserção no banco
    $sql = "INSERT INTO assinaturas (nome, email, cpf, plano, senha_hash)
            VALUES ('$nome', '$email', '$cpf', '$plano', '$senha_hash')";

    if (mysqli_query($conexao, $sql)) {
        header("Location: obrigado.php");
        exit;
    } else {
        echo "<p style='color:red;'>Erro ao salvar: " . mysqli_error($conexao) . "</p>";
    }
}

include_once "topo.php";
include_once "menu.php";
?>

<main class="container-assinar">
    <section class="assinar-box">
        <h1 class="titulo-assinar">ASSINAR PLANO</h1>
        <p class="subtitulo-assinar">Preencha os dados abaixo para concluir sua assinatura.</p>

        <form action="processa_assinatura.php" method="POST" class="form-assinar">

            <div class="campo-form">
                <label for="nome">Nome completo:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="campo-form">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="campo-form">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>
            </div>

            <div class="campo-form">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
            </div>

            <div class="campo-form">
                <label for="plano">Selecione seu plano:</label>
                <select id="plano" name="plano" required>
                    <option value="">-- Escolha --</option>
                    <option value="basic">Basic</option>
                    <option value="plus">Plus</option>
                    <option value="premium">Premium</option>
                </select>
            </div>

            <div class="campo-form">
                <label for="senha">Crie uma senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn-assinar">Confirmar Assinatura</button>
        </form>
    </section>
</main>

<?php
include_once "rodape.php";
?>
