window.onload = function () {
	
	let p_nombreEvento = '';
	let p_lugarEvento = '';
	let p_fechayhoraEvento = '';
	let p_imagenEvento = '';
	
	let p_tickets_name = '';
	let p_tickets_email = '';
	
	let p_tickets_adult_info = '';
	let p_tickets_children_info = '';
	let p_total_info = 0;
	
	let p_tickets_idEvent = '';
	
	const miLSnombreEvento = window.localStorage;
	const miLSlugarEvento = window.localStorage;
	const miLSfechayhoraEvento = window.localStorage;
	const miLSimagenEvento = window.localStorage;
	
	const miLSTicketName = window.localStorage;
	const miLSTicketEmail = window.localStorage;
	
	const miLSTicketAdulto = window.localStorage;
	const miLSTicketNino = window.localStorage;
	const miLSTicketTotal = window.localStorage;
	
	function cargarInfoDeLocalStorage () {
		// ¿Existe un carrito previo guardado en LocalStorage?
		if (miLSTicketTotal.getItem('total') !== 0) {
			// Carga la información
			p_nombreEvento = JSON.parse(miLSnombreEvento.getItem('nombreEvento'));
			p_lugarEvento = JSON.parse(miLSlugarEvento.getItem('lugarEvento'));
			p_fechayhoraEvento = JSON.parse(miLSfechayhoraEvento.getItem('fechayhoraEvento'));
			p_imagenEvento = JSON.parse(miLSimagenEvento.getItem('imagenEvento'));
			
			p_tickets_name = JSON.parse(miLSTicketName.getItem('ticketname'));
			p_tickets_email = JSON.parse(miLSTicketEmail.getItem('ticketemail'));
		
			p_tickets_adult_info = JSON.parse(miLSTicketAdulto.getItem('ticketAdulto'));
			p_tickets_children_info = JSON.parse(miLSTicketNino.getItem('ticketNino'));
			p_total_info = JSON.parse(miLSTicketTotal.getItem('total'));
		}
	}
	
	function cargarInfoHTML() {
		
		document.getElementById('p_nombreEvento').innerHTML = p_nombreEvento;
		document.getElementById('p_lugarEvento').innerHTML = p_lugarEvento;
		document.getElementById('p_fechayhoraEvento').innerHTML = p_fechayhoraEvento;
		//document.getElementById('p_imagenEvento').innerHTML = p_imagenEvento;
		
		document.getElementById('p_tickets_name').innerHTML = p_tickets_name;
		document.getElementById('p_tickets_email').innerHTML = p_tickets_email;
		
		document.getElementById('p_tickets_adult_info').innerHTML = p_tickets_adult_info;
		document.getElementById('p_tickets_children_info').innerHTML = p_tickets_children_info;
		document.getElementById('p_total_info').innerHTML = p_total_info;
		
		document.getElementById('p_tickets_idEvent').innerHTML = Math.random().toString(36).substr(2, 9) + ' - ' + p_tickets_email;
	}
	
	cargarInfoDeLocalStorage();
	cargarInfoHTML();
	
	
	function downloadCanvas(canvasId, filename) {
		// Obteniendo la etiqueta la cual se desea convertir en imagen
		var domElement = document.getElementById(canvasId);

		html2canvas(domElement).then(domElementCanvas => {
			var context = domElementCanvas.getContext('2d');

			// Creando enlace para descargar la imagen generada
			var link = document.createElement('a');
			link.href = domElementCanvas.toDataURL("image/png");
			link.download = filename;

			// Chequeando para browsers más viejos
			if (document.createEvent) {
				var event = document.createEvent('MouseEvents');
			// Simulando clic para descargar
			event.initMouseEvent("click", true, true, window, 0,
				0, 0, 0, 0,
				false, false, false, false,
				0, null);
			link.dispatchEvent(event);
			} else {
				// Simulando clic para descargar
				link.click();
			}
            // Haciendo la conversión y descarga de la imagen al presionar el botón
        });
    }
	
	$('#boton-descarga').click(function() {
		var fecha = new Date();
		var year = fecha.getFullYear();
		var mon = fecha.getMonth();
		var day = fecha.getDate();
		var hour = fecha.getHours();
		var minutes = fecha.getMinutes();
		downloadCanvas('imagen', 'Event_TicketCompra_'+year+'_'+(mon+1)+'_'+day+'_'+hour+minutes+'.png');
    });
}
