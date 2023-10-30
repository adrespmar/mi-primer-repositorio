<html>
<head>
<title>Practica_1_PHP</title>

</head>
<body>
<h1>Tabla1</h1>
<?php
$x = array(); //valores en la horizontal
$y = array(); //valores en la vertical

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

//Comienza la tabala
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

