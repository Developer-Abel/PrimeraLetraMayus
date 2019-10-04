<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<h1>Primera LETRA en mayuscula</h1>
<body>
	<label>ingresa palabra <input type="" name="" onblur="cambiar(this);"></label>

	<p id="parrafo"></p>






	<script type="text/javascript">
		function cambiar(letra){

		var txt = " "+letra.value;
		var espaciosLetra=[];
		var espaciosPosicion=[];

		for (i=0; i<txt.length; i++) {
			if (txt.charAt(i)==" "){
				var bandera = txt.substr(i+1,1).toUpperCase();
				espaciosLetra.push(bandera);
				espaciosPosicion.push(i);
			}
		}

		var cadena2 = "";
		for (var i = 0; i < espaciosPosicion.length; i++) {
			cadena2 += espaciosLetra[i]+txt.slice(espaciosPosicion[i]+2,espaciosPosicion[i+1]).toLowerCase()+" "; 
		}

		cadena2 = cadena2.trim();
		document.getElementById('parrafo').innerHTML = cadena2;
	}
	</script>
</body>
</html>