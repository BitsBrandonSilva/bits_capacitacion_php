<?php

    $peliculas = [
        [
            "identificador" => 1,
            "titulo" => "Back To The Future",
            "director" => "Robert Zemeckis",
            "año" => 1985,
            "duracion" => "5h 41m"
        ],

        [
            "identificador" => 2,
            "titulo" => "Timecop: policía del futuro",
            "director" => "Peter Hyams",
            "año" => 1994,
            "duracion" => "1h 39m"
        ],

        [
            "identificador" => 3,
            "titulo" => "The Crow",
            "director" => "Alex Proyas",
            "año" => 1994,
            "duracion" => "1h 42m"
        ],

        [
            "identificador" => 4,
            "titulo" => "Universal Soldier",
            "director" => "Roland Emmerich",
            "año" => 1992,
            "duracion" => "1h 43m"
        ]
    ];
?>
    
<table>
    <tr>
        <th>Identificador</th>
        <th>Título</th>
        <th>Director</th>
        <th>Año</th>
        <th>Duración</th>
    </tr>

    <tr>
        <td><?php echo $peliculas[0]["identificador"]; ?></td>
        <td><?php echo $peliculas[0]["titulo"]; ?></td>
        <td><?php echo $peliculas[0]["director"]; ?></td>
        <td><?php echo $peliculas[0]["año"]; ?></td>
        <td><?php echo $peliculas[0]["duracion"]; ?></td>
    </tr>

    <tr>
        <td><?php echo $peliculas[1]["identificador"]; ?></td>
        <td><?php echo $peliculas[1]["titulo"]; ?></td>
        <td><?php echo $peliculas[1]["director"]; ?></td>
        <td><?php echo $peliculas[1]["año"]; ?></td>
        <td><?php echo $peliculas[1]["duracion"]; ?></td>
    </tr>

    <tr>
        <td><?php echo $peliculas[2]["identificador"]; ?></td>
        <td><?php echo $peliculas[2]["titulo"]; ?></td>
        <td><?php echo $peliculas[2]["director"]; ?></td>
        <td><?php echo $peliculas[2]["año"]; ?></td>
        <td><?php echo $peliculas[2]["duracion"]; ?></td>
    </tr>

    <tr>
        <td><?php echo $peliculas[3]["identificador"]; ?></td>
        <td><?php echo $peliculas[3]["titulo"]; ?></td>
        <td><?php echo $peliculas[3]["director"]; ?></td>
        <td><?php echo $peliculas[3]["año"]; ?></td>
        <td><?php echo $peliculas[3]["duracion"]; ?></td>
    </tr>
</table>