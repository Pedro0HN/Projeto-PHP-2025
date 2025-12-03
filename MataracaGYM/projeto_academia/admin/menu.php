<style>
    body {
        margin: 0;
        padding: 0;
        background: #0b0f14;
        font-family: Arial, sans-serif;
        color: #d9ffff;
    }

    #menu {
        width: 100%;
        background: #071018;
        padding: 15px;
        display: flex;
        justify-content: center;
        gap: 25px;
        border-bottom: 2px solid #00eaff;
        box-shadow: 0 0 12px #00eaff;
    }

    #menu a {
        color: #00eaff;
        font-weight: bold;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 6px;
        transition: 0.2s;
    }

    #menu a:hover {
        background: #00eaff;
        color: #000;
        box-shadow: 0 0 8px #00eaff;
    }

    #conteudo {
        width: 90%;
        max-width: 1000px;
        margin: 30px auto;
        background: #0f1821;
        padding: 25px;
        border-radius: 12px;
        border: 1px solid #00eaff;
        box-shadow: 0 0 15px #00eaff;
        color: #d9ffff;
        min-height: 300px;
    }
</style>

<link rel="stylesheet" href="style-admin.css">

<div id="menu">
    <a href="index.php">Início</a>
    <a href="index.php?pg=listar-assinaturas">Listar Clientes</a>
</div>

<div id="conteudo">
