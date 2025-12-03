<style>
    body {
        margin: 0;
        padding: 0;
        background: #0b0f14;
        font-family: Arial, sans-serif;
        color: #d9ffff;
    }

    h2 {
        text-align: center;
        color: #00eaff;
        margin: 30px 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    table {
        width: 95%;
        max-width: 1100px;
        margin: 0 auto;
        border-collapse: collapse;
        background: #0f1821;
        border: 1px solid #00eaff;
        box-shadow: 0 0 15px #00eaff;
        border-radius: 8px;
        overflow: hidden;
    }

    table th {
        background: #071018;
        color: #00eaff;
        padding: 12px;
        font-size: 17px;
        border-bottom: 2px solid #00eaff;
        text-transform: uppercase;
    }

    table td {
        padding: 12px;
        color: #d9ffff;
        border-bottom: 1px solid #003a45;
        text-align: center;
    }

    tr:hover {
        background: #102633;
    }

    a {
        color: #00eaff;
        font-weight: bold;
        text-decoration: none;
        transition: .2s;
    }

    a:hover {
        color: #8fffff;
        text-shadow: 0 0 8px #00eaff;
    }
</style>

<link rel="stylesheet" href="style-admin.css">
<?php
include_once "config.inc.php";

$sql = "SELECT * FROM assinaturas ORDER BY id DESC";
$consulta = mysqli_query($conexao, $sql);
?>

<h2>Lista de Assinantes</h2>

<table border="0" cellpadding="10">
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
