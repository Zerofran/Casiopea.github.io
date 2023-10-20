require([
    "esri/Map",
    "esri/views/MapView",
    "esri/widgets/Locate",
    "esri/widgets/Route",
    "esri/config"
], function(Map, MapView, Locate, Route, esriConfig) {
    esriConfig.apiKey = "AAPKc4c0d31cd5004689bd1759ab5f6f85f59td9AW0sLGTUR1ZuvV0tMHV_qRe_-8SvgAl1SRegO_6MKZlvHst6DiDDyDqP9HKc"; // Reemplaza con tu propia clave de ArcGIS

    const map = new Map({
        basemap: "topo-vector"
    });

    const view = new MapView({
        container: "map",
        map: map,
        center: [-85.2072, 12.2879], // Coordenadas de Nicaragua
        zoom: 8
    });

    // Agregar control de ubicación
    const locateWidget = new Locate({
        view: view,
        useHeadingEnabled: false,
        goToOverride: function (view, options) {
            options.target.scale = 1500; // Escala de zoom al localizar
            return view.goTo(options.target);
        }
    });
    view.ui.add(locateWidget, "top-left");

    // Agregar control de ruta
    const routeWidget = new Route({
        view: view,
        routeServiceUrl: "https://route.arcgis.com/arcgis/rest/services/World/Route/NAServer/Route_World"
    });
    view.ui.add(routeWidget, "top-right");

    // Evento para calcular rutas a destinos
    function calculateRoute(destination) {
        routeWidget.route({
            stops: [{
                name: "Mi Ubicación",
                geometry: view.center
            }, {
                name: destination.name,
                geometry: destination.coordinates
            }],
            travelMode: "driving",
            start: 0,
            end: 1
        }).then(function () {
            view.goTo({ target: destination.coordinates, scale: 1500 });
        }).catch(function (error) {
            console.error("Error al calcular la ruta:", error);
        });
    }

    // Destinos en Nicaragua (Ejemplos)
    const destinations = [
        { name: "Managua", coordinates: [-86.2684, 12.1535] },
        { name: "Granada", coordinates: [-85.9601, 11.9270] },
        { name: "León", coordinates: [-86.8783, 12.4350] },
        { name: "Estelí", coordinates: [-86.3512, 13.0890] },
        { name: "Matagalpa", coordinates: [-85.9193, 12.9300] },
        { name: "Rivas", coordinates: [-85.8184, 11.4320] }
    ];

    // Event listeners para botones de rutas
    for (let i = 0; i < destinations.length; i++) {
        const button = document.getElementById("routeButton" + (i + 1));
        button.addEventListener("click", function () {
            calculateRoute(destinations[i]);
        });
    }
});
