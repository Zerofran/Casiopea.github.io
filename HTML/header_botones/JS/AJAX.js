document.addEventListener('DOMContentLoaded', function () {
    const productContainer = document.getElementById('product-container');

    // Realiza una solicitud AJAX para obtener los datos de los productos desde un archivo PHP.
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'obtener_productos_be.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Inserta los datos de productos en el contenedor.
            productContainer.innerHTML = xhr.responseText;
        }
    };
    xhr.send();
});

// si precionas las teclas Ctrl + Shift + Q te llebara al apartado de ingreso de objetos
document.addEventListener('keydown', function (event) {
if (event.ctrlKey && event.shiftKey && event.key === 'Q') {
  // Redirige a la página deseada cuando se presione Ctrl + Shift + Q
  window.location.href = 'page_subir_producto.php';
}
});