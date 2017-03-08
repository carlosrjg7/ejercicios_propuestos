 

var id = new Array();
var nombre = new Array();
var pariente = new Array();


var tempid = new Array();
var tempnombre = new Array();
var temppariente = new Array();



 	 id = ['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'];

 nombre = ['carros','computadoras','rines','perfil bajo','lujo','repuestos','momo','software',
 			'motores','juegos','administrativos','animales','hardware','perros','gatos','hogar','estrategia','rol'];

pariente= [' ',' ','0','2','3','0','4','1','5','7','7',' ','1','11','11',' ','9','9'];



function ordenar(){

   var pos = 0;

   for(var x=0;x<id.length;x++){

   		if(pariente[x]==' '){

   			 tempid[pos] =id[x];
   			 tempnombre[pos] =nombre[x];
   			 temppariente[pos] =pariente[x];

   			 pos++;

   			 for(var i=0;i<id.length;i++){

   			 		if(tempid[pos-1]==pariente[i] || pariente[i]==id[x]){


   			 			tempid[pos] =id[i];
   			 			tempnombre[pos] =nombre[i];
   						temppariente[pos] =pariente[i];
   			 			pos++;

   			 			for (var t=0;t<id.length;t++){
	   			 			
	   			 			if(tempid[pos-1]==pariente[t]){

	   			 				tempid[pos] =id[t];
   			 					tempnombre[pos] =nombre[t];
   								temppariente[pos] =pariente[t];
   			 					pos++;	

   			 						for (var y=0;y<id.length;y++){
	   			 			
	   			 						if(tempid[pos-1]==pariente[y] || pariente[y]==id[t]){

	   			 							tempid[pos] =id[y];
   			 								tempnombre[pos] =nombre[y];
   											temppariente[pos] =pariente[y];
   			 								pos++;	

   			 					

	   			 			}

	   			 				 

   			 			}


	   			 			}

	   			 				 

   			 			}

   			 		}



   			 }


   		}

   		}

	}





function agregar (){

	 var valor0 = $('#txt0').val();
	 var valor1 = $('#txt1').val();
	 var valor2 = $('#txt2').val();

    pos = id.length;

	 id[pos]=valor0;
	 nombre[pos]= valor1;
	 pariente[pos]= valor2;




}


function limpiar (){

//$('#desordenado').html(' ');
$('#ordenado').html(' ');

}


function imprimirD(){

   var cadena = '<h3>Desordenados</h3>';


    


	for (var o=0;o<id.length;o++){

        cadena += '<span>'+id[o]+'</span>';
        cadena += '<span>'+nombre[o]+'</span>';
        cadena += '<span>'+pariente[o]+'</span>';
        cadena += '</br>';

	}


$('#desordenado').html(cadena);

}



function imprimirO(){

   var cadena2 = '<h3>ordenados</h3>';


    


	for (var o=0;o<tempid.length;o++){

        cadena2 += '<p><span>'+tempid[o]+' </span>';
        cadena2 += '<span>'+tempnombre[o]+'</span> ';
        cadena2 += '<span>'+temppariente[o]+'</span>';
        cadena2 += '</p>';

	}


$('#ordenado').html(cadena2);

}



function obtenerid (){

	var num;

	num = (id.length);

	$('#txt0').val(num);

}

function mostrar (){

  obtenerid();
  agregar();
  limpiar();
  
  imprimirD();
  ordenar();

  imprimirO();


}




window.onload = mostrar();
