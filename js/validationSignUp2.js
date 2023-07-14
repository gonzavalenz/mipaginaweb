const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
  event.preventDefault(); 
  const nombre = document.getElementById('username');
  const email = document.getElementById('email');
  const pais = document.getElementById('pais');
  const contrasena = document.getElementById('contrasena');
  const confirmacionContrasena = document.getElementById('confirmacion_contrasena')
  let isValid = true;

  // Validacion nombre
  if (nombre.value.trim() === '') {
    isValid = false;
    nombre.classList.add('is-invalid');
    nombre.nextElementSibling.innerHTML = 'Por favor, ingrese un username válido.';
  } else {
    nombre.classList.remove('is-invalid');
    nombre.classList.add('is-valid');
    nombre.nextElementSibling.innerHTML = '';
  }


  // Si el formulario es valido, se envia
  if (isValid) {
    form.submit();
  }
});
