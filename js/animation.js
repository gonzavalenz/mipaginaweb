let titulo = document.getElementById("titulo");
let texto = titulo.textContent;
let flg = true;
titulo.classList.add("maquinar");

function escribirTexto() {
  titulo.textContent = ""
    titulo.classList.add("maquinar");
    let i = 0;
  let interval = setInterval(function() {
    titulo.textContent += texto[i];
    i++;
    if (i >= texto.length) {
      clearInterval(interval);
      setTimeout(borrarTexto, 1500);
    }
  }, 150);
}


function borrarTexto() {
  let i = texto.length - 1;
  let interval = setInterval(function() {
    titulo.textContent = titulo.textContent.slice(0, -1);
    i--;
    if (i < 0) {
      titulo.textContent = "";
      clearInterval(interval);
      setTimeout(escribirTexto, 300);
      if (flg) {
        titulo.classList.remove("maquinar");
        titulo.classList.add("maquinar2");
        flg = false;
      } else {
        titulo.classList.remove("maquinar2");
        titulo.classList.add("maquinar");
        flg = true;
      }
    }
  }, 75);
}

escribirTexto();

