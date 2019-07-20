window.addEventListener('load', cargar) //al cargar la pagina se cargara la funcion
var cuerpo = document.querySelector('#cuerpo') //aqui insertaremos las cosas
//funcion para cargar el contenido
function cargar() {
	fetch('http://localhost/Proyecto_Opor_CI/Main/recargar')
		.then(data => data.text())
		.then(texto => {
			cuerpo.innerHTML = `${texto}`
		}).catch(e => console.error('Error'+e))
}
