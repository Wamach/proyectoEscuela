<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <h1> Resultados formulario 1 </h1>
    <?php
    
    // Variables que recibe del formulario 1
    $nombreProducto =  $_POST ['nombreProducto'];
    $nombreProveedor =  $_POST ['nombreProveedor'];
    $idProducto =  $_POST ['idProducto'];
    $fechaEntrada =  $_POST ['fechaEntrada'];
    $cantidadProducto =  $_POST ['cantidadProducto'];
    $costoOrigen =  $_POST ['costoOrigen'];

    // Muestra las variables
    echo "Bienvenido <br>";
    echo "Los datos ingresados son: <br>";
    echo "nombre producto: ".$nombreProducto."<br>";
    echo "nombre proveedor: ".$nombreProveedor."<br>";
    echo "idProducto: ".$idProducto."<br>";
    echo "fecha de entrada: ".$fechaEntrada."<br>";
    echo "cantidad producto: ".$cantidadProducto."<br>";
    echo "costo origen: ".$costoOrigen."<br>";

    
?>
    <div id='error'></div>


    <h1> Formulario 2 </h1>

    <form action="resultados.php" method="post" name="frm2" >
    <label for="salario"> Ingresa tu salario mensual actual </label>
    <input type="number" name="salario">
    <br>

    <label for="gastoSemanal"> Ingresa tu gasto mensual en comida </label>
    <input type="number" name="gastoComida">
    <br>

    <label for="gastoServicios"> Ingresa tu gasto mensual de servicios </label>
    <input type="number" name="gastoServicios">
    <br>

    <label for="deuda"> Ingresa la cantidad que debes pagar este mes por deudas</label>
    <input type="number" name="deuda">
    <br>

    <label for="ahorro"> Ingresa la cantidad que ahorraras este mes </label>
    <input type="number" name="ahorro">
    <br>

    <input type="submit" name="Enviar">
    
    </form>


</body>
</html>



