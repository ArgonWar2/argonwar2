    function showEmpire(target) {
        $('#empire-img').removeClass();
        $('#empire-img').addClass('empire-'+target);
        $('.empirebox').css({display: 'none'});
        $('.empirebox-'+target).css({display: 'block'});
    }
	
if (document.images) {
  var boton1_on = new Image();
  boton1_on.src = ROOT+"img/races/war_light.png";
  var boton2_on = new Image();
  boton2_on.src = ROOT+"img/races/ninja_light.png";
  var boton3_on = new Image();
  boton3_on.src = ROOT+"img/races/sura_light.png";
  var boton4_on = new Image();
  boton4_on.src = ROOT+"img/races/shaman_light.png";
  
  var boton5_on = new Image();
  boton5_on.src = ROOT+"img/races/war_m.png";
  var boton6_on = new Image();
  boton6_on.src = ROOT+"img/races/war_w.png";
  
  var boton7_on = new Image();
  boton7_on.src = ROOT+"img/races/ninja_m.png";
  var boton8_on = new Image();
  boton8_on.src = ROOT+"img/races/ninja_w.png";
  
  var boton9_on = new Image();
  boton9_on.src = ROOT+"img/races/sura_m.png";
  var boton10_on = new Image();
  boton10_on.src = ROOT+"img/races/sura_w.png";
  
  var boton11_on = new Image();
  boton11_on.src = ROOT+"img/races/shaman_w.png";
  var boton12_on = new Image();
  boton12_on.src = ROOT+"img/races/shaman_m.png";
  
  var boton1_off = new Image();
  boton1_off.src = ROOT+"img/races/war_off.png";
  var boton2_off = new Image();
  boton2_off.src = ROOT+"img/races/ninja_off.png";
  var boton3_off = new Image();
  boton3_off.src = ROOT+"img/races/sura_off.png";
  var boton4_off = new Image();
  boton4_off.src = ROOT+"img/races/shaman_off.png";
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
    if (boton == 'boton2') {
      document.images[boton].src = boton2_on.src;
    }
  }
}


function entra3(boton) {
  if (document.images) {
    if (boton == 'boton3') {
      document.images[boton].src = boton3_on.src;
    }
  }
}


function entra4(boton) {
  if (document.images) {
    if (boton == 'boton4') {
      document.images[boton].src = boton4_on.src;
    }
  }
}
function entra5(boton) {
  if (document.images) {
    if (boton == 'boton5') {
      document.images[boton].src = boton5_on.src;
    }
  }
}

function entra6(boton) {
  if (document.images) {
    if (boton == 'boton5') {
      document.images[boton].src = boton6_on.src;
    }
  }
}

function entra7(boton) {
  if (document.images) {
    if (boton == 'boton6') {
      document.images[boton].src = boton7_on.src;
    }
  }
}

function entra8(boton) {
  if (document.images) {
    if (boton == 'boton6') {
      document.images[boton].src = boton8_on.src;
    }
  }
}

function entra9(boton) {
  if (document.images) {
    if (boton == 'boton7') {
      document.images[boton].src = boton9_on.src;
    }
  }
}

function entra10(boton) {
  if (document.images) {
    if (boton == 'boton7') {
      document.images[boton].src = boton10_on.src;
    }
  }
}

function entra11(boton) {
  if (document.images) {
    if (boton == 'boton8') {
      document.images[boton].src = boton11_on.src;
    }
  }
}
function entra12(boton) {
  if (document.images) {
    if (boton == 'boton8') {
      document.images[boton].src = boton12_on.src;
    }
  }
}


function sale1(boton) {
  if (document.images) {
    if (boton == 'boton1') {
      document.images[boton].src = boton1_off.src;
    }
  }
}

function sale2(boton) {
  if (document.images) {
    if (boton == 'boton2') {
      document.images[boton].src = boton2_off.src;
    }
  }
}

function sale3(boton) {
  if (document.images) {
    if (boton == 'boton3') {
      document.images[boton].src = boton3_off.src;
    }
  }
}

function sale4(boton) {
  if (document.images) {
    if (boton == 'boton4') {
      document.images[boton].src = boton4_off.src;
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