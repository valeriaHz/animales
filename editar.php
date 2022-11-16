<?php 
    include "./conexion.php";
    $conexion = conexion();
    $id = $_GET['idp'];
   
    $sql = "SELECT * FROM t_animales 
            WHERE id = '$id'";
    $respuesta = mysqli_query($conexion,$sql);
    //convierte en un arreglo asociativo todos los registros de consulta
    $item = mysqli_fetch_array($respuesta);
?>
<html>
    <h2>Actualizar</h2>
    <form action="./backend/actualizar.php" method="post">
        <input type="text" name="id" value="<?php echo $id; ?>"hidden>  
        <label for="nombre">Nombre</label>
        <input type="text" name = "nombre" id="nombre" value="<?php echo $item['nombre'] ?>">
        <br>
        <label for="region">Region</label>
        <input type="text" name = "region" id="region value="<?php echo $item['region'] ?>">
        <br>
        <br>
        <label for="comida">Comida</label>
        <input type="text" name = "comida" id="comida value="<?php echo $item['comida'] ?>">
        <br>
        <hr>
        <button>Actualizar</button>
    </form>
</html>