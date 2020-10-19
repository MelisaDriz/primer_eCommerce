<?php

//conecta con la base de datos con PDO

$db = false;
//código que previene excepciones
try{

    $db = new PDO ('mysql:host=localhost; dbname=ecommerce_eduit', 'root', '');
   
} catch(Exception $ex){

    die ('Error al conectarse con la base de datos');

}
