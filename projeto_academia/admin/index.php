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
        echo "Página não encontrada!";
    }

} else {
    echo "Página não encontrada!";
}

include_once "rodape.php";
?>
