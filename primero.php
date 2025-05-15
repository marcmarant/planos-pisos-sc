<?php
  require_once 'connection.php';

  //$piso = 1;
  //$habitaciones = getHabitaciones($piso);

  //Temporal data
  $habitaciones = [
    [
      'mote' => 'Plato',
      'habitacion' => 21,
      'superficie' => 14.7,
      'descripcion' => 'La habitación más diferente del colegio, no tiene vecinos ni por arriba ni por abajo, solo colinda con la habitación 22 en el primero. Cuenta con una ventana que da a la calle (ruido de bares), y una ventana en el baño que da al patio interior (siendo la única habitación del colegio con ventana hacía este patio). La habitación tiende a calentarse, pero estas dos ventanas enfrentadas crean una ventilación perfecta.',
    ],
  ]
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Plano del primer piso</title>
  <link rel="stylesheet" href="index.css">
  <style>
    #hab-21 {
      top: 70%;
      left: 5.5%;
    }
    #hab-22 {
      top: 75%;
      left: 11%;
    }
    #hab-23 {
      top: 69%;
      left: 23%;
    }
    #hab-24 {
      top: 68.5%;
      left: 29%;
    }
    #hab-25 {
      top: 67%;
      left: 40.25%;
    }
    #hab-26 {
      top: 66.5%;
      left: 46.5%;
    }
    #hab-27 {
      top: 65.5%;
      left: 57.5%;
    }
    #hab-28 {
      top: 65%;
      left: 63.5%;
    }
    #hab-29 {
      top: 64%;
      left: 75%;
    }
    #hab-30 {
      top: 63.5%;
      left: 81%;
    }
    #hab-31 {
      top: 62%;
      left: 93%;
    }
    #hab-32 {
      top: 24%;
      left: 93%;
    }
    #hab-33 {
      top: 24.75%;
      left: 87%;
    }
    #hab-34 {
      top: 26%;
      left: 81%;
    }
    #hab-35 {
      top: 33%;
      left: 70%;
    }
    #hab-36 {
      top: 33.5%;
      left: 63.5%;
    }
    #hab-37 {
      top: 34.5%;
      left: 52%;
    }
    #hab-38 {
      top: 30.5%;
      left: 46%;
    }
    #hab-39 {
      top: 31%;
      left: 40.25%;
    }
    #hab-40 {
      top: 31.5%;
      left: 34.5%;
    }
  </style>
</head>
<body>
  <header>
    <h1>Plano del primer piso</h1>
    <img src="assets/sclogo.png" alt="Logo del colegio" />
    <nav>
      <a href="post.php">Post</a>
      <a class="current">Primer Piso</a>
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
    <img src="assets/plano-primero.jpg" alt="Plano del primer piso" />
    <div class="info-container">
      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="#555">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z" fill="#0F1729"/>
      </svg>
      <div class="info"></div>
    </div>
    <div class="hab-selector" id="hab-21">21</div>
    <div class="hab-selector" id="hab-22">22</div>
    <div class="hab-selector" id="hab-23">23</div>
    <div class="hab-selector" id="hab-24">24</div>
    <div class="hab-selector" id="hab-25">25</div>
    <div class="hab-selector" id="hab-26">26</div>
    <div class="hab-selector" id="hab-27">27</div>
    <div class="hab-selector" id="hab-28">28</div>
    <div class="hab-selector" id="hab-29">29</div>
    <div class="hab-selector" id="hab-30">30</div>
    <div class="hab-selector" id="hab-31">31</div>
    <div class="hab-selector" id="hab-32">32</div>
    <div class="hab-selector" id="hab-33">33</div>
    <div class="hab-selector" id="hab-34">34</div>
    <div class="hab-selector" id="hab-35">35</div>
    <div class="hab-selector" id="hab-36">36</div>
    <div class="hab-selector" id="hab-37">37</div>
    <div class="hab-selector" id="hab-38">38</div>
    <div class="hab-selector" id="hab-39">39</div>
    <div class="hab-selector" id="hab-40">40</div>
  </main>
  <script>
    const habitaciones = <?= json_encode($habitaciones) ?>;
    const buttons = document.querySelectorAll('.hab-selector');
    const infoContainer = document.querySelector('.info-container');
    const closeInfo = document.querySelector('.info-container svg');
    const infoDiv = document.querySelector('.info');

    buttons.forEach(btn => {
      btn.addEventListener('click', () => {
        const value = parseInt(btn.id.replace('hab-', ''), 10);
        const hab = habitaciones.find(hab => hab.habitacion === value);
        
        infoContainer.style.display = 'block';
        if(true) {
          infoDiv.innerHTML = `
            <h2>Habitación: ${hab?.habitacion}</h2>
            <br/>
            <p>Residente actual: ${hab?.mote}</p>
            <p>Superficie: ${hab?.superficie}m²</p>
            <p>Descripción: ${hab?.descripcion}</p>
          `;
        } else {
          infoDiv.innerHTML = '<p>Usuario no encontrado.</p>';
        }
      });
    });

    closeInfo.addEventListener('click', () => {
      infoContainer.style.display = 'none';
    });
  </script>
  <script src="mobileWarning.js"></script>
</body>
</html>