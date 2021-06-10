<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <h1> Resultados formulario 2</h1>


    <?php
    
    // Variables que recibe del formulario 1
    $salario =  $_POST ['salario'];
    $gastoComida =  $_POST ['gastoComida'];
    $gastoServicios =  $_POST ['gastoServicios'];
    $deuda =  $_POST ['deuda'];
    $ahorro =  $_POST ['ahorro'];


    $saldoFinal = $salario-$deuda-$gastoComida-$gastoServicios-$ahorro;

    // Muestra las variables
    echo "El salario es:  ".$salario."<br>";
    echo "Gasto en comida: ".$gastoComida."<br>";
    echo "Gasto en servicios: ".$gastoServicios."<br>";
    echo "Deuda: ".$deuda."<br>";
    echo "Ahorro: ".$ahorro."<br>";

    if ($saldoFinal  > 0) {
        echo "Tu salario despues de rebajas es: ".$saldoFinal;
    }
    else {
        echo "Este mes tus gastos superan tu salario: ".$saldoFinal;
    }

?>
</body>
</html>