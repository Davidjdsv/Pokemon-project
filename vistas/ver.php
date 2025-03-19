<?php

    $controlador = new ControladorPokemon();

    if(isset($_GET["id"])){
        $registro = $controlador -> ver_info_pokemon($_GET["id"]);
    } else {
        header("Location:index.php");
    }

?>

<div class="container-fluid table-responsive mt-5 mb-4">
    <table id="myTable" class="table table-hover ">
        <thead class="table-dark ">
            <tr>
                <th>Id</th>
                <th>N# Pokedex Nacional</th>
                <th>Nombre</th>
                <th>Primer Tipo</th>
                <th>Segundo Tipo</th>
                <th>Mote</th>
                <th>Baya</th>
            </tr>
        </thead>
        <tbody>
            <?php
                echo "<td>" . $registro["id"] . "</td>";
                echo "<td>" . $registro["num_pokedex"] . "</td>";
                echo "<td>" . $registro["nombre"] . "</td>";
                echo "<td>" . $registro["tipo_1"] . "</td>";
                echo "<td>" . $registro["tipo_2"] . "</td>";
                echo "<td>" . $registro["mote"] . "</td>";
                echo "<td>" . $registro["baya"] . "</td>";
            ?>
        </tbody>
    </table>
</div>