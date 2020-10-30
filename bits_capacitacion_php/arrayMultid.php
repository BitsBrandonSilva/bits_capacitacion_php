<?php

    //-------------Array forma 1
    $bands = [
        [1, "Municipal Waste", 5 , "Metal"],
        [2, "Power Trip", 5 , "Metal"],
        [3, "Kraken", 5 , "Heavy"]
    ];

    //--------------Array forma 2 multidimensional con indices asociativos 
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

    //------------------Array forma 3
    $guitars = [
        [
            "identificador" => 1,
            "marca" => "Jackson",
            "cuerdas" => 7,
            "color" => "Rojo"
        ],

        [
            "identificador" => 2,
            "marca" => "Ibañez",
            "cuerdas" => 6,
            "color" => "Negro"
        ],

        [
            "identificador" => 3,
            "marca" => "ESP",
            "cuerdas" => 6,
            "color" => "Blanco"  
        ]
    ];

    //----------------Array forma 4 indice asociativo usando el identificador de cada arreglo
    $bicicletas = [
        11 => [
            "identificador" => 11,
            "marca" => "Aventon",
            "tipo" => "Fixed",
            "color" => "Verde"
        ],

        22 => [
            "identificador" => 22,
            "marca" => "Ontrail",
            "tipo" => "Ruta",
            "color" => "Gris"
        ],

        31 => [
            "identificador" => 31,
            "marca" => "Cinelli",
            "tipo" => "Fixed",
            "color" => "Azul"
        ],
    ];

?>

<h3>Tabla 1 / Array1</h3>
<table>
    <tr>
        <th>Identificador</th>
        <th>Band</th>
        <th>Integrantes</th>
        <th>Genero</th>
    </tr>
    <tr>
        <td><?php echo $bands[0][0]; ?></td>
        <td><?php echo $bands[0][1]; ?></td>
        <td><?php echo $bands[0][2]; ?></td>
        <td><?php echo $bands[0][3]; ?></td>
    </tr>
    <tr>
        <td><?php echo $bands[1][0]; ?></td>
        <td><?php echo $bands[1][1]; ?></td>
        <td><?php echo $bands[1][2]; ?></td>
        <td><?php echo $bands[1][3]; ?></td>
    </tr>
    <tr>
        <td><?php echo $bands[2][0]; ?></td>
        <td><?php echo $bands[2][1]; ?></td>
        <td><?php echo $bands[2][2]; ?></td>
        <td><?php echo $bands[2][3]; ?></td>
    </tr>
</table><br><br>

<h3>Tabla 2 / Array2</h3>
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
</table><br><br>

<h3>Tabla 3 / Array3</h3>
<table>
    <tr>
        <th>Identificador</th>
        <th>Marca</th>
        <th>Cuerdas</th>
        <th>Color</th>
    </tr>
    <tr>
        <td><?php echo $guitars[0]["identificador"]; ?></td>
        <td><?php echo $guitars[0]["marca"]; ?></td>
        <td><?php echo $guitars[0]["cuerdas"]; ?></td>
        <td><?php echo $guitars[0]["color"]; ?></td>
    </tr>
    <tr>
        <td><?php echo $guitars[1]["identificador"]; ?></td>
        <td><?php echo $guitars[1]["marca"]; ?></td>
        <td><?php echo $guitars[1]["cuerdas"]; ?></td>
        <td><?php echo $guitars[1]["color"]; ?></td>
    </tr>
    <tr>
        <td><?php echo $guitars[2]["identificador"]; ?></td>
        <td><?php echo $guitars[2]["marca"]; ?></td>
        <td><?php echo $guitars[2]["cuerdas"]; ?></td>
        <td><?php echo $guitars[2]["color"]; ?></td>
    </tr>
</table><br><br>

<h3>Tabla 4 / Array4</h3>
<table>
    <tr>
        <th>Identificador</th>
        <th>Marca</th>
        <th>Tipo</th>
        <th>Color</th>
    </tr>
    <tr>
        <td><?php echo $bicicletas[11]["identificador"]; ?></td>
        <td><?php echo $bicicletas[11]["marca"]; ?></td>
        <td><?php echo $bicicletas[11]["tipo"]; ?></td>
        <td><?php echo $bicicletas[11]["color"]; ?></td>
    </tr>
    <tr>
        <td><?php echo $bicicletas[22]["identificador"]; ?></td>
        <td><?php echo $bicicletas[22]["marca"]; ?></td>
        <td><?php echo $bicicletas[22]["tipo"]; ?></td>
        <td><?php echo $bicicletas[22]["color"]; ?></td>
    </tr>
    <tr>
        <td><?php echo $bicicletas[31]["identificador"]; ?></td>
        <td><?php echo $bicicletas[31]["marca"]; ?></td>
        <td><?php echo $bicicletas[31]["tipo"]; ?></td>
        <td><?php echo $bicicletas[31]["color"]; ?></td>
    </tr>
</table>