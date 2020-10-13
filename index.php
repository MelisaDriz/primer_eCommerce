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

<<<<<<< HEAD

?>
=======
?>
>>>>>>> f8bd28d836b50ed01fe3d3a1bb4a3a38b50b679c
