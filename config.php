<?php
$servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
$usuario = "root"; // El usuario que acabamos de crear en la base de datos 
$contrasenha = ""; // La contraseña del usuario que utilizaremos 
$BD = "image_gallery"; // El nombre de la base de datos 
 
/* 
Aquí abrimos la conexión en el servidor. Normalmente se envian 3 parametros (los datos del servidor, usuario y contraseña) a la función mysql_connect, si no hay ningún error la conexión será un éxito El @ que se ponde delante de la funcion, es para que no muestre el error al momento de ejecutarse, ya crearemos un código para eso
*/
 
$connection = mysqli_connect($servidor, $usuario, $contrasenha,$BD,3308); 
 
/* 
Aquí preguntamos si la conexión no pudo realizarse, de ser así lanza un mensaje en la pantalla con el siguiente texto "No pudo conectarse:" y le agrega el error ocurrido con "mysql_error()" 
*/
 
if (!$connection) { 
    die('<strong>No pudo conectarse:</strong> ' . mysql_error()); 
}else{ 
    // La siguiente linea no es necesaria, simplemente la pondremos ahora para poder observar que la conexión ha sido realizada 
} 
/* 
En esta linea seleccionaremos la BD con la que trabajaremos y le pasaremos como referencia la conexión al servidor. Para saber si se conecto o no a la BD podríamos utilizar el IF de la misma forma que la utilizamos al momento de conectar al servidor, pero usaremos otra forma de comprobar eso usando die(). 
*/
 
mysqli_select_db($connection,$BD) or die(mysqli_error($connection)); 
 
?>