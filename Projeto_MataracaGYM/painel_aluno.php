<?php
session_start();

// Proteção da página
if (!isset($_SESSION['aluno_id'])) {
    header("Location: login_aluno.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel do Aluno</title>

    <style>
        body {
            background: #111;
            color: #fff;
            font-family: Arial;
            margin: 0;
            padding: 20px;
        }

        .menu {
            margin-bottom: 20px;
        }

        .menu a {
            color:rgb(232, 0, 108);
            text-decoration: none;
            font-size: 18px;
            padding: 10px 15px;
            background: #1c1c1c;
            border-radius: 6px;
            border: 1px solid #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .treino {
            background: #1c1c1c;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #333;
        }

        .treino h2 {
            margin-top: 0;
            color:rgb(195, 0, 107);
        }
    </style>
</head>

<body>

<!-- menu -->
<div class="menu">
<a href="index.php?pg=areadoaluno">⬅ Voltar para Área do Aluno</a>

</div>

<h1>Ficha de Treinos de <?php echo $_SESSION['aluno_nome']; ?></h1>

<!-- Treino A -->
<div class="treino">
    <h2>Treino A – Peito e Tríceps</h2>
    <ul>
        <li>Supino reto – 4x10</li>
        <li>Supino inclinado – 4x10</li>
        <li>Crossover – 3x12</li>
        <li>Tríceps corda – 4x12</li>
        <li>Tríceps testa – 3x10</li>
    </ul>
</div>

<!-- Treino B -->
<div class="treino">
    <h2>Treino B – Costas e Bíceps</h2>
    <ul>
        <li>Puxada alta – 4x10</li>
        <li>Remada baixa – 4x10</li>
        <li>Puxada fechada – 3x12</li>
        <li>Rosca direta – 4x10</li>
        <li>Rosca alternada – 3x12</li>
    </ul>
</div>

<!-- Treino C -->
<div class="treino">
    <h2>Treino C – Pernas</h2>
    <ul>
        <li>Agachamento – 4x10</li>
        <li>Leg press – 4x12</li>
        <li>Cadeira extensora – 3x15</li>
        <li>Mesa flexora – 3x12</li>
        <li>Panturrilha – 4x20</li>
    </ul>
</div>

<!-- Treino D -->
<div class="treino">
    <h2>Treino D – Ombro e Trapézio</h2>
    <ul>
        <li>Desenvolvimento – 4x10</li>
        <li>Elevação lateral – 3x12</li>
        <li>Elevação frontal – 3x12</li>
        <li>Encolhimento – 4x12</li>
    </ul>
</div>

</body>
</html>
