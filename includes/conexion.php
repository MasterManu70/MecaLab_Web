<?php 
      define('DB_HOST','localhost');
      define('DB_USER','root');
      define('DB_PASSWORD','');
      define('DB_DATABASE','mecalab');
      
      function conectar(){
          global $conexion;
      
          $conexion = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE) or die ('Error al conectar a MySQL');
      }
      
      function desconectar(){
          global $conexion;
          mysqli_close($conexion);
      }
?>