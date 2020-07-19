<?php include_once "busqueda.php";?>

<h3 id="tituloTabla2">Artículos</h3>
<table>
    <tr>
        <th style="   width: 400px;">Artículo</th>
        <th>Disponibilidad</th>
    </tr>
    <?php mostrarRegistros($registro); ?>
</table>