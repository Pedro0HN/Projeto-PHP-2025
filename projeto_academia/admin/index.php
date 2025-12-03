<style>
    body {
        margin: 0;
        padding: 0;
        background: #0b0f14;
        font-family: Arial, sans-serif;
        color: #d9ffff;
    }

    h1, h2, h3 {
        color: #00eaff;
        text-align: center;
    }

    #menu {
        width: 100%;
        background: #071018;
        padding: 15px;
        display: flex;
        justify-content: center;
        border-bottom: 2px solid #00eaff;
        box-shadow: 0 0 12px #00eaff;
    }

    #menu a {
        color: #00eaff;
        font-weight: bold;
        text-decoration: none;
        margin: 0 18px;
        padding: 10px 15px;
        border-radius: 6px;
        transition: .2s;
    }

    #menu a:hover {
        background: #00eaff;
        color: #000;
        box-shadow: 0 0 8px #00eaff;
    }

    .conteudo {
        width: 90%;
        max-width: 1000px;
        margin: 30px auto;
        padding: 20px;
        background: #0f1821;
        border: 1px solid #00eaff;
        border-radius: 12px;
        box-shadow: 0 0 15px #00eaff;
    }

    #rodape {
        width: 100%;
        text-align: center;
        padding: 15px;
        margin-top: 40px;
        background: #071018;
        color: #00eaff;
        border-top: 2px solid #00eaff;
        box-shadow: 0 -0 12px #00eaff;
    }

    a {
        color: #00eaff;
        transition: .2s;
    }

    a:hover {
        color: #8fffff;
    }
</style>

<link rel="stylesheet" href="style-admin.css">

<?php
include_once "topo.php";
include_once "menu.php";

if (empty($_SERVER['QUERY_STRING'])) {
    include_once "conteudo.php";

} elseif (isset($_GET['pg'])) {

    $pg = $_GET['pg'];

    if (file_exists("$pg.php")) {
        include_once("$pg.php");
    } else {
        echo "<br><div class='conteudo'><h2>Página não encontrada!</h2></div>";
    }

} else {
    echo "<br><div class='conteudo'><h2>Página não encontrada!</h2></div>";
}

include_once "rodape.php";
?>
