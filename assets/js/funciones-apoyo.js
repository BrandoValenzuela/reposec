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