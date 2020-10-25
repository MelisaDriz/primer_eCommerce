<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="servidor.php" method="post" enctype="multipart/form-data"> <!--interpretador de archivos binarios-->

        <input type="file" name="archivo">
        <button>Enviar</button>

    </form>

    <!--<div>
    if(isset($_GET['msj'])){
        echo "$_GET['msj']";
    }
    </div>


</body>
</html>