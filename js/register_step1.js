    function showEmpire(target) {
        $('#empire-img').removeClass();
        $('#empire-img').addClass('empire-'+target);
        $('.empirebox').css({display: 'none'});
        $('.empirebox-'+target).css({display: 'block'});
    }

if (document.images) {
  var boton1_on = new Image();
  boton1_on.src = ROOT+"img/realms/chunjo.png";
  var boton2_on = new Image();
  boton2_on.src = ROOT+"img/realms/jinno.png";
  var boton3_on = new Image();
  boton3_on.src = ROOT+"img/realms/shinsoo.png";
}


function entra(boton) {
  if (document.images) {
    if (boton == 'boton1') {
      document.images[boton].src = boton1_on.src;
    }
  }
}


function entra2(boton) {
  if (document.images) {
    if (boton == 'boton1') {
      document.images[boton].src = boton2_on.src;
    }
  }
}


function entra3(boton) {
  if (document.images) {
    if (boton == 'boton1') {
      document.images[boton].src = boton3_on.src;
    }
  }
}


function sale(boton) {
  if (document.images) {
    if (boton == 'boton1') {
      document.images[boton].src = boton1_off.src;
    }
  }
}

function leerGET(){ 
  var cadGET = location.search.substr(1,location.search.length); 
  var arrGET = cadGET.split("&"); 
  var asocGET = new Array(); 
  var variable = ""; 
  var valor = ""; 
  for(i=0;i<arrGET.length;i++){ 
    var aux = arrGET[i].split("="); 
    variable = aux[0]; 
    valor = aux[1]; 
    asocGET[variable] = valor; 
  } 
  return asocGET; 
} 