<html>
<head>
    <title>Rubén Martínez Marínez</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
    <h1>ENTORNO LAMP</h1>
</header>
<main>
<div id="informacion">
    <h2>Información de la Base de Datos</h2>

<?php
$host = 'database';
$user = 'ruben';
$password = 'ruben';
$db = 'rumama';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
	echo 'Conexión Fallida';
}

$resultado = $conn->query("SELECT * FROM personas");

for ($num_fila = $resultado->num_rows - 0; $num_fila >= 1; $num_fila--) {
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    echo '<hr>';
    echo " ID = " . $fila['id'] . '<br>';
    echo " Nombre = " . $fila['nombre'] . '<br>';
    echo " Edad = " . $fila['edad'] . '<br>';
    echo " Estilo = " . $fila['estilo'] . '<br>';
    echo '<hr>';    
}

?>
</div>
</main>
</body>