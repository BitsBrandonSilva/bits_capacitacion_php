<?php

    $prefijos = [
        "Alemania" => 49,
        "Argentina" => 54,
        "Colombia" => 57,
        "España" => 34,
        "Mexico" => 52
    ];
?>

<h3>foreach se utiliza para recorrer arrays asociativos sin necesidad de utilizar índices.</h3>

<table>
    <tr>
        <th>País</th>
        <th>Prefijo</th>
    </tr>
    <?php
        foreach ($prefijos as $clave => $valor) {
            echo "<tr>";
            echo "<td>$clave</td>";
            echo "<td>$valor</td>";
            echo "</tr>";
        }
    ?>
</table>