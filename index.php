<?php 
    include "./conexion.php";
    include "./header.php";

    $conexion = conexion();

    $sql = "SELECT * FROM t_animales";
    $respuesta = mysqli_query($conexion,$sql);
?>
    <h2>Listado de nombres</h2>
    <p>
       <a href= "./agregar.php">Agregar nuevo animal</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Region</th>
                <th>Comida</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php while( $ver = mysqli_fetch_array($respuesta)): ?>
            <tr style="text-align:center;">
                <td> <?php echo $ver['id']; ?></td>
                <td> <?php echo $ver['nombre']; ?> </td>
                <td><?php echo $ver['region']; ?></td>
                <td><?php echo $ver['comida']; ?></td>
                <td></td>
                <td>
                    <a href="./backend/eliminar.php?idp=<?php echo $ver['id']; ?>">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>


<?php include "./footer.php"; ?>
