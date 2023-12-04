<?php
    require '../../includes/config/database.php';   //Base De Datos
    $db = conectarDB();

    //ARREGLO CON MENSAJES DE ERRORES
    $errores= [];

    //EJECUTAR EL CODIGO DESPUES DE QUE EL USUARIO ENVIA EL FORMULARIO
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorID = $_POST['vendedor'];
        if(!$titulo){
            $errores[] = "Debes añadir un titulo";
        }
        if(!$precio){
            $errores[] = 'El Precio Es Obligatorio';
        }
        if(strlen ($descripcion) < 50){
            $errores[] = 'La Descripcion Es Obligatoria';
        }
        if(!$habitaciones){
            $errores[] = 'El Número De Habitaciones Es Obligatorio';
        }
        if(!$wc){
            $errores[] = 'El Numero De Baños Es Obligatorio';
        }
        if(!$estacionamiento){
            $errores[] = 'El Numero De Lugares De Estacionamiento Es Obligatorio';
        }
        if(!$vendedorID){
            $errores[] = 'Elige Un Vendedor';
        }
        echo "<pre>";
        var_dump($errores);
        echo "</pre>";
        exit;
        //INSERTAR EN LA BASE DE DATOS
        $query = "INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorID')"; //Insertar en la base de datos
        $resultado = mysqli_query($db, $query);
        if($resultado){
            echo "Insertado Correctamente";
        }else{
            echo "ño";
        }
    }


    require '../../includes/funciones.php';
    incluirTemplate('header');
    ?>
    <main class="contenedor seccion"> 
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>
        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">   <!--POST: PROTEGE NO EXPONER DATOS EN LA URL, GET: LO CONTRARIO-->
            <fieldset>
                <legend>Informacion General</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" imagen="imagen" accept="image/jpeg, image/png">
                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion"></textarea>
            </fieldset>
            <fieldset>
                <legend>Informacion Propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">  
                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9"> 
                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9"> 
            </fieldset>
            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>
    <?php incluirTemplate('footer');?>
</html>