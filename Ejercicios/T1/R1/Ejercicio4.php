<!--
    Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su
    correspondiente traduccién al castellano. Las palabras deben estar distribuidas
    en dos columnas. Utiliza la etiqueta <table> de HTML.
-->
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    th {
        background-color: whitesmoke;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
</style>

<?php
$palabras = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten");
$traduccion = array("uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez");
echo "<table>";
echo "<tr><th>Palabras</th><th>Traducción</th></tr>";
echo "<tr></tr>";
echo "<tr>";
echo "<td>$palabras[1]</td>";
echo "<td>$traduccion[1]</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$palabras[2]</td>";
echo "<td>$traduccion[2]</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$palabras[3]</td>";
echo "<td>$traduccion[3]</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$palabras[4]</td>";
echo "<td>$traduccion[4]</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$palabras[5]</td>";
echo "<td>$traduccion[5]</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$palabras[6]</td>";
echo "<td>$traduccion[6]</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$palabras[7]</td>";
echo "<td>$traduccion[7]</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$palabras[8]</td>";
echo "<td>$traduccion[8]</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$palabras[9]</td>";
echo "<td>$traduccion[9]</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$palabras[10]</td>";
echo "<td>$traduccion[10]</td>";
echo "</tr>";
echo "</table>";

?>