<?php
$conexion = mysqli_connect('localhost', 'root', '', 'mecalab') or die("Error de conexion al servidor");

$buscar= $_GET['buscar'];
$buscar = filter_var($buscar, FILTER_SANITIZE_STRING);

$query = "SELECT id, articulo, comentario, disponible FROM articulos WHERE articulo LIKE '%" . $buscar . "'";

$registro = mysqli_query($conexion, $query);
?>
<?php include 'includes/header.php' ?>
<div class="contenedor">
    <div class="row">
        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> method="GET" id="formularioBusqueda">
            <h3 id="tituloTabla1">Motor de busqueda</h3>
            <label>Buscar: <input type="search" name="buscar" id="buscar"> <input type="submit" value="Buscar" id="btnBuscar"></label>
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
                    <!--Demostrativo-->
                    <?php
                    while ($mostrar = mysqli_fetch_array($registro)) { ?>
                        <tr>
                            <td><?php echo $mostrar['id']; ?></td>
                            <td><?php echo $mostrar['articulo']; ?></td>
                            <td><?php echo $mostrar['comentario']; ?></td>
                            <td><?php if($mostrar['disponible']==1)
                            {echo 'Disponible';
                            }else 
                            {echo 'No disponible';}
                            ?></td>
                        </tr>
                    <?php } ?>
                    <!--Fin Demostrativo-->
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>