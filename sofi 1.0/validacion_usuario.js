function validarFormulario(){
var nombre = document.getElementById('nombre_usuario').value;
var apaterno = document.getElementById('apaterno_usuario').value;
	if(nombre === null || nombre === ''){
		alert('[ERROR] Es necesario ingresar el nombre del usuario');
		return false;			
	}

	 if(apaterno === null || apaterno === ''){
		alert('[ERROR] Es necesario ingresar el apellido paterno del usuario');
		return false;
	}

	return true;
	
	
}