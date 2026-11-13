<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro de productos</title>
</head>
<body>

<h2>REGISTRO DE TRES PRODUCTOS</h2>

<!-- Formulario de captura -->
<form method="POST" action="">

<?php
// Ciclo para mostrar tres renglones de captura
for ($i = 0; $i < 3; $i++) {
echo "numero 1 (51 al 99)";
echo "<input type='number' name='num1[]' min='51' max='99'>" . " ";

echo "numero 2 (-50 al -1)";
echo "<input type='number' name='num2[]' min='-50' max='-1'>" . " ";


echo "<br><br>";
}

?>

<!-- Botón para guardar y calcular -->
<button type="submit" name="guardar" value="guardar">
Guardar y calcular </button>

<?php
// Verificar si se presionó el botón Guardar
if (isset($_POST['guardar'])) {

// Guardar los datos en tres arreglos
$n1= $_POST['num1'];
$n2 = $_POST['num2'];


// Declarar los arreglos de resultados
$sum = array();
$res = array();
$mul = array();
$div = array();

// Ciclo para realizar los cálculos
for ($i = 0; $i < 3; $i++) {
	/*if($n1[$i]<51 or $n1[$i]>99){
		echo"Error: El Numero 1 en la posición $i debe estar entre el 51 y  99. pusiste: $n1[$i] <br>";
		continue;
	}
	if($n2[$i]<-50 or $n2[$i]>-1){
		echo"Erro: El Numero 2 en la posicion $i deve estar entre el -50 y -1. Pusiste: $n2[$i] <br>";
		continue;
	}
*/
// Calcular suma
$sum[$i] = $n1[$i] + $n2[$i];

// Calcular rsta
$res[$i] = $n1[$i] - $n2[$i];

// Calcular multiplicacion
$mul[$i] = $n1[$i] * $n2[$i];

//Calculamos divicion
$div[$i] = $n1[$i] / $n2[$i];

}

// Imprimir el arreglo de suma
echo "<h3>ARREGLO DE SUMA</h3>";

for ($i = 0; $i < 3; $i++) {
echo $n1[$i] . "+" . $n2[$i], "=" . $sum[$i] . "<br>";
}

// Imprimir el arreglo de resta
echo "<h3>ARREGLO DE RESTA</h3>";

for ($i = 0; $i < 3; $i++) {
echo $n1[$i] . "-" . $n2[$i], "=" . $res[$i] . "<br>";
}

//Imprimir el arreglo de multiplicaciones
echo "<h3> ARREGLO DE MULTIPLICACIONES</h3>";

for ($i=0; $i <3 ; $i++) { 
echo $n1[$i] . "*" . $n2[$i], "=" . $mul[$i]."<br>";
}

// Imprimir el arreglo de divicion
echo "<h3>ARREGLO DE DIVICION</h3>";

for ($i = 0; $i < 3; $i++) {

echo $n1[$i] . "/" . $n2[$i], "=" . number_format($div[$i], 2) . "<br>";
}

}

?>

</body>
</html>