<?php

    $controlador = new ControladorPokemon();

    if(isset($_GET["id"])){
        $registro = $controlador -> ver_info_pokemon($_GET["id"]);
    } else {
        header("Location:index.php");
    }

    if(isset($_POST["eliminar"])){
        $controlador -> eliminar_pokemon($_GET["id"]);
        header("Location:index.php");
    }

?>

<div class="container-fluid table-responsive mt-5 mb-4">
    <form action="" method="post">
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
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <td><?php echo $registro["id"] ?></td>
                <td><?php echo $registro["num_pokedex"] ?></td>
                <td><?php echo $registro["nombre"] ?></td>
                <td><?php echo $registro["tipo_1"] ?></td>
                <td><?php echo $registro["tipo_2"] ?></td>
                <td><?php echo $registro["mote"] ?></td>
                <td><?php echo $registro["baya"] ?></td>
                <td><input type="submit" class="btn btn-danger" name="eliminar" value="Eliminar"></td>
            </tbody>
        </table>
    </form>
</div>