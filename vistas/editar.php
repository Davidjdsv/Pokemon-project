<?php

    $controlador = new ControladorPokemon();

    if(isset($_GET["id"])){
        $registro = $controlador -> ver_info_pokemon($_GET["id"]);
    } else {
        header("Location:index.php");
    }

    if(isset($_POST["editar"])){
        $nombre = !empty($_POST["nombre"]) ? $_POST["nombre"] : "???";
        $tipo_2 = !empty($_POST["tipo_2"]) ? $_POST["tipo_2"] : "-";
        $mote = !empty($_POST["mote"]) ? $_POST["mote"] : "-";
        $baya = !empty($_POST["baya"]) ? $_POST["baya"] : "-";

        $registro = $controlador -> editar_pokemon($_POST["num_pokedex"], $nombre, $_POST["tipo_1"], $tipo_2, $mote, $baya);
        header("Location:index.php");
    }

?>

<div class="container mt-5 mb-4">
    <h2 class="text-center">Editar Pokémon</h2>
    <form method="POST" action="" class="bg-light p-5 rounded shadow-sm">
        <div class="form-group">
            <label for="num_pokedex">Número de Pokédex</label>
            <input type="text" class="form-control" id="num_pokedex" name="num_pokedex" value="<?php echo $registro["num_pokedex"] ?>" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $registro["nombre"] ?>">
        </div>
        <div class="form-group">
            <label for="tipo_1">Tipo 1</label>
            <input type="text" class="form-control" id="tipo_1" name="tipo_1" value="<?php echo $registro["tipo_1"] ?>" required>
        </div>
        <div class="form-group">
            <label for="tipo_2">Tipo 2</label>
            <input type="text" class="form-control" id="tipo_2" name="tipo_2" value="<?php echo $registro["tipo_2"] ?>">
        </div>
        <div class="form-group">
            <label for="mote">Mote</label>
            <input type="text" class="form-control" id="mote" name="mote" value="<?php echo $registro["mote"] ?>">
        </div>
        <div class="form-group">
            <label for="baya">Baya</label>
            <input type="text" class="form-control" id="baya" name="baya" value="<?php echo $registro["baya"] ?>">
        </div>
        <input type="submit" class="btn btn-warning mt-4 w-100" name="editar" value="Editar"></input>
    </form>
</div>