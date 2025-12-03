<link rel="stylesheet" href="style-admin.css">
<?php
include_once "config.inc.php";

$id = $_GET['id'];

$sql = "DELETE FROM assinaturas WHERE id = $id";

if (mysqli_query($conexao, $sql)) {
    echo "<script>alert('Assinatura deletada com sucesso!'); location.href='index.php?pg=listar-assinaturas';</script>";
} else {
    echo "<p>Erro ao deletar: " . mysqli_error($conexao) . "</p>";
}
?>

