//Inicio de sesión
window.addEventListener('load', function(){
  const formularioInicioSesion = document.getElementById('form-inicio-sesion');
  const message = document.getElementById('message');

  formularioInicioSesion.addEventListener('submit', (event) => {
    if(formularioInicioSesion.checkValidity() === false){
      event.preventDefault();
      event.stopPropagation();
      formularioInicioSesion.classList.add('was-validated');
    }
    else{
      const formData = new FormData(formularioInicioSesion);
      const email = formData.get('email');
      const password = formData.get('clave');
      formularioInicioSesion.classList.add('was-validated');
      event.preventDefault();
      fetch('?c=Sesion&a=IniciarSesion', {
          method: 'POST',
          body: formData
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              window.location.href = 'index.php?c=Tablero';
          } else {
              message.removeAttribute('hidden');
              message.textContent = data.message;
          }
      })
      .catch(error => {
          console.error('Error:', error);
          message.textContent = 'Error al iniciar sesión';
      });
    }
  });
});
  
//Crea el HASH para la contraseña
$(document).ready(function(){
  $("#pwd").change(function(){
    $("#clave").val(sha256($("#pwd").val()));
  });
});
  