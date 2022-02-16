<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentb holaaa</title>
</head>

<body>


    <?php
    //$dia=date("d");
    //if ($dia <=10) {
    // echo "Se puede ingresar<br>";
    // $nombre = "Alber";
    // echo "hola grupo<br>";
    //  echo "Mi nombre es: ".$nombre."<br>";
    // } else {
    //   echo "No se puede ingresar<br>";
    // }


    //$num= mt_rand(1,50)/10;

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $prom = ($nota1 + $nota2 + $nota3) / 3;

    $nom = $_POST['nombre'];
    echo "Estudiante: " . $nom;
    echo "<br>Su nota es: " . number_format($prom, 1) . "<br>";

    if ($prom <= 2.9) {
        echo "Bajo";
    } elseif ($prom >= 3 && $prom <= 3.9) {
        echo "Basico";
    } elseif ($prom >= 4 && $prom <= 4.5) {
        echo "Alto";
    } else {
        echo "Superior";
    }
    echo "<br>";

    echo "<table border='1' >";
    for ($i = 2; $i <= 100; $i += 2) {
        echo "<td>" . $i . "</td>";
    }
    echo "</table>";

    echo "<br>";

    echo "<table border ='1'>";
    $a = 2;
    while ($a <= 100) {
        echo "<td>" . $a . "</td>";
        $a += 2;
    }
    echo "</table>";

    echo "<br>";


    //1

    $acu = 1;

    echo "<table border = '1'>";

    for ($i = 1; $i <= 10; $i++) {

        echo "<tr>";

        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . $acu++ . "</td>";
        }

        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";

    //2
    $acu = 5;
    for ($i = 1; $i <= 10; $i++) {

        echo "<hr width='$acu%' style='height: 3px ; background-color:black'  >";
        $acu += 3;
    }

    echo "<br>" . "<hr style='height: 4px ; background-color:red'  >";


    //3

    echo "<br>";

    $acu = 5;

    for ($i = 0; $i <= 14; $i++) {

        echo "<hr width='$acu%' style='height: 3px ; background-color:black'  >";

        if ($i >= 9) { } else {
            $acu += 3;
        }
    }

    echo "<br>";

    echo "<hr style='height : 3px; background-color:red'>";

    //4

    for ($i = 0; $i <= 3; $i++) {
        $acu = 5;

        if ($i < 3) {
            for ($j = 0; $j < 7; $j++) {
                echo "<hr width='$acu%' style='height: 3px ; background-color:black'  >";
                $acu += 3;
            }
        } else {
            $acu = 8;
            for ($k = 0; $k < 7; $k++) {
                echo "<hr width='$acu%' style='height: 3px ; background-color:blue'  >";
            }
        }
    }

    //5


    echo "<table border ='2'>";


    for ($i = 1; $i <= 10; $i++) {

        echo "<tr>";

        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";    



    // fopen abrir el archivoo y el fputs es para llenar el archivo y el fclose  para cerrar el archivo









    // round(float $val, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float
    ?>


</body>

</html>