<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="text-align: center">

    <header></header>
    <?php
    
    $ar = fopen("davivienda.txt", "a") or
    die("No se logro registrar los datos");
    fputs($ar,$_REQUEST['nombre']);
    fputs($ar,"\t");
    fputs($ar,$_REQUEST['cedula']);
    fputs($ar,"\t");
    fputs($ar,$_REQUEST['valor']);
    fputs($ar,"\t");
    fputs($ar,$_REQUEST['tipo']);
    fputs($ar,"\t");
    fputs($ar,$_REQUEST['cuenta']);
    fputs($ar,"\t");
    fputs($ar, date("d/m/Y"));
    fputs($ar,"\n");
    /*fputs($ar,"\n");
    fputs($ar,"----------------------");
    fputs($ar,"\n"); */
    fclose($ar);

    
    $dav = file("davivienda.txt");
    $num_cuent = count($dav);

    if ($num_cuent == 0) {
        echo "<p>No hay cuentas</p>";
    }
    echo "<table border = 1 align =center\n>";
    echo "<tr>
            <th bgcolor = \"CCCCFF\">Nombre</td>
            <th bgcolor = \"CCCCFF\">Cedula</td>
            <th bgcolor = \"CCCCFF\">Valor</td>
            <th bgcolor = \"CCCCFF\">Tipo</td>
            <th bgcolor = \"CCCCFF\">Cuenta</td>
            <th bgcolor = \"CCCCFF\">Fecha</td>   
         </tr>";
    for ($i=0; $i < $num_cuent ; $i++) { 
        //corta en lineas cuando encuentre un \t
        $linea = explode("\t",$dav[$i]);
        echo "<tr>
                <td>$linea[0]</td>
                <td>$linea[1]</td>
                <td>$linea[2]</td>
                <td>$linea[3]</td>
                <td>$linea[4]</td>
                <td>$linea[5]</td>
              </tr>";
    }
    
   echo "</table>"

    ?>

    


</body>
</html>