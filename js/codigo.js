$(document).ready(function(){
	function codigoRandom(){
		var codigo = Math.floor(1e7 + (Math.random() * 7e7));
		var designcenter = "Sfdesign" + codigo;
		
		console.log(designcenter);

		$("#codigo").val(designcenter);
	}

	codigoRandom();
});
