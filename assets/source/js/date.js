const hoy = new Date();
const fechaMundialInicio = new Date('2026-06-11T00:00:00');

const diferenciaTiempo = fechaMundialInicio - hoy;
const diferenciaDias = Math.floor(diferenciaTiempo / (1000 * 60 * 60 * 24));

const daysElement = document.getElementById('days');
daysElement.textContent = diferenciaDias;
