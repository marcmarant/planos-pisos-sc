<?php
  require_once 'habitaciones_query.php';
  $conn = include 'connection.php';
  $piso = 2;
  $habitaciones = getHabitaciones($conn, $piso);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Plano del Segundo Piso</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="piso.css">
  <style>
    #hab-41 {
      top: 68.5%;
      left: 23%;
    }
    #hab-42 {
      top: 68%;
      left: 29%;
    }
    #hab-43 {
      top: 67%;
      left: 40%;
    }
    #hab-44 {
      top: 66.5%;
      left: 46.5%;
    }
    #hab-45 {
      top: 65%;
      left: 57.5%;
    }
    #hab-46 {
      top: 64.5%;
      left: 63.5%;
    }
    #hab-47 {
      top: 63.5%;
      left: 74.5%;
    }
    #hab-48 {
      top: 63%;
      left: 81.5%;
    }
    #hab-49 {
      top: 62%;
      left: 92.5%;
    }
    #hab-50 {
      top: 25%;
      left: 91.5%;
    }
    #hab-51 {
      top: 26%;
      left: 82.5%;
    }
    #hab-52 {
      top: 29.5%;
      left: 71%;
    }
    #hab-53 {
      top: 34%;
      left: 63.5%;
    }
    #hab-54 {
      top: 35%;
      left: 52%;
    }
    #hab-55 {
      top: 30%;
      left: 44.5%;
    }
    #hab-56 {
      top: 30.5%;
      left: 36%;
    }
  </style>
</head>
<body>
  <header>
    <h1>Plano del Segundo Piso</h1>
    <img src="assets/sclogo.png" alt="Logo del colegio" />
    <nav>
      <a href="index.php">Inicio</a>
      <a href="post.php">Post</a>
      <a href="primero.php">Primer Piso</a>
      <a class="current">Segundo Piso</a>
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
    <img src="assets/plano-segundo.jpg" alt="Plano del segundo piso" />
    <div class="info-container">
      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="#555">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z" fill="#0F1729"/>
      </svg>
      <div class="info"></div>
    </div>
    <div class="hab-selector" id="hab-41">41</div>
    <div class="hab-selector" id="hab-42">42</div>
    <div class="hab-selector" id="hab-43">43</div>
    <div class="hab-selector" id="hab-44">44</div>
    <div class="hab-selector" id="hab-45">45</div>
    <div class="hab-selector" id="hab-46">46</div>
    <div class="hab-selector" id="hab-47">47</div>
    <div class="hab-selector" id="hab-48">48</div>
    <div class="hab-selector" id="hab-49">49</div>
    <div class="hab-selector" id="hab-50">50</div>
    <div class="hab-selector" id="hab-51">51</div>
    <div class="hab-selector" id="hab-52">52</div>
    <div class="hab-selector" id="hab-53">53</div>
    <div class="hab-selector" id="hab-54">54</div>
    <div class="hab-selector" id="hab-55">55</div>
    <div class="hab-selector" id="hab-56">56</div>
  </main>
  <script>
    window.habitaciones = <?= json_encode($habitaciones) ?>;
  </script>
  <script src="habitacionDetails.js"></script>
  <script src="mobileWarning.js"></script>
</body>
</html>