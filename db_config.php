<?php
  $host = 'localhost';
  $port = '5432';
  $usuario = 'tu_usuario';
  $contraseña = 'tu_contraseña';
  $base_de_datos = 'scdb';

  /*try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$base_de_datos", $usuario, $contraseña);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
  }*/
?>