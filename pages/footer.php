</body>
<footer>
    <div class="row">
        <div id="titulopie">
            <label>Derechos reservados &copy; 2020 - 2020</label>
        </div>
    </div>
</footer>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            <?php
            setcookie('Temporal', $_GET['buscar'], time() + 60 * 60 * 24 * 365, '/');
            ?>
            refrescar();
        }, 10000);
    });

    function refrescar() {
        $("#formularioTabla").load("includes/datos.php");
    }
</script>

</html>