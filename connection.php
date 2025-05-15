<?php
  $host = 'localhost';
  $port = '5432';
  $usuario = 'user';
  $contrasenya = 'password';
  $base_de_datos = 'scdb';

  try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$base_de_datos", $usuario, $contrasenya);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
  }
?>