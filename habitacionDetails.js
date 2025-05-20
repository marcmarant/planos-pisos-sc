const habitaciones = window.habitaciones || [];
const buttons = document.querySelectorAll('.hab-selector');
const infoContainer = document.querySelector('.info-container');
const closeInfo = document.querySelector('.info-container svg');
const infoDiv = document.querySelector('.info');

buttons.forEach(btn => {
  btn.addEventListener('click', () => {
    const value = parseInt(btn.id.replace('hab-', ''), 10);
    const hab = habitaciones.find(hab => hab.id === value);

    infoContainer.style.display = 'block';
    if(hab) {
      infoDiv.innerHTML = `
        <h2>Habitación: ${hab?.id}</h2>
        <div class="info-content">
          <div class="info-content-summary">
            <h3>Residente actual: <span>${hab.mote ? hab.mote : 'Vacia' }</span></h3>
            <h3>Superficie: <span>${hab.superficie ? hab.superficie : '??'}m²</span></h3>
            <h3>Descripción:</h3>
            <p>${hab.descripcion ? hab.descripcion : 'Aun no hay ninguna descripción para está habitación'}</p>
          </div>
          <div class="info-content-historial">
            <h3>Historial de residentes:</h3>
            <ul>
              ${hab.historial.map(res => `
                <li>-  ${res.mote} (${res.curso.split('-')[0] + '-' + res.curso.split('-')[1].slice(-2)})</li>
              `).join('')}
            </ul>
          <div/>
        </div>
      `;
    } else {
      infoDiv.innerHTML = '<p>Usuario no encontrado.</p>';
    }
  });
});

closeInfo.addEventListener('click', () => {
  infoContainer.style.display = 'none';
});