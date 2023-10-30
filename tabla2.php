<html>
<head>
<title>Tabla2_PHP</title>

</head>
<body>
<h1>Tabla2</h1>
<?php
    // Definición función "recupera" (Se podrá utilizar en otros programas)
    function recupera($nombre) {
        return isset($_POST[$nombre]) ? $_POST[$nombre] : '';
    }

    $numero1 = recupera('numero1');
    $numero2 = recupera('numero2');


    if ($numero1 !== '' && $numero2 !== '') {
        echo "<h2>Divisores de $numero1:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Divisores</th></tr>";
        for ($i = 50; $i <= 60; $i++) {
            if ($numero1 % $i == 0) {
                echo "<tr><td>$i</td></tr>";
            }
        }
        echo "</table>";

        echo "<h2>Divisores de $numero2:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Divisores</th></tr>";
        for ($i = 50; $i <= 60; $i++) {
            if ($numero2 % $i == 0) {
                echo "<tr><td>$i</td></tr>";
            }
        }
        /*echo "</table>";*/
    }
    //Borrar hasta aquí

$x = array(); //valores en la linea horizontal
$y = array(); //valores en la linea vertical

//Completar los arrays con los valores correpondientes
for($i = 0 ; $i< 17; $i++){
    $y[] = $i;
}

for($i = 50 ; $i< 61; $i++){
    $x[] = $i;
}

$color1 = "Violet";
$color2 = "Yellow";
$color3 = "Orange";

//Comienza la tabla
$tabla = "<table border =\"3\" bgcolor=\"$color1\">";

foreach ($y as $vertical){
    
    $tabla.="<tr ".(!$vertical?"bgcolor=\"$color1\"":"bgcolor=\"$color2\"")."><td align=\"center\" bgcolor=\"$color1\">".(!$vertical?"/":$vertical)."</td>";
    //Si es el primer elemento
    if($vertical==0){
        foreach ($x as $horizontal){
            $tabla.="<td>$horizontal</td>";
        }
        $tabla.="</tr>";
    } //de lo contrario se calcula la razón
    else{
        foreach ($x as $horizontal){
            if($vertical==0) continue;
            $tabla.="<td  align=\"center\">".($horizontal%$vertical==0?"*":"-")."</td>";
        }
        $tabla.="</tr>";
    }

}
$tabla.= "</table>";
echo $tabla;
?>

</body>
</html>