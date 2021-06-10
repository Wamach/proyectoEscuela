
// Variables que se obtienen del formulario
var frm = document.getElementById('frm');
var nombreProducto = document.getElementById('nombreProducto');
var nombreProveedor = document.getElementById('nombreProveedor');
var idProducto = document.getElementById('idProducto');
var fechaEntrada = document.getElementById('fechaEntrada');
var cantidadProducto = document.getElementById('cantidadProducto');
var costoOrigen = document.getElementById('costoOrigen');

// Mensaje de error que se mostrara en el HTML de color rojo.
var error = document.getElementById('error');
error.style.color = 'red';

// Validaciones que se activan al momento de dar clic
frm.addEventListener('submit', function(click) {
    
    // click.preventDefault();
    
    // Muestra el mensaje de error en la validacion.
    var mensajesError = [];
    var re = /^[a-zA-Z]*$/; // Expresion regular para aceptar solo letras
    click.preventDefault();

    // Validacion para los txtField que estan vacios
    if (nombreProveedor.value === '' || nombreProducto.value === '') {
        mensajesError.push('Este campo no puede estar vacio');
       
    }

    // Validacion de solo letras, sin numeros, y no permite combinar letras con num
    if (!re.test(nombreProducto.value) || !re.test(nombreProveedor.value) ) {
        mensajesError.push('No puedes escribir numeros en este campo');
    }

    // Valida que la fecha sean numeros
    if(!isNaN(fechaEntrada.value)) {
        mensajesError.push('Error en la fecha, ingresala correctamente');
    }

    // Validacion para los txtField que no deben contener letras
    if (cantidadProducto.value ==='') {
        mensajesError.push('Ingresa la cantidad de productos');
    }

    if (costoOrigen.value ==='') {
        mensajesError.push('Ingresa el costo origen del producto');
    }

     // Validacion para los txtField que no deben contener letras
    if (isNaN(cantidadProducto.value) || isNaN(costoOrigen.value)  || isNaN(idProducto.value)) {
        mensajesError.push('Solo se pueden ingresar numeros, evita usar letras');
    }


    
    error.innerHTML = mensajesError.join(', ');
    

    
});

// <form action="pagina2.php" method="post" name="frm" id="frm">
//  <input type="submit" name="Enviar" onsubmit="return validaciones()">   