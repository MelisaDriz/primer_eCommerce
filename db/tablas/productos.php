<?php


//consultas a la bbdd de la tabla productos
//basado en PDOStatement

////////consultas generales/////////

//traer todos los
function productos_traer_todos($db) {

    $sql = 'SELECT * FROM productos';

    $consulta = $db->query($sql);
    if (!$consulta) return false;
    $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $datos;

}

//traer 1
function productos_traer_uno($db, $id){

    $sql = "SELECT * FROM productos' WHERE id = :identificador";
    
    $consulta = $db->prepare($sql);
    $consulta->bindValue(':identificador', $id, PDO::PARAM_INT);
    $consulta->execute();
    $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $datos;
}

//crear 
function productos_crear($db, $descripcion, $stock){

    $sql = "INSERT INTO 'productos' ( 'id', 'descripcion', 'stock', 'fecha_alta')
    VALUES (NULL, '$descripcion', '$stock', current_timestamp())";

    $consulta = $db->exec($sql); //devuelve la cantidad de filas afectadas
    if ($consulta === false) return false;
    
    return $consulta;


}


//actualizar
function productos_actualizar($db, $id_v, $descripcion_n, $stock_n){

    $sql = "UPDATE productos SET descripcion = '$descripcion_n' AND stock = '$stock_n' WHERE id = $id_v";
}

//borrar
function productos_borrar($db){

    $sql = "DELETE FROM productos WHERE id = $id";
    
}


////////consultas particulares/////////

function productos_traer_ultimos($db){

    $sql = "SELECT * FROM `productos` WHERE `fecha_alta` DESC LIMIT 3";
;
}