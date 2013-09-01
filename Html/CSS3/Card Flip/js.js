window.onload = function(){
		
	var url				= document.location.href,
		jockerFrente 	= url + "_frente.jpg",
		jockerAtras		= url + "_atras.jpg",
		xperiaFrente 	= url + "frente.jpg",
		xperiaAtras 	= url + "atras.jpg",
		btnJocker 		= document.querySelector("#btnJocker");
		
	btnJocker.addEventListener("click",function(evento){
		
		var imgFrente = document.querySelector("#frente"),
			imgAtras = document.querySelector("#atras");
		
		if(imgFrente.src == jockerFrente){
			imgFrente.src = xperiaFrente;
			imgAtras.src = xperiaAtras;
			this.value = "Jocker Version";
		}else {
			imgFrente.src = jockerFrente;
			imgAtras.src = jockerAtras;
			this.value = "Xperia Version";
		}
	});

}