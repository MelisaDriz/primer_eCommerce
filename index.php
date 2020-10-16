<?php

$paramsPag = 'pag';

$paginas = [
    'inicio',
    'producto'
];

require_once 'functions/utils.php';

if (isset($_GET[$paramsPag])){
    $encontrada = false;
    foreach ($paginas as $pagina) {
        if ($pagina == $_GET(paramsPag)){
            $encontrada = true;
        }
    }
    if ($encontrada){
        require_once 'header.php';
        require_once ''.$_GET[$paramsPag].'.php';
        require_once 'footer.php';
    } else {
        header('Location: index.php');
    } 
} else {
    require_once 'header.php';
    require_once 'inicio.php';
    require_once 'footer.php';
}


?>
