function seleccionarMapa(){
    document.getElementById('sucursales').onchange = function() {
        var value = document.getElementById("sucursales").selectedOptions[0].value;
        if(value==1){
            document.getElementById("numOfi").innerHTML = '-';
            document.getElementById("numTec").innerHTML = '-';
            document.getElementById("correo").innerHTML = '-';
            document.getElementById("numWasa").innerHTML = '-';
            document.getElementById("nomFace").innerHTML = '-';
            document.getElementById("nomInsta").innerHTML = '-';
            document.getElementById("lm").innerHTML = '<iframe class="link_mapa" src="" ></iframe>';
        }else if(value==2){
            document.getElementById("numOfi").innerHTML = '932 555 005';
            document.getElementById("numTec").innerHTML = '999 888 777';
            document.getElementById("correo").innerHTML = 'cablelaserchaclacayo@coclasac.com.pe';
            document.getElementById("numWasa").innerHTML = '932 555 005';
            document.getElementById("nomFace").innerHTML = 'Cable Láser Chaclacayo';
            document.getElementById("nomInsta").innerHTML = '@cablelaserchaclacayo';
            document.getElementById("lm").innerHTML = '<iframe class="link_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2759.7211409505385!2d-76.81245922419495!3d-11.985911998938494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105e95aea4d5d95%3A0xd5c414087b473408!2sCable%20Laser%20Chaclacayo!5e0!3m2!1ses-419!2spe!4v1663813537006!5m2!1ses-419!2spe" ></iframe>';
        }else if(value==3){
            document.getElementById("numOfi").innerHTML = '978 654 321';
            document.getElementById("numTec").innerHTML = '965 487 321';
            document.getElementById("correo").innerHTML = 'cablelaserelagustino@coclasac.com.pe';
            document.getElementById("numWasa").innerHTML = '978 654 321';
            document.getElementById("nomFace").innerHTML = 'Cable Láser El Agustino';
            document.getElementById("nomInsta").innerHTML = '@cablelaserelagustino';
            document.getElementById("lm").innerHTML = '<iframe class="link_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31216.11726365633!2d-76.9962605836522!3d-12.042511679990577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c676e6cef7e3%3A0x5e83b54b9576d7ec!2sEl%20Agustino!5e0!3m2!1ses-419!2spe!4v1667224034074!5m2!1ses-419!2spe" ></iframe>';
        }else if(value==4){
            document.getElementById("numOfi").innerHTML = '963 852 741';
            document.getElementById("numTec").innerHTML = '951 753 684';
            document.getElementById("correo").innerHTML = 'cablelaserpangoa@coclasac.com.pe';
            document.getElementById("numWasa").innerHTML = '963 852 741';
            document.getElementById("nomFace").innerHTML = 'Cable Láser Pangoa';
            document.getElementById("nomInsta").innerHTML = '@cablelaserpangoa';
            document.getElementById("lm").innerHTML = '<iframe class="link_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7821.477428532166!2d-74.49952349066734!3d-11.426501004824376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910b9136d1a96acb%3A0x29be90f55e5f2e66!2sCorporacion%20Cablelaser%20S.A.C.!5e0!3m2!1ses!2spe!4v1665544789183!5m2!1ses!2spe" ></iframe>';
        }else if(value==5){
            document.getElementById("numOfi").innerHTML = '958 654 154';
            document.getElementById("numTec").innerHTML = '952 645 325';
            document.getElementById("correo").innerHTML = 'cablelasermazamari@coclasac.com.pe';
            document.getElementById("numWasa").innerHTML = '958 654 154';
            document.getElementById("nomFace").innerHTML = 'Cable Láser Mazamari';
            document.getElementById("nomInsta").innerHTML = '@cablelasermazamari';
            document.getElementById("lm").innerHTML = '<iframe class="link_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31297.14995635128!2d-74.55056213436373!3d-11.324202351978458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910b95bae025fe01%3A0x24f5accad5bc7182!2sMazamari!5e0!3m2!1ses-419!2spe!4v1667224376975!5m2!1ses-419!2spe" ></iframe>';
        }else{
            document.getElementById("numOfi").innerHTML = '922 633 411';
            document.getElementById("numTec").innerHTML = '962 135 154';
            document.getElementById("correo").innerHTML = 'cablelasersatipo@coclasac.com.pe';
            document.getElementById("numWasa").innerHTML = '922 633 411';
            document.getElementById("nomFace").innerHTML = 'Cable Láser Satipo';
            document.getElementById("nomInsta").innerHTML = '@cablelasersatipo';
            document.getElementById("lm").innerHTML = '<iframe class="link_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31304.96091740499!2d-74.65604808443297!3d-11.252573494579748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910bc0fffeaa1779%3A0xabec4b6bca885a5d!2sSatipo!5e0!3m2!1ses-419!2spe!4v1667224508264!5m2!1ses-419!2spe" ></iframe>';
        }
    }
}

function seleccionarNumero(){
    document.getElementById('numeros').onchange = function() {
        var value = document.getElementById("numeros").selectedOptions[0].value;
        if(value==1){
            document.getElementById("fooNumero").innerHTML = 'Número:';
            document.getElementById("fooDirecc").innerHTML = 'Dirección:';
        }else if(value==2){
            document.getElementById("fooNumero").innerHTML = 'Número: 932 555 005';
            document.getElementById("fooDirecc").innerHTML = 'Dirección: Mz. N Lt. 41 Urb. Miguel Grau, Chaclacayo - Lima';
        }else if(value==3){
            document.getElementById("fooNumero").innerHTML = 'Número: 978 654 321';
            document.getElementById("fooDirecc").innerHTML = 'Dirección: Calle Rio Blanco N°132 La Atarjeta, El Agustino - Lima';
        }else if(value==4){
            document.getElementById("fooNumero").innerHTML = 'Número: 963 852 741';
            document.getElementById("fooDirecc").innerHTML = 'Dirección: Cal.26 de Marzo Mz. 30 Lt. U-2 (a 1 cdra. del Hospital de Pangoa) Junin - Satipo - Pangoa';
        }else if(value==5){
            document.getElementById("fooNumero").innerHTML = 'Número: 958 654 154';
            document.getElementById("fooDirecc").innerHTML = 'Dirección: Mazamari';
        }else{
            document.getElementById("fooNumero").innerHTML = 'Número: 922 633 411';
            document.getElementById("fooDirecc").innerHTML = 'Dirección: Satipo';
        }
    }
}