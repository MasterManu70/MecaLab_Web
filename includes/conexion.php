<?php 
      define('DB_HOST','localhost');
      define('DB_USER','root');
      define('DB_PASSWORD','');
      define('DB_DATABASE','mecalab');
      
      function conectar(){

          global $conexion;
          $conexion = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE) or die ('<h1>Error de conexion en la red.</h1>');
      }
      
      function desconectar(){

          global $conexion;
          mysqli_close($conexion);
      }
