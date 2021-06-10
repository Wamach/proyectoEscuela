<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Pagina 1</title>
</head>

<body>
    <h1> Formulario 1 </h1>

    <form action="pagina2.php" method="post" name="frm" id="frm">
        <label for="nombreProducto"> Nombre del producto </label>
        <input type="text" name="nombreProducto" id="nombreProducto">
        <br>

        <label for="nombreProveedor"> Nombre del proveedor </label>
        <input type="text" name="nombreProveedor" id="nombreProveedor">
        <br>

        <label for="idProducto"> ID del producto</label>
        <input type="text" name="idProducto" id="idProducto">
        <br>

        <label for="fechaEntrada"> Fecha de entrada al almacen </label>
        <input type="date" name="fechaEntrada" id="fechaEntrada">
        <br>

        <label for="cantidadProducto"> Cantidad de producto </label>
        <input type="text" name="cantidadProducto" id="cantidadProducto">
        <br>

        <label for="costoOrigen"> Costo de origen </label>
        <input type="text" name="costoOrigen" id="costoOrigen">
        <br>

        <input type="submit" name="Enviar"  onsubmit="return validaciones()">



    </form>

    <div id='error'></div>

    <script type="text/javascript" src="validaciones.js"></script>




</body>

</html>