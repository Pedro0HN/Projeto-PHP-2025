<style>
    body {
        margin: 0;
        padding: 0;
        background: #111;
        font-family: Arial, sans-serif;
        color: #fff;
    }

    h2 {
        text-align: center;
        color: #ff1493;
        margin-top: 30px;
    }

    form {
        width: 90%;
        max-width: 500px;
        margin: 40px auto;
        padding: 20px;
        background: #1a1a1a;
        border-radius: 10px;
        border: 2px solid #ff1493;
        box-shadow: 0 0 12px #ff1493;
    }

    label, input {
        width: 100%;
        display: block;
        font-size: 16px;
    }

    input[type="text"],
    input[type="email"] {
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border-radius: 6px;
        border: 1px solid #ff1493;
        background: #000;
        color: #fff;
        outline: none;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
        box-shadow: 0 0 10px #ff1493;
    }

    input[type="submit"] {
        width: 100%;
        background: #ff1493;
        border: none;
        padding: 12px;
        border-radius: 8px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        color: #000;
        transition: .2s;
    }

    input[type="submit"]:hover {
        background: #ff40b4;
        box-shadow: 0 0 10px #ff1493;
    }
</style>

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

    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo $cli['nome']; ?>">

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $cli['email']; ?>">

    <label>Telefone:</label>
    <input type="text" name="telefone" value="<?php echo $cli['telefone']; ?>">

    <label>Plano:</label>
    <input type="text" name="plano" value="<?php echo $cli['plano']; ?>">

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
