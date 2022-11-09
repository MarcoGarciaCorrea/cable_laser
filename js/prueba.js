function cambio(){
    

document.getElementById('nums').onclick = function() {
    var value = document.getElementById("nums").selectedOptions[0].value;
    
    switch (value) {
  case 1:
    console.log("Toco el 1");
    break;
  case 2:
    console.log("Toco el 2");
    break;
  case 3:
    console.log("Toco el 3");
    break;
  default:
    console.log("No toco un instrumento. Lo siento");
    break;
}
    
    if(value==1){
        document.getElementById("container").innerHTML = '<iframe class="link_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2759.7211409505385!2d-76.81245922419495!3d-11.985911998938494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105e95aea4d5d95%3A0xd5c414087b473408!2sCable%20Laser%20Chaclacayo!5e0!3m2!1ses-419!2spe!4v1663813537006!5m2!1ses-419!2spe" ></iframe>' + value;
    }else{
    document.getElementById("container").innerHTML = 'The selected value is ' + value;
    }
    
}
}