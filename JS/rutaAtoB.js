function mostrarMapa() {
    // Obtener los valores de latitud y longitud del formulario
    var origin = document.getElementById('origin').value;
    var destiny = document.getElementById('destiny').value;
    
    // Obtener el modo de transporte seleccionado
    var modoTransporte = document.getElementById('transportation').value;
    
    // Construir la URL de la API de Google Maps con los valores del formulario
    var mapaURL = `https://www.google.com/maps/embed/v1/directions?key=AIzaSyCVfxAxuzZEqvBbn93Ppz_5uzs42EkcV58&origin=${origin}&destination=${destiny}&mode=${modoTransporte}`;

    // Obtener el contenedor del mapa y establecer el atributo src con la URL construida
    var mapaContainer = document.getElementById('map-container');
    mapaContainer.innerHTML = `<iframe width="100%" height="100%" frameborder="0" style="border:0" src="${mapaURL}" allowfullscreen></iframe>`;
}
