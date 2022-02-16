<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Registro Completo</title>
</head>
<body>

<header>
      <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.html">Menu</a>
          </li>
        </ul>
  </header>


    <?php

    $conexion = mysqli_connect("localhost","root","","biblioteca") or
    die("Problemas de conexción");

    mysqli_query($conexion, "insert into autor(Idautor,Nombre) values('$_REQUEST[idautor]', '$_REQUEST[nombre]')") or
    die("Problemas con el select ". mysqli_error($conexion));

    mysqli_close($conexion);

    echo "Insert correctamente";

    ?>
    
</body>
</html>