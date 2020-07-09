<?php
include_once('includes/conexion.php');

conectar();

if ($_POST) {
    $buscar = $_POST['buscar'];
    $query = "SELECT id, articulo, comentario, disponible FROM articulos WHERE articulo LIKE '%" . $buscar . "%' ORDER BY articulo";
    $registro = mysqli_query($conexion, $query);
} else {
    $query = "SELECT id, articulo, comentario, disponible FROM articulos";
    $registro = mysqli_query($conexion, $query);
}

desconectar();
?>
<?php include 'includes/header.php' ?>
<div class="contenedor">
    <div class="row">
        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" id="formularioBusqueda">
            <h3 id="tituloTabla1">Motor de busqueda</h3>
            <label>Artículo: <input type="search" name="buscar" id="buscar"> <input type="submit" value="Buscar" id="btnBuscar"></label>
        </form>
        <div class="row">
            <div id="formularioTabla">
                <h3 id="tituloTabla2">Artículos</h3>
                <table>
                    <tr>
                        <th>Codigo</th>
                        <th>Artículo</th>
                        <th>Comentarios</th>
                        <th>Disponibilidad</th>
                    </tr>
                    <?php
                    if (!empty($registro) and mysqli_num_rows($registro) > 0) {
                        while ($mostrar = mysqli_fetch_array($registro)) {
                    ?>
                            <tr>
                                <td><?php echo $mostrar['id']; ?></td>
                                <td><?php echo $mostrar['articulo']; ?></td>
                                <td><?php echo $mostrar['comentario']; ?></td>
                                <td><?php if ($mostrar['disponible'] == 1) {
                                        echo 'Disponible';
                                    } else {
                                        echo 'No disponible';
                                    }
                                    ?></td>
                            </tr>
                        <?php }
                    } else { 
                        echo '<td colspan="4" style="text-align: center;"><b>No se encontraron registros</b></td>';
                     } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>