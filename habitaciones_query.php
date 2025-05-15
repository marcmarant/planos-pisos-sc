<?php
  function getHabitaciones($conn, $piso) {
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
      WHERE H.piso = :piso AND C.habitacion IS NOT NULL
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':piso', 1, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
?>