function seleccionarMapa(){
    document.getElementById('sucursales').onclick = function() {
        var value = document.getElementById("sucursales").selectedOptions[0].value;

        if(value==2){
            document.getElementById("lm").innerHTML = '<iframe class="link_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2759.7211409505385!2d-76.81245922419495!3d-11.985911998938494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105e95aea4d5d95%3A0xd5c414087b473408!2sCable%20Laser%20Chaclacayo!5e0!3m2!1ses-419!2spe!4v1663813537006!5m2!1ses-419!2spe" ></iframe>';
        }else if(value==3){
            document.getElementById("lm").innerHTML = '<iframe class="link_mapa" src="" ></iframe>';
        }else if(value==4){
            document.getElementById("lm").innerHTML = '<iframe class="link_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7821.477428532166!2d-74.49952349066734!3d-11.426501004824376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910b9136d1a96acb%3A0x29be90f55e5f2e66!2sCorporacion%20Cablelaser%20S.A.C.!5e0!3m2!1ses!2spe!4v1665544789183!5m2!1ses!2spe" ></iframe>';
        }else{
        document.getElementById("lm").innerHTML = '<iframe class="link_mapa" src="" ></iframe>';
        }
    }
    
    
}
