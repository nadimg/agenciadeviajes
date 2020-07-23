function soloLetras(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = "áéíóúabcdefghijklmnñopqrstuvwxyz";
	especiales = "8-37-39-46";
	tecla_especial = false
	for(var i in especiales){
	   if(key ==especiales[i]){
		tecla_especial = true;
		break;
	   }
	}
	if(letras.indexOF(tecla)==-1 && !tecla_especial){
		return false;
		}
	
function soloNumeros(e){
	var keynum = window.event ? window.event.keyCode : e.which;
	if ((keynum == 8) || (keynum == 46))
	return true;
	return /\d/.test(String.fromCharCode(keynum));
	}
