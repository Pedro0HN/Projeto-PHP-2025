<link rel="stylesheet" href="style-admin.css">
<?php
include_once "config.inc.php";

$id = $_GET['id'];

$sql = "SELECT * FROM assinaturas WHERE id = $id";
$result = mysqli_query($conexao, $sql);
$cli = mysqli_fetch_assoc($result);

if (!$cli) {
    echo "<p>Assinante não encontrado!</p>";
    exit;
}
?>

<h2>Editar Assinatura</h2>

<form action="" method="post">

    Nome:<br>
    <input type="text" name="nome" value="<?php echo $cli['nome']; ?>"><br><br>

    Email:<br>
    <input type="email" name="email" value="<?php echo $cli['email']; ?>"><br><br>

    Telefone:<br>
    <input type="text" name="telefone" value="<?php echo $cli['telefone']; ?>"><br><br>

    Plano:<br>
    <input type="text" name="plano" value="<?php echo $cli['plano']; ?>"><br><br>

    <input type="submit" name="salvar" value="Salvar Alterações">
</form>

<?php
if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $plano = $_POST['plano'];

    $up = "UPDATE assinaturas 
           SET nome='$nome', email='$email', telefone='$telefone', plano='$plano' 
           WHERE id=$id";

    if (mysqli_query($conexao, $up)) {
        echo "<script>alert('Alterado com sucesso!'); location.href='index.php?pg=listar-assinaturas';</script>";
    } else {
        echo "<p>Erro ao atualizar: " . mysqli_error($conexao) . "</p>";
    }
}
?>
