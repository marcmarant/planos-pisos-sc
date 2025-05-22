<?php
  require_once 'habitaciones_query.php';
  $conn = include 'connection.php';
  $habitaciones = getHabitaciones($conn);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Plano del Primer Piso</title>
  <link rel="stylesheet" href="index.css">
</head>
<style>
  .lista-habitaciones {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
  }

  .lista-habitaciones-header {
    display: flex;
    justify-content: space-between;
    width: 50%;
  }

  table {
    width: 50%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #f4f4f4;
    font-weight: bold;
  }

  tr {
    cursor: pointer;
  }

  tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  tr:hover {
    background-color: #f1f1f1;
  }
</style>
<body>
  <header>
    <h1>Planos del Mayor de Santa Cruz</h1>
    <img src="assets/sclogo.png" alt="Logo del colegio" />
    <nav>
      <a class="current">Inicio</a>
      <a href="post.php">Post</a>
      <a href="primero.php">Primer Piso</a>
      <a href="segundo.php">Segundo Piso</a>
    </nav>
  </header>
  <main>
    <div class="info-container">
      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="#555">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z" fill="#0F1729"/>
      </svg>
      <div class="info"></div>
    </div>
    <div class="info-container">
      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="#555">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z" fill="#0F1729"/>
      </svg>
      <div class="info"></div>
    </div>
    <div class="lista-habitaciones">
      <div class="lista-habitaciones-header">
        <h2>Habitaciones</h2>
        <select id="ordenar">
          <option value="0">Orden Ascendente</option>
          <option value="1">Orden Descendente</option>
          <option value="2">Mayor Superficie</option>
          <option value="3">Menor Superficie</option>
        </select>
      </div>
      <table>
        <tbody>
          <?php 
          usort($habitaciones, function($a, $b) {
            return $a['id'] <=> $b['id'];
          });
          foreach ($habitaciones as $habitacion): ?>
            <tr id="hab-<?= $habitacion['id'] ?>" class="hab-selector">
              <td><?= $habitacion['id'] ?></td>
              <td><?= $habitacion['piso'] ?>º</td>
              <td><?= $habitacion['superficie'] ?>m²</td>
              <td><?= $habitacion['mote'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </main>
  <script>
    window.habitaciones = <?= json_encode($habitaciones) ?>;
  </script>
  <script src="habitacionDetails.js"></script>
  <script>
    const habitacionesToSort = window.habitaciones;
    //const infoDiv = document.querySelector('.info');
    const ordenarSelect = document.getElementById('ordenar');
    const tbody = document.querySelector('tbody');

    function mapPiso(piso) {
      switch (piso) {
        case 0:
          return 'Post';
        case 1:
          return 'Primero';
        case 2:
          return 'Segundo';
        default:
          return 'Desconocido';
      }
    }

    function renderHabitaciones(habitacionesToRender) {
      tbody.innerHTML = '';
      habitacionesToRender.forEach(habitacion => {
        const tr = document.createElement('tr');
        tr.id = `hab-${habitacion.id}`;
        tr.className = 'hab-selector';
        tr.innerHTML = `
          <td>${habitacion.id}</td>
          <td>${mapPiso(habitacion.piso)}</td>
          <td>${habitacion.superficie}m²</td>
          <td>${habitacion.mote}</td>
        `;
        tbody.appendChild(tr);
      });
    }

    ordenarSelect.addEventListener('change', (e) => {
      const orden = parseInt(e.target.value);
      let sortedHabitaciones;
      switch (orden) {
        case 0: // Orden Ascendente
          sortedHabitaciones = habitacionesToSort.sort((a, b) => a.id - b.id);
          break;
        case 1: // Orden Descendente
          sortedHabitaciones = habitacionesToSort.sort((a, b) => b.id - a.id);
          break;
        case 2: // Mayor Superficie
          sortedHabitaciones = habitacionesToSort.sort((a, b) => b.superficie - a.superficie);
          break;
        case 3: // Menor Superficie
          sortedHabitaciones = habitacionesToSort.sort((a, b) => a.superficie - b.superficie);
          break;
        default:
          sortedHabitaciones = habitacionesToSort;
      }
      renderHabitaciones(sortedHabitaciones);
    });

    document.addEventListener('DOMContentLoaded', () => {
      renderHabitaciones(habitacionesToSort.sort((a, b) => a.id - b.id));
    });
  </script>
  <script src="index.js"></script>
</body>
</html>