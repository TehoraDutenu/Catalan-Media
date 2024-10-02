/* Script pour map dans Guide */

document.addEventListener("DOMContentLoaded", function () {

	// Perpi Map
	var map = L.map('perpi-map').setView([42.7, 2.9], 14);

	// OpenStreetMap
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	// Perpi Markers
    var markers = [
        { coords: [48.862725, 2.287592], 
          html: '<div class="popup-content"><img src="/images/map/Bella.jpg" alt="Musée Bella" /><p>Musée Bella</p></div>' 
        },
        { coords: [42.4200, 2.6200], 
          html: '<div class="popup-content"><img src="URL_DE_L_IMAGE_2" alt="Description" /><p>Texte descriptif pour Marker 2</p></div>' 
        },
        { coords: [42.4100, 2.6300], 
          html: '<div class="popup-content"><img src="URL_DE_L_IMAGE_3" alt="Description" /><p>Texte descriptif pour Marker 3</p></div>' 
        }
    ];

    // Ajoute les marqueurs à la carte
    markers.forEach(function(marker) {
        var markerInstance = L.marker(marker.coords).addTo(map);
        markerInstance.bindPopup(marker.html);
    });
});