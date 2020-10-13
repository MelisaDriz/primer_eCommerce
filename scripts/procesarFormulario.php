<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$errores = [];

if ($nombre == '') array_push($errores, 'El nombre está vacío');
if ($email == '') array_push($errores, 'El email está vacío');
if ($mensaje == '') array_push($errores,'El mensaje está vacío');
if (is_numeric($nombre)) array_push($errores, 'El nombre no debe ser un número');
if (strlen($nombre) > 3) array_push($errores,'El nombre tiene una longitud inadecuada');
if (!strpos($email, '@') && !strpos($email, '.')) array_push($errores, 'El email tiene un formato inválido');

if (count($errores) > 0) {
    header('Location: ../index.php?p=contacto&estado=error');
} else {
    header('Location: ../index.php?p=contacto&estado=ok');
}




?>