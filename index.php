<?php
/* Define a página atual pela URL */
$pagina = 'home';
if (isset($_GET['pagina'])) {
    $pagina = addslashes($_GET['pagina']);
}

/* Carrega o header.php */
include 'app/views/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
    case 'especificacoes':
        include 'app/views/especificacoes.php';
        break;

    case 'fotos':
        include 'app/views/fotos.php';
        break;

    case 'multimidia':
        include 'app/views/multimidia.php';
        break;

    case 'fale-conosco':
        include 'app/views/fale-conosco.php';
        break;

    case 'daniela':
        include 'app/views/daniela.php';
        break;

    default:
        include 'app/views/home.php';
        break;
}

/* Carrega o footer.php */
include 'app/views/footer.php';
