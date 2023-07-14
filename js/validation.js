const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
  event.preventDefault(); 
  const nombre = document.getElementById('nombre');
  const email = document.getElementById('email');
  const telefono = document.getElementById('telefono');
  const mensaje = document.getElementById('mensaje');
  let isValid = true;

  // Validacion nombre
  if (nombre.value.trim() === '') {
    isValid = false;
    nombre.classList.add('is-invalid');
    nombre.nextElementSibling.innerHTML = 'Por favor, ingrese un nombre válido.';
  } else {
    nombre.classList.remove('is-invalid');
    nombre.classList.add('is-valid');
    nombre.nextElementSibling.innerHTML = '';
  }

  // Validacion email
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

  // Validacion telefono
  if (telefono.value.trim() !== '') {
    const telefonoRegex = /^\d{7}/;
    if (!telefonoRegex.test(telefono.value.trim())) {
      isValid = false;
      telefono.classList.add('is-invalid');
      telefono.nextElementSibling.innerHTML = 'Por favor, ingrese un número de teléfono válido (ej: 123-456-7890).';
    } else {
      telefono.classList.remove('is-invalid');
      telefono.classList.add('is-valid');
      telefono.nextElementSibling.innerHTML = '';
    }
  } else {
    telefono.classList.remove('is-invalid');
    telefono.classList.add('is-valid');
    telefono.nextElementSibling.innerHTML = '';
  }

  // Validacion campo mensjae
  if (mensaje.value.trim() === '') {
    isValid = false;
    mensaje.classList.add('is-invalid');
    mensaje.nextElementSibling.innerHTML = 'Por favor, ingrese un mensaje válido.';
  } else {
    mensaje.classList.remove('is-invalid');
    mensaje.classList.add('is-valid');
    mensaje.nextElementSibling.innerHTML = '';
  }

  // Si el formulario es valido, se envia
  if (isValid) {
    form.submit();
  }
});
