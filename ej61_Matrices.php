<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro de tres numeros</title>
</head>
<body>

<h2>REGISTRO DE TRES NUMEROS</h2>

<!-- Formulario de captura -->
<form method="POST" action="">

<?php

$numeros=array();

$valor=100;
echo"Matriz A<br>";
for ($f=0; $f < 3; $f++) { 
	
	for ($c=0; $c < 3; $c++) {
		 echo$numeros[$f][$c]=$valor. " ";
		 
		 $valor+=10;
	}
	echo"<br>";
}

echo"<br>";

$valo=200;
echo"Matriz B<br>";
for ($f=0; $f < 3; $f++) { 
	
	for ($c=0; $c < 3; $c++) {
		 echo$numeros[$f][$c]=$valo. " ";
		 
		 $valo+=10;
	}
	echo"<br>";
}

/*echo"<br>";


echo"Matriz C<br>";
for ($f=0; $f < 3; $f++) { 
	$su=$valo+$valor;
	
	for ($c=0; $c < 3; $c++) {
		 echo$su[$f][$c]=$valo. " ";
		 $valo+=10;
	}
	echo"<br>";
}

echo"<br>";*/
?>