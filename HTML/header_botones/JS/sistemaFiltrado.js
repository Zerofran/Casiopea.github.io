document.addEventListener('DOMContentLoaded', function () {
    const numberSearch = document.getElementById('number-search');
    const currencySelector = document.getElementById('currency-selector');
    const keywordSearch = document.getElementById('keyword-search');
    const imageContainer = document.getElementById('product-container'); // Se cambió a "product-container" según tu HTML

    const exchangeRates = {
        cordoba: 1,
        dollar: 0.0294,
        euro: 0.023,
        // Agrega más tasas de cambio
    };

    function convertPrice(price, fromCurrency, toCurrency) {
        return (price / exchangeRates[fromCurrency]) * exchangeRates[toCurrency];
    }

    function filterImages() {
        const numberValue = parseInt(numberSearch.value, 10);
        const selectedCurrency = currencySelector.value;
        const keywordValue = keywordSearch.value.toLowerCase();

        // Obtener todas las imágenes
        const images = imageContainer.querySelectorAll('.box_img');

        images.forEach(image => {
            const price = parseFloat(image.getAttribute('data-price'));
            const currency = image.getAttribute('data-currency');
            const tags = image.getAttribute('data-tags').toLowerCase().split(',');

            const convertedPrice = convertPrice(price, currency, selectedCurrency);
            const shouldShow = (!numberValue || convertedPrice <= numberValue) &&
                tags.some(tag => tag.includes(keywordValue));

            image.style.display = shouldShow ? 'block' : 'none';
        });
    }

    numberSearch.addEventListener('input', filterImages);
    currencySelector.addEventListener('change', filterImages);
    keywordSearch.addEventListener('input', filterImages);

    const filterButtons = document.querySelectorAll('.filter-button');
    let selectedFilter = null;

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            selectedFilter = button;
            const filterValue = button.getAttribute('data-filter');

            // Establece la palabra clave según el botón, o vacía si es "Todos"
            keywordSearch.value = filterValue === 'todos' ? '' : filterValue;

            filterImages();
        });
    });

});

