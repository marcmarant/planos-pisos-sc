<?php
  require_once 'db_config.php';

  function getHabitaciones($piso) {
    $sql = "
      WITH (
        SELECT mote, habitacion 
        FROM colegial_curso INNER JOIN colegial ON colegial_curso.colegialid = colegial.id 
        WHERE SPLIT_PART(cursoid, '-', 1)::int = (
          SELECT MAX(SPLIT_PART(cursoid, '-', 1)::int) FROM colegial_curso 
        )
      ) AS colegiales_actuales
      SELECT C.mote, H.*
      FROM colegiales_actuales C INNER JOIN habitacion H ON C.habitacion = H.id
      WHERE H.piso = :piso AND H.habitacion IS NOT NULL
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':piso', 1, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
?>