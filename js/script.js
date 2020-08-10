var temp = document.getElementById("buscar").value;

document.oncontextmenu = function () {
    return false;
}

$(document).ready(function () {
    setInterval(function () {

        document.cookie = "Temporal=" + temp + "; max-age=3600; path=/";

        $("#formularioTabla").load("includes/datos.php");
    }, 10000);

});
