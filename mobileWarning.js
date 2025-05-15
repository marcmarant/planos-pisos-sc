function isMobile() {
  return /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
}

function checkOrientation() {
  const isPortrait = window.matchMedia("(orientation: portrait)").matches;
  const warning = document.getElementById('rotate-warning');

  if (isMobile() && isPortrait) {
    warning.style.display = 'flex';
  } else {
    warning.style.display = 'none';
  }
}

// Detectar al cargar y al cambiar orientación
window.addEventListener("load", checkOrientation);
window.addEventListener("resize", checkOrientation);
window.addEventListener("orientationchange", checkOrientation);