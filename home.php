<?php
include_once "pages/header.php";
?>

<div class="contenedor">
    <div class="row">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET" id="formularioBusqueda">
            <h3 id="tituloTabla1">Motor de busqueda</h3>
            <label>Artículo: <input type="search" name="buscar" id="buscar" value="<?php if (isset($_GET["buscar"])) echo $_GET['buscar'] ?>"> <input type="submit" value="Buscar" id="btnBuscar"></label>
        </form>
        <div class="row">
            <div id="formularioTabla">
                <?php include_once "includes/datos.php"; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="nota">
            <b>Nota</b>: La tabla de articulos, se refresca cada deiz segundos.
        </div>
    </div>
</div>

<?php
include_once "pages/footer.php";
?>