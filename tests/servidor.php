<?php
//recibir la petición http
//rebicimos la parte TEXTUAL de un multipart/form-data:
//var_dump($_POST);
//recibe la parte BINARIA de un multipart/form-data:
var_dump($_FILES);

//enviar la respuesta http

$nombre = $_FILES['archivo']['name'];
$rutaTemporal = $_FILES['archivo']['tmp_name'];
$datosDelTipo = explode ('/', $_FILES['archivo']['type']);
$tipo = $datosDelTipo[0];
$subtipo = $datosDelTipo[1];

//copia el contenido de un archivo temporal a un archivo definitivo en el servidor (use la extension .jpg a modo de ejemplo)
move_uploaded_file($rutaTemporal, 'destino.jpg');

//devuelve el nombre del archivo:
echo "<h1>$nombre</h1>";
//devuelve el tipo del archivo:
echo "<p>Tipo: $tipo | Subtipo: $subtipo</p>";

echo file_get_contents($rutaTemporal);