function buscarTrabajador (){


	$('#txt1').val(' ');
	$('#txt2').val(' ');
	$('#txt3').val(' ');
	$('#txt4').val(' ');
	$('#txt5').val(' ');

	var cedula = $('#txt0').val();

      	
	   $.ajax({
		   
	       url:"controladores/buscarTrabajador.php",
	       data:{Tcedula:cedula},
		   type:'POST',
	   }).success(function(data){

	   	  if(data==0){


	   	  	alert ('La cedula no coincide con ningun trabajador registrado');


	   	  }else{

		   var json_obj=$.parseJSON(data);
		   
		   for (var i=0; i<6;i++){

		   $("#txt"+i+"").val(json_obj[i]);

		    }


		    } 
		  
	
		   });	   

}


function modificarTrabajador (){


	var ced = $('#txt0').val();
	var nom = $('#txt1').val();
	var ape = $('#txt2').val();
	var cor = $('#txt3').val();
	var car = $('#txt4').val();
	var est = $('#txt5').val();

      	
	   $.ajax({
		   
	       url:"controladores/modificar.php",
	       data:{Tced:ced,
	       		 Tnom:nom,
	       		 Tape:ape,
	       		 Tcor:cor,
	       		 Tcar:car,
	       		 Test:est},
		   type:'POST',
	   }).success(function(data){

		   alert(data);

		    });	   


}


function EliminarTrabajador (){


	var ced = $('#txt0').val();

      	
	   $.ajax({
		   
	       url:"controladores/eliminar.php",
	       data:{Tced:ced},
		   type:'POST',
	   }).success(function(data){

		   alert(data);
		   $('#txt0').val('');
		   $('#txt1').val('');
		   $('#txt2').val('');
		   $('#txt3').val('');
		   $('#txt4').val('');
		   $('#txt5').val('');

		    });	   


}


function limpiar (){

		   $('#txt0').val(' ');
		   $('#txt1').val(' ');
		   $('#txt2').val(' ');
		   $('#txt3').val(' ');
		   $('#txt4').val(' ');
		   $('#txt5').val(' ');

}




function soloNum (e) {

key = e.keyCode || e.which;

teclado = String.fromCharCode(key);

numeros = "0123456789";

especiales = "8-37-38-46";

teclado_especial = false;

for (var i in especiales){

	if(key==especiales[i]){

		teclado_especial=true;
	}
}


if (numeros.indexOf(teclado)==-1 && !teclado_especial){

	 return false;
}

}


function sololetras (e) {

key = e.keyCode || e.which;

teclado = String.fromCharCode(key).toLowerCase();

letras = " abcdefghijklmnñopqrstuvwxyz";

especiales = "8-37-38-46";

teclado_especial = false;

for (var i in especiales){

	if(key==especiales[i]){

		teclado_especial=true;
	}
}


if (letras.indexOf(teclado)==-1 && !teclado_especial){

	 return false;
}

}


function validarEmail (obj){

	var id;


	id = $(obj).attr("id");

	var valor = $('#'+id+'').val();

	expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if(valor != null && valor !=''){

		 if (!expr.test(valor)){
		   alert("La dirección de email " + valor + " es incorrecta.");
		   $('#'+id+'').val('');
		  } 
}

	}