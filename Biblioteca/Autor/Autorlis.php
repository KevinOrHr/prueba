<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Listado Autores</title>
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

    $registros = mysqli_query($conexion, "select Idautor, Nombre from autor") or
        die("Problemas select: " . mysqli_error($conexion));


    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>Codigo</th>";
    echo "<th size='30' >Nombre</th>";
    echo "</tr>";

    while ($regAutor = mysqli_fetch_array($registros)) {


        echo "<tr>";
        echo "<td style='width: 10%';  > $regAutor[Idautor] </td>";
        echo "<td> $regAutor[Nombre]</td>";
        echo "</tr>";
    }

    echo "</table>";
    mysqli_close($conexion);
    ?>

    <th style="width: 10%"></th>
</body>

</html>