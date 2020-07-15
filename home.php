<?php
include_once('includes/conexion.php');

conectar();

if ($_POST) {
    $buscar = $_POST['buscar'];
    $buscar= filter_var($buscar,FILTER_SANITIZE_STRING);
    $query = "SELECT articulo,COUNT(articulo) disponibles FROM articulos WHERE status = 1 AND disponible =1 AND articulo LIKE '%".$buscar."%'GROUP BY articulo";
    $registro = mysqli_query($conexion, $query);
} else {
    $query = "SELECT articulo,COUNT(articulo) disponibles FROM articulos WHERE status = 1 AND disponible =1 GROUP BY articulo";
    $registro = mysqli_query($conexion, $query);
}

desconectar();

include_once "pages/home_view.php";
?>
