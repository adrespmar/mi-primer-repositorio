<?php
    // Definimos la función "recupera" para reutilizarla en otros programas
    function recupera($nombre) {
        return isset($_POST[$nombre]) ? $_POST[$nombre] : '';
    }

    $numero1 = recupera('numero1');
    $numero2 = recupera('numero2');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = isset($_POST['numero1']) ? intval($_POST['numero1']) : 0;
        $numero2 = isset($_POST['numero2']) ? intval($_POST['numero2']) : 0;

        if ($numero1 >= 1 && $numero1 <= 10 && $numero2 >= 10 && $numero2 <= 20) {
            echo "<h2>Divisores de $numero1:</h2>";
            echo "<p>";
            for ($i = 50; $i <= 60; $i++) {
                if ($i % $numero1 == 0) {
                    echo "$i, ";
                }
            }
            echo "</p>";

            echo "<h2>Divisores de $numero2:</h2>";
            echo "<p>";
            for ($i = 50; $i <= 60; $i++) {
                if ($i % $numero2 == 0) {
                    echo "$i, ";
                }
            }
            echo "</p>";
        } else {
            echo "Por favor, añade números válidos.";
        }
    }
    
    ?>