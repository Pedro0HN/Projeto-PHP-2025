<style>
    body {
        margin: 0;
        padding: 0;
        background: #111;
        font-family: Arial, sans-serif;
        color: #fff;
    }

    h2, p {
        text-align: center;
    }

    .painel {
        width: 90%;
        max-width: 600px;
        margin: 80px auto;
        background: #1a1a1a;
        padding: 25px;
        border-radius: 10px;
        border: 2px solid #ff1493;
        box-shadow: 0 0 12px #ff1493;
        text-align: center;
    }

    .btn-voltar {
        text-decoration: none;
        display: inline-block;
        background: #ff1493;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: bold;
        color: #000;
        margin-top: 20px;
        transition: .2s;
    }

    .btn-voltar:hover {
        background: #ff40b4;
        box-shadow: 0 0 10px #ff1493;
    }
</style>

<?php
include_once "config.inc.php";

$id = $_GET['id'];
$sql = "DELETE FROM assinaturas WHERE id = $id";

echo "<div class='painel'>";

if (mysqli_query($conexao, $sql)) {
    echo "<h2>Assinatura deletada com sucesso!</h2>";
} else {
    echo "<h2>Erro ao deletar</h2>";
    echo "<p>" . mysqli_error($conexao) . "</p>";
}

echo "<a href='index.php?pg=listar-assinaturas' class='btn-voltar'>Voltar</a>";
echo "</div>";
?>
