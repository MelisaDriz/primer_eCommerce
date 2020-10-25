<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <h2>Bienvenido administrador<h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (productos_traer_todos($db) as $key => $fila): ?>
                <tr>
                    <td><?php= $fila['id'] ?></td>
                    <td><?php= $fila['descripcion'] ?></td>
                    <td>
                        <a href="detalle.php?id=<?$fila['id']?>">Ver</a> 
                        <a href="editar.php?id=<?$fila['id']?>">Editar</a> 
                        <a href="borrar.php?id=<?$fila['id']?>">Borrar</a> 
                    </td>
                </tr>
        </tbody>
    </table>


</body>
</html>