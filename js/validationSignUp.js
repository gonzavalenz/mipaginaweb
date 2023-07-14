const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
  event.preventDefault(); 
  const nombre = document.getElementById('username');
  const email = document.getElementById('email');
  const paisSelect = document.getElementById('pais');
  const contrasena = document.getElementById('contrasena');
  const confirmacionContrasena = document.getElementById('confirmacion_contrasena');
  let isValid = true;

  console.log(nombre.value)

  // Validación nombre
  if (nombre.value.trim() === '') {
    isValid = false;
    nombre.classList.add('is-invalid');
    nombre.nextElementSibling.innerHTML = 'Por favor, ingrese un username válido.';
  } else {
    nombre.classList.remove('is-invalid');
    nombre.classList.add('is-valid');
    nombre.nextElementSibling.innerHTML = '';
  }

  // Validación email
  if (email.value.trim() === '') {
    isValid = false;
    email.classList.add('is-invalid');
    email.nextElementSibling.innerHTML = 'Por favor, ingrese un correo electrónico válido.';
  } else {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value.trim())) {
      isValid = false;
      email.classList.add('is-invalid');
      email.nextElementSibling.innerHTML = 'Por favor, ingrese un correo electrónico válido.';
    } else {
      email.classList.remove('is-invalid');
      email.classList.add('is-valid');
      email.nextElementSibling.innerHTML = '';
    }
  }

  // Validación país
  if (paisSelect.value === '') {
    isValid = false;
    paisSelect.classList.add('is-invalid');
    paisSelect.nextElementSibling.innerHTML = 'Por favor, seleccione un país válido.';
  } else {
    paisSelect.classList.remove('is-invalid');
    paisSelect.classList.add('is-valid');
    paisSelect.nextElementSibling.innerHTML = '';
    console.log(paisSelect.value)
  }

  // Validación contraseña
  if (contrasena.value.trim().length < 4 || contrasena.value !== confirmacionContrasena.value) {
    isValid = false;
    contrasena.classList.add('is-invalid');
    confirmacionContrasena.classList.add('is-invalid');
    contrasena.nextElementSibling.innerHTML = 'Por favor, ingrese una contraseña válida y asegúrese de que las contraseñas coincidan.';
  } else {
    contrasena.classList.remove('is-invalid');
    confirmacionContrasena.classList.remove('is-invalid');
    contrasena.classList.add('is-valid');
    confirmacionContrasena.classList.add('is-valid');
    contrasena.nextElementSibling.innerHTML = '';
  }

  // Si el formulario es válido, se envía
  if (isValid) {
    form.submit();
  }
});


