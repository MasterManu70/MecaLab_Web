<?php include 'header.php' ?>
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
                        echo '<td colspan="2" style="text-align: center;"><b>No se encontraron registros</b></td>';
                     } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>