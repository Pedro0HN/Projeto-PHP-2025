<?php
session_start();

if (!isset($_SESSION['aluno_id'])) {
    header("Location: area_do_aluno.php"); 
    exit();
}

$_SESSION['aluno_nome'] = $_SESSION['aluno_nome'] ?? 'Fulano de Tal'; 

// Dados de Treinos
$treino_a = [
    'nome' => 'Treino A - Peito, Ombro e Tríceps',
    'exercicios' => [
        'Supino Reto com Barra',
        'Desenvolvimento Militar',
        'Elevação Lateral',
        'Crucifixo Inclinado',
        'Tríceps Testa'
    ],
    'series_repeticoes' => '3 Séries de 10-12 Repetições'
];

$treino_b = [
    'nome' => 'Treino B - Costas e Bíceps',
    'exercicios' => [
        'Puxada Alta (Lat Pulldown)',
        'Remada Curvada com Halteres',
        'Serrote (Remada Unilateral)',
        'Rosca Direta com Barra',
        'Rosca Martelo'
    ],
    'series_repeticoes' => '4 Séries de 8-10 Repetições'
];

$treino_c = [
    'nome' => 'Treino C - Pernas e Abdômen',
    'exercicios' => [
        'Agachamento Livre',
        'Leg Press 45°',
        'Extensora (Cadeira Extensora)',
        'Flexora (Mesa Flexora)',
        'Abdominal na Máquina'
    ],
    'series_repeticoes' => '3 Séries de 12-15 Repetições'
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Aluno | Academia Mataraca</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <header>
        <div class="container">
            <h1>💪 Área do Aluno</h1>
            <a href="logout.php" class="btn-sair">Sair</a>
        </div>
    </header>

    <main class="container">
        <section class="boas-vindas">
            <h2>Bem-vindo(a), <?php echo htmlspecialchars($_SESSION['aluno_nome']); ?>!</h2>
            <p>Seu espaço exclusivo para gerenciar seus treinos e horários.</p>
        </section>

        <hr>

        <section class="painel-info">
            <div class="card-info">
                <h3>🗓️ Próximo Treino</h3>
                <p>Seu treino de **Hoje** é o **Treino A**.</p>
                <p class="horario">Horário Agendado: 18:00h</p>
            </div>
            <div class="card-info">
                <h3>⏱️ Horários</h3>
                <p>Disponibilidade de Aulas: **Livre**</p>
                <p class="horario-abertura">A academia está aberta das 6h às 22h.</p>
            </div>
        </section>

        <hr>

        <section class="treinos">
            <h2>🏋️ Meus Treinos</h2>

            <div class="treino-container">
                <div class="treino-card">
                    <h3><?php echo $treino_a['nome']; ?></h3>
                    <p class="series-info"><?php echo $treino_a['series_repeticoes']; ?></p>
                    <ul>
                        <?php foreach ($treino_a['exercicios'] as $exercicio): ?>
                            <li><?php echo $exercicio; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <button class="btn-treino">Ver Detalhes</button>
                </div>

                <div class="treino-card">
                    <h3><?php echo $treino_b['nome']; ?></h3>
                    <p class="series-info"><?php echo $treino_b['series_repeticoes']; ?></p>
                    <ul>
                        <?php foreach ($treino_b['exercicios'] as $exercicio): ?>
                            <li><?php echo $exercicio; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <button class="btn-treino">Ver Detalhes</button>
                </div>

                <div class="treino-card">
                    <h3><?php echo $treino_c['nome']; ?></h3>
                    <p class="series-info"><?php echo $treino_c['series_repeticoes']; ?></p>
                    <ul>
                        <?php foreach ($treino_c['exercicios'] as $exercicio): ?>
                            <li><?php echo $exercicio; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <button class="btn-treino">Ver Detalhes</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Academia mataraca. Seu sucesso é nosso objetivo.</p>
    </footer>
</body>
</html>
