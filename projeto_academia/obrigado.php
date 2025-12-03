<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Assinatura Concluída</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #000;
            font-family: "Poppins", Arial, sans-serif;
            color: #fff;
        }

        
        .center-wrapper {
            min-height: calc(100vh - 120px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 40px;
        }

        .obrigado_box {
            width: 450px;
            background: rgba(20, 20, 20, 0.6);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            border: 1px solid rgba(0, 153, 255, 0.4);
            box-shadow: 0 0 20px rgba(0, 153, 255, 0.6);
            backdrop-filter: blur(12px);
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .obrigado_box h1 {
            font-size: 28px;
            font-weight: 700;
            color: #4fb8ff;
            text-shadow: 0 0 10px #0099ff;
            margin-bottom: 15px;
        }

        .obrigado_box p {
            font-size: 16px;
            color: #bcdcff;
            margin-bottom: 25px;
        }

        .botao_voltar_home {
            display: inline-block;
            padding: 12px 28px;
            background: #0099ff;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 10px;
            box-shadow: 0 0 15px #0099ff;
            transition: 0.2s;
        }

        .botao_voltar_home:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px #4fb8ff;
        }
    </style>

</head>
<body>

    <div class="center-wrapper">
        <div class="obrigado_box">
            <h1>Assinatura realizada com sucesso!</h1>
            <p>Obrigado por se cadastrar. Sua assinatura foi registrada no sistema.</p>

            <a href="index.php" class="botao_voltar_home">Voltar para a página inicial</a>
        </div>
    </div>

</body>
</html>
