<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Painel Administrativo</title>

<style>

/* ======== Fundo geral ======== */
body{
    margin: 0;
    padding: 40px;
    background: #000;
    font-family: "Poppins", Arial, sans-serif;
    color: #ffffff;
}

/* Glow azul */
body::before{
    content: "";
    position: fixed;
    top: 50%;
    left: 50%;
    width: 650px;
    height: 650px;
    transform: translate(-50%, -50%);
    background: radial-gradient(circle, rgba(0,123,255,0.8), transparent 70%);
    filter: blur(90px);
    z-index: -1;
    animation: glow 5s infinite alternate ease-in-out;
}

@keyframes glow {
    from { transform: translate(-50%, -50%) scale(1); opacity: .6; }
    to   { transform: translate(-50%, -50%) scale(1.4); opacity: 1; }
}

/* ======== Título ======== */
h2{
    color: #4fb8ff;
    font-size: 32px;
    text-shadow: 0 0 10px #008cff;
    margin-bottom: 10px;
}

/* ======== Texto ======== */
p{
    font-size: 18px;
    color: #cfe7ff;
    text-shadow: 0 0 6px #004f85;
}

/* ======== Container ======== */
.container{
    background: rgba(25, 25, 25, 0.4);
    padding: 25px;
    border-radius: 15px;
    border: 1px solid rgba(0, 140, 255, 0.4);
    box-shadow: 0 0 20px rgba(0, 140, 255, 0.5);
    max-width: 650px;
    margin: auto;
    backdrop-filter: blur(10px);
}

/* ======== Menu ======== */
.nav{
    display: flex;
    gap: 15px;
    margin-bottom: 30px;
}

.nav a{
    text-decoration: none;
    color: #fff;
    background: #008cff;
    padding: 10px 18px;
    border-radius: 8px;
    font-weight: bold;
    transition: 0.2s;
    box-shadow: 0 0 12px #008cff;
}

.nav a:hover{
    background: #4fb8ff;
    box-shadow: 0 0 18px #4fb8ff;
    transform: scale(1.05);
}

</style>

</head>
<body>

<div class="container">
    <h2>Bem-vindo ao Painel Administrativo</h2>
    <p>Use o menu acima para gerenciar cadastros.</p>
</div>

</body>
</html>
