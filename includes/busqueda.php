<?php
require_once "conexion.php";

conectar();
$buscar = "";
$registro = "";
if (isset($_POST['buscar'])) {
    $buscar = $_POST['buscar'];
    $buscar = filter_var($buscar, FILTER_SANITIZE_STRING);
    $query="SELECT articulo, IF(articulo = articulo AND disponible = 1 AND status =1,SUM(disponible), SUM(disponible)) disponibles FROM articulos WHERE status = 1 AND articulo LIKE '%" . $buscar . "%'GROUP BY articulo";
    $registro = mysqli_query($conexion, $query);
} else {
    $query="SELECT articulo, IF(articulo = articulo AND disponible = 1 AND status =1,SUM(disponible), SUM(disponible)) disponibles FROM articulos WHERE status = 1 AND articulo LIKE '%" . $buscar . "%'GROUP BY articulo";
    $registro = mysqli_query($conexion, $query);
}
desconectar();

function mostrarRegistros($reg)
{

    if (!empty($reg) and mysqli_num_rows($reg) > 0) {
        while ($mostrar = mysqli_fetch_array($reg)) {
?>
            <tr>
                <td style="border-left: 1px solid black;"><?php echo $mostrar['articulo']; ?></td>
                <td style="text-align: center;"><?php if ($mostrar['disponibles'] == 0) {
                        echo 'No Disponible';
                    } else if ($mostrar['disponibles'] > 1) {
                        echo $mostrar['disponibles'] . ' Disponibles';
                    } else {
                        echo $mostrar['disponibles'] . ' Disponible';
                    }
                    ?></td>
            </tr>
<?php }
    } else {
        echo '<td colspan="2" style="text-align: center;border-left: 1px solid black;"><b>No se encontraron registros</b></td>';
    }
}
