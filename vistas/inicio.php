<?php

    $controlador = new ControladorPokemon();
    $resultado = $controlador -> index();

?>

<div class="container-fluid table-responsive mt-5 mb-4">
    <table class="table table-hover rounded-top">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>N# Pokedex Nacional</th>
                <th>Nombre</th>
                <th>Primer Tipo</th>
                <th>Segundo Tipo</th>
                <th>Mote</th>
                <th>Baya</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                while($fila = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td>" . $fila["id"] . "</td>";
                    echo "<td>" . $fila["num_pokedex"] . "</td>";
                    echo "<td>" . $fila["nombre"] . "</td>";
                    echo "<td>" . $fila["tipo_1"] . "</td>";
                    echo "<td>" . $fila["tipo_2"] . "</td>";
                    echo "<td>" . $fila["mote"] . "</td>";
                    echo "<td>" . $fila["baya"] . "</td>";
                    echo "<td><a href='?cargar=ver&id=".$fila["id"]."'>Ver</a><a href='?cargar=editar&id=".$fila["id"]."'>Editar</a><a href='?cargar=eliminar&id=".$fila["id"]."'>Eliminar</a></td>";
                }
            
            ?>
        </tbody>
    </table>
</div>