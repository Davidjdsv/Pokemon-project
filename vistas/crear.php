    <div class="container mt-5 mb-4">
        <h2 class="text-center">Agregar a la Pokedex</h2>
        <form method="POST" action="" class="p-4 border rounded shadow-sm bg-light">
            <div class="form-group">
                <label for="num_pokedex">Número de Pokédex</label>
                <input type="text" class="form-control" id="num_pokedex" name="num_pokedex" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="tipo_1">Tipo 1</label>
                <input type="text" class="form-control" id="tipo_1" name="tipo_1" required>
            </div>
            <div class="form-group">
                <label for="tipo_2">Tipo 2</label>
                <input type="text" class="form-control" id="tipo_2" name="tipo_2">
            </div>
            <div class="form-group">
                <label for="mote">Mote</label>
                <input type="text" class="form-control" id="mote" name="mote">
            </div>
            <div class="form-group">
                <label for="berry">Baya</label>
                <select class="form-control" id="berry" name="berry">
                    <option value="" selected disabled>- Selecciona una baya -</option>
                    <option value="cheri">Baya Cheri</option>
                    <option value="chesto">Baya Chesto</option>
                    <option value="pecha">Baya Pecha</option>
                    <option value="rawst">Baya Rawst</option>
                    <option value="aspear">Baya Aspear</option>
                    <option value="leppa">Baya Leppa</option>
                    <option value="oran">Baya Oran</option>
                    <option value="persim">Baya Persim</option>
                    <option value="lum">Baya Lum</option>
                    <option value="sitrus">Baya Sitrus</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary mt-2 w-100" value="Crear" name="enviar">
        </form>
    </div>
    <?php

    $controlador = new ControladorPokemon();

    if (isset($_POST["enviar"])) {
        $tipo_2 = !empty($_POST["tipo_2"]) ? $_POST["tipo_2"] : "-";
        $mote = !empty($_POST["mote"]) ? $_POST["mote"] : "-";
        $baya = !empty($_POST["baya"]) ? $_POST["baya"] : "-";
        
        $controlador -> crear_pokemon($_POST["num_pokedex"], $_POST["nombre"], $_POST["tipo_1"], $tipo_2, $mote, $baya);
        // header("Location:index.php");
    }

    ?>