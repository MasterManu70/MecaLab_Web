<?php include 'pages/header.php' ?>
<div class="contenedor">
    <div class="row">
        <form action="" method="post" id="formularioBusqueda">
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
                    <tr>
                        <td>0001</td>
                        <td>Piston</td>
                        <td>Al fregaso sirve estupendo asdfadfasd fasdfasdfasdf asdasdfadfasdfasdf asdfasdf aasdfa df adfdfasdf asdffasdf</td>
                        <td>Disponible</td>
                    </tr>
                    <tr>
                        <td>0002</td>
                        <td>Piston</td>
                        <td>Al fregaso sirve estupendo</td>
                        <td>No disponible</td>
                    </tr>
                    <!--Fin Demostrativo-->
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'pages/footer.php' ?>