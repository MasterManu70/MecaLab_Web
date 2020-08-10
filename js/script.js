//Declarar variable
var temp = document.getElementById("buscar").value;

//Ocultar el menu del clic derecho
document.oncontextmenu = function () {
    return false;
}

//Generar cookie y sobreescribirlo cada 10 segundos
$(document).ready(function () {
    setInterval(function () {

        document.cookie = "Temporal=" + temp + "; max-age=3600; path=/";

        $("#formularioTabla").load("includes/datos.php");
    }, 10000);

});
