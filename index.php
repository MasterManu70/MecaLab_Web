<?php
include_once('includes/conexion.php');

conectar();

if ($_POST) {
    $buscar = $_POST['buscar'];
    $query = "SELECT articulo,COUNT(articulo) disponibles FROM articulos WHERE status = 1 AND disponible =1 AND articulo LIKE '%".$buscar."%'GROUP BY articulo";
    $registro = mysqli_query($conexion, $query);
} else {
    $query = "SELECT articulo,COUNT(articulo) disponibles FROM articulos WHERE status = 1 AND disponible =1 GROUP BY articulo";
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
                        <th style="   width: 400px;">Artículo</th>
                        <th>Disponibilidad</th>
                    </tr>
                    <?php
                    if (!empty($registro) and mysqli_num_rows($registro) > 0) {
                        while ($mostrar = mysqli_fetch_array($registro)) {
                    ?>
                            <tr>
                                <td><?php echo $mostrar['articulo']; ?></td>
                                <td><?php if ($mostrar['disponibles'] > 1) {
                                        echo $mostrar['disponibles'].' Disponibles';
                                    } else {
                                        echo $mostrar['disponibles'].' Disponible';
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