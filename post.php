<?php
  require_once 'habitaciones_query.php';
  $conn = include 'connection.php';
  $piso = 0;
  $habitaciones = getHabitaciones($conn, $piso);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Plano de Post</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="post.css">
  <style>
    #hab-1 {
      top: 68.5%;
      left: 19%;
    }
    #hab-2 {
      top: 67%;
      left: 29.5%;
    }
    #hab-3 {
      top: 66%;
      left: 40.25%;
    }
    #hab-4 {
      top: 65%;
      left: 46.5%;
    }
    #hab-5 {
      top: 63.5%;
      left: 57%;
    }
    #hab-6 {
      top: 62.5%;
      left: 63.75%;
    }
    #hab-7 {
      top: 61.5%;
      left: 74.5%;
    }
    #hab-8 {
      top: 60.5%;
      left: 81.25%;
    }
    #hab-9 {
      top: 59%;
      left: 92.25%;
    }
    #hab-10 {
      top: 23%;
      left: 93%;
    }
    #hab-11 {
      top: 25.5%;
      left: 87.5%;
    }
    #hab-12 {
      top: 26%;
      left: 81.75%;
    }
    #hab-13 {
      top: 27%;
      left: 74.75%;
    }
    #hab-14 {
      top: 27.5%;
      left: 70%;
    }
    #hab-15 {
      top: 28.5%;
      left: 63%;
    }
    #hab-16 {
      top: 29%;
      left: 58.25%;
    }
    #hab-17 {
      top: 30%;
      left: 51.25%;
    }
    #hab-18 {
      top: 30.5%;
      left: 46.25%;
    }
    #hab-19 {
      top: 31%;
      left: 39.5%;
    }
    #hab-20 {
      top: 31.5%;
      left: 35%;
    }
  </style>
</head>
<body>
  <header>
    <div class="title">
      <h1>Plano de Post</h1>
      <img src="assets/sclogo.png" alt="Logo del colegio" />
    </div>
    <nav>
      <a class="current">Post</a>
      <a href="primero.php">Primer Piso</a>
      <a href="segundo.php">Segundo Piso</a>
    </nav>
  </header>
  <main>
    <div id="rotate-warning">
      <h2>Por favor, gira tu dispositivo horizontalmente.</h2>
      <svg width="250px" height="250px" viewBox="0 0 30.5 30.63" id="phone-rotate">
        <g>
          <g>
            <path d="M21 3.22A13.39 13.39 0 0128.59 14H30.5A15.31 15.31 0 0015.25 0l-.84 0L19.27 4.9zM11.64 4.42L26.15 18.93l-7.29 7.29L4.35 11.7l7.29-7.28m0-2.75a1.91 1.91 0 00-1.35.56L2.17 10.35a1.91 1.91 0 000 2.71L17.51 28.4a2 2 0 001.36.56 1.91 1.91 0 001.35-.56l8.11-8.12a1.9 1.9 0 000-2.71L13 2.23a1.91 1.91 0 00-1.35-.56zM9.53 27.42A13.41 13.41 0 011.91 16.59H0a15.31 15.31 0 0015.25 14l.84 0-4.86-4.86z"></path>
          </g>
        </g>
      </svg>
    </div>
    <img src="assets/plano-post.jpg" alt="Plano del piso de post" />
    <div class="info-container">
      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="#555">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z" fill="#0F1729"/>
      </svg>
      <div class="info"></div>
    </div>
    <div class="hab-selector" id="hab-1">1</div>
    <div class="hab-selector" id="hab-2">2</div>
    <div class="hab-selector" id="hab-3">3</div>
    <div class="hab-selector" id="hab-4">4</div>
    <div class="hab-selector" id="hab-5">5</div>
    <div class="hab-selector" id="hab-6">6</div>
    <div class="hab-selector" id="hab-7">7</div>
    <div class="hab-selector" id="hab-8">8</div>
    <div class="hab-selector" id="hab-9">9</div>
    <div class="hab-selector" id="hab-10">10</div>
    <div class="hab-selector" id="hab-11">11</div>
    <div class="hab-selector" id="hab-12">12</div>
    <div class="hab-selector" id="hab-13">13</div>
    <div class="hab-selector" id="hab-14">14</div>
    <div class="hab-selector" id="hab-15">15</div>
    <div class="hab-selector" id="hab-16">16</div>
    <div class="hab-selector" id="hab-17">17</div>
    <div class="hab-selector" id="hab-18">18</div>
    <div class="hab-selector" id="hab-19">19</div>
    <div class="hab-selector" id="hab-20">20</div>
  </main>
  <script>
    window.habitaciones = <?= json_encode($habitaciones) ?>;
  </script>
  <script src="habitacionDetails.js"></script>
  <script src="mobileWarning.js"></script>
</body>
</html>