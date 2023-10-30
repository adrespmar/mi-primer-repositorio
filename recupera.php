<?php
    // Definimos la función "recupera" para reutilizarla en otros programas
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
        echo "</table>";
    }
    
    ?>