let html = document.getElementById("tiempo");

setInterval(function(){
	tiempo = new Date();

	horas = tiempo.getHours();
	minutos = tiempo.getMinutes();
	segundos = tiempo.getSeconds();

	//evitar los 0 o numeros individuales
	if(horas<10)
		horas = "0"+horas;
	if(minutos<10)
		minutos = "0"+minutos;
	if(segundos<10)
		segundos = "0"+segundos;

	//convertir el formato de 24 horas a 12 horas con am o pm
	let ampm = horas >= 12 ? "pm" : "am";
	horas = horas % 12;
	horas = horas ? horas : 12; // el 0 se convierte en 12

	html.innerHTML = horas+" : "+minutos+" : "+segundos + " " + ampm;
},1000);
