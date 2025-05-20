<?php
  function getHabitaciones($conn, $piso=null) {
    $sql = "
      WITH colegiales_actuales AS (
        SELECT mote, habitacion
        FROM colegial_curso INNER JOIN colegial ON colegial_curso.colegialid = colegial.id
        WHERE SPLIT_PART(cursoid, '-', 1)::int = (
          SELECT MAX(SPLIT_PART(cursoid, '-', 1)::int) FROM colegial_curso
        )
      )
      SELECT C.mote, H.*
      FROM colegiales_actuales C INNER JOIN habitacion H ON C.habitacion = H.id
      WHERE C.habitacion IS NOT NULL
    ";
    if ($piso !== null) {
      $sql .= " AND H.piso = :piso";
    }
    $stmt = $conn->prepare($sql);
    if ($piso !== null) {
      $stmt->bindValue(':piso', $piso, PDO::PARAM_INT);
    }
    $stmt->execute();

    $habitaciones = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($habitaciones as &$habitacion) {
      $histSql = "
        SELECT mote, cursoid as curso
        FROM colegial_curso INNER JOIN colegial ON colegial_curso.colegialid = colegial.id
        WHERE habitacion = :habitacion_id
        ORDER BY cursoid DESC
      ";
      $histStmt = $conn->prepare($histSql);
      $histStmt->bindValue(':habitacion_id', $habitacion['id'], PDO::PARAM_INT);
      $histStmt->execute();
      $habitacion['historial'] = $histStmt->fetchAll(PDO::FETCH_ASSOC);
    }

    return $habitaciones;
  }
?>