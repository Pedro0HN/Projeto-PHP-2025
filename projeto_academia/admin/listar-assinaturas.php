<link rel="stylesheet" href="style-admin.css">
<?php
include_once "config.inc.php";

$sql = "SELECT * FROM assinaturas ORDER BY id DESC";
$consulta = mysqli_query($conexao, $sql);
?>

<h2>Lista de Assinantes</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Plano</th>
        <th>Ações</th>
    </tr>

    <?php while ($dados = mysqli_fetch_assoc($consulta)) { ?>
        <tr>
            <td><?php echo $dados['id']; ?></td>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['email']; ?></td>
            <td><?php echo $dados['telefone']; ?></td>
            <td><?php echo $dados['plano']; ?></td>
            
            <td>
                <a href="index.php?pg=editar-assinaturas&id=<?php echo $dados['id']; ?>">Editar</a> |
                <a href="index.php?pg=deletar-assinaturas&id=<?php echo $dados['id']; ?>"
                   onclick="return confirm('Tem certeza que deseja excluir esta assinatura?');">
                   Deletar
                </a>
            </td>
        </tr>
    <?php } ?>

</table>
