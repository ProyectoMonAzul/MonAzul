<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $apellidos = $_POST['apellidos'];
    $cal = $_POST['cal'];

    // las acciones que necesites con los datos recibidos

    // Si todo fue exitoso, redirecciona al usuario a una página de éxito
    header('Location:Comentarios.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MonAzul</title>
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@700&family=Mulish:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilosPHP.css">

    <!DOCTYPE html>
<html>
<head>
    <script>
        function mostrarFechaHora() {
            var fecha = new Date();
            var dia = fecha.getDate();
            var mes = fecha.getMonth(); // Los meses en JavaScript son indexados desde 0
            var anio = fecha.getFullYear();
            var hora = fecha.getHours();
            var minutos = fecha.getMinutes();
            var segundos = fecha.getSeconds();

            // Agregar ceros iniciales si es necesario
            dia = dia < 10 ? '0' + dia : dia;
            hora = hora < 10 ? '0' + hora : hora;
            minutos = minutos < 10 ? '0' + minutos : minutos;
            segundos = segundos < 10 ? '0' + segundos : segundos;

            // Nombres de los meses
            var nombresMeses = [
                'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio',
                'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'
            ];

            // Obtener los elementos HTML y asignar el contenido
            var elementoFecha = document.getElementById('fecha');
            elementoFecha.innerHTML = dia + ' de ' + nombresMeses[mes] + ' de ' + anio;

            var elementoHora = document.getElementById('hora');
            elementoHora.innerHTML = hora + ':' + minutos + ':' + segundos + ' hrs';
        }

        // Llamar a la función para mostrar la fecha y hora actualizada
        mostrarFechaHora();
    </script>

</head>

<body onload="mostrarFechaHora()">
<header class="encabezado">
	<div class="contenedor-navegacion">
		<div class="contenido-navegacion contenedor">
			<div class="logo">
				<h2><span class="Morado">Mo</span><span class="Azul">nA</span><span class="Rosa">zul</span></h2>
			</div>
		</div>
	</div>
</header>
<section class="chef contenedor">
	<h2>Opinion</h2>
	<div class="contenido-chef">
		<div class="texto-chef">
			<h3>En MonAzul nos esforzamos para que todo salga perfecto!!!</h3>
		</div>   
	</div>
</section>
<div class="formulario-contacto contenedor" id="Contactos">
	<div class="informacion-contacto">
		<h3>Contactanos</h3>
		<p>hola muchas gracias por danos tu opinion</p>
	</div>
</div>
<div class="pie-pagina ">
	<div class="contenedor-piepagina contenedor">
		<div class="info">
			<h3>Dirección</h3>
			<p>Giberny 3301, Alameda del cedro 2</p>
		</div>
		<div class="info">
			<h3>Telefono</h3>
			<p>+52 644 408 8583</p>
		</div>
		<div class="info">
			<h3>Horarios</h3>
			<p>Lunes - Domingo 9am - 11pm</p>
			<div class="redes-sociales redes-pie">
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-instagram"></i>
			</div>
		</div>
	</div>
</div>
<footer class="footer">
        <p>Sitio web creado con fines educativos</p>
        <p id="fecha"></p>
        <p id="hora"></p>
 
    </footer>
    <script src="js/app.js"></script>

</body>

</html>
