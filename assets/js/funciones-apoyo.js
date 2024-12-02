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
              window.location.href = '?c=Tablon';
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

function formateoDeFechas(Fecha_inicial,Fecha_final){
  var fecha = new Date();
    var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
    document.getElementById("dia").innerHTML = fecha.getDate();
    document.getElementById("mes").innerHTML = meses[fecha.getMonth()];
    document.getElementById("anio").innerHTML = fecha.getFullYear();

    var fecha_inicial = Fecha_inicial;
    var fecha_final = Fecha_final;
    var datos_fecha_inicial = fecha_inicial.split("-");
    var datos_fecha_final = fecha_final.split("-");
    if (datos_fecha_inicial[1] == datos_fecha_final[1]) {
      document.getElementById("periodo").innerHTML = 
        datos_fecha_inicial[2] + 
        " al " + 
        datos_fecha_final[2] + 
        " de " +
        meses[parseInt(datos_fecha_final[1])-1] + 
        " de " +
        datos_fecha_final[0];
    }else{
      document.getElementById("periodo").innerHTML = 
        datos_fecha_inicial[2] + 
        " de " +
        meses[parseInt(datos_fecha_inicial[1])-1] + 
        " al " + 
        datos_fecha_final[2] + 
        " de " +
        meses[parseInt(datos_fecha_final[1])-1] + 
        " de " +
        datos_fecha_final[0];
    }
}