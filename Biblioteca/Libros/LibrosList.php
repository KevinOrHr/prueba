<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Listado libros</title>
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
    $conexion = mysqli_connect("localhost", "root", "", "biblioteca") or
        die("Problemas de conexión");

    $registros = mysqli_query($conexion, "select libros.isbn,libros.titulo,autor.Nombre as autor,editorial.Nombre as editorial from libros, autor, editorial WHERE
    libros.idautor = autor.Idautor and libros.ideditorial = editorial.Id") or
        die("Problemas select: " . mysqli_error($conexion));


    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>Isbn</th>";
    echo "<th>Titulo</th>";
    echo "<th>Autor</th>";
    echo "<th>Editorial</th>";
    echo "</tr>";

    while ($regLibros = mysqli_fetch_array($registros)) {


        echo "<tr>";
        echo "<td style='width: 10%' > $regLibros[isbn] </td>";
        echo "<td> $regLibros[titulo]</td>";
        echo "<td> $regLibros[autor]</td>";
        echo "<td> $regLibros[editorial]</td>";

        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conexion);
    ?>

    <th style="width: 10%"></th>
</body>

</html>