/* Script pour map dans Guide */

document.addEventListener("DOMContentLoaded", function () {

	// Perpi Map
	var map = L.map('perpi-map').setView([42.6986, 2.8956], 14);

	// OpenStreetMap
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	// Perpi Markers perso
	var customIcon = L.icon({
		iconUrl: guideMapData.imagePath + 'flagmarker.png',
		iconSize: [60, 60],
		iconAnchor: [15, 15],
		popupAnchor: [0, -15]
	});


	// Ajoute les marqueurs à la carte
	var markers = [
        { coords: [42.7105, 2.8742], 
          html: '<div class="popup-content"><img src="' + guideMapData.imagePath + 'Brutus.jpeg" alt="Stade Gilbert Brutus" /><h5>Stade Gilbert Brutus</h5><p>Avenue de l\'Aérodrome</p></div>' 
        },
        { coords: [42.7088, 2.8764], 
          html: '<div class="popup-content"><img src="' + guideMapData.imagePath + 'Bella.jpg" alt="Musée Bella" /><h5>Musée Bella</h5><p>6 Avenue du Languedoc</p></div>' 
        },
        { coords: [42.6981, 2.8956], 
          html: '<div class="popup-content"><img src="' + guideMapData.imagePath + 'Castillet.jpeg" alt="Le Castillet" /><h5>Le Castillet</h5><p>Place de Verdun</p></div>' 
        },
        { coords: [42.6992, 2.8955], 
          html: '<div class="popup-content"><img src="' + guideMapData.imagePath + 'Xanxo.jpeg" alt="Casa Xanxo" /><h5>Casa Xanxo</h5><p>8 Rue de la Main de Fer</p></div>' 
        },
        { coords: [42.6979, 2.8867], 
          html: '<div class="popup-content"><img src="' + guideMapData.imagePath + 'MuseeMonnaies.jpeg" alt="Musée des monnaies" /><h5>Musée des monnaies</h5><p>42 Avenue de Grande-Bretagne</p></div>' 
        },
        { coords: [42.6990, 2.8960], 
          html: '<div class="popup-content"><img src="' + guideMapData.imagePath + 'Pams.jpeg" alt="Hôtel Pams" /><h5>Hôtel Pams</h5><p>18 Rue Émile Zola</p></div>' 
        },
        { coords: [42.6987, 2.8947], 
          html: '<div class="popup-content"><img src="' + guideMapData.imagePath + 'Loge.jpeg" alt="Loge de Mer" /><h5>Loge de Mer</h5><p>Place de la Loge</p></div>' 
        },
        { coords: [42.6984, 2.8963], 
          html: '<div class="popup-content"><img src="' + guideMapData.imagePath + 'Cathedrale.jpeg" alt="Cathédrale St Jean Baptiste" /><h5>Cathédrale St Jean Baptiste</h5><p>Place Gambetta</p></div>' 
        },
        { coords: [42.6975, 2.8808], 
          html: '<div class="popup-content"><img src="' + guideMapData.imagePath + 'Cemoi.jpeg" alt="Cémoi" /><h5>Cémoi</h5><p>2980 Avenue Julien Panchot</p></p></div>' 
        },
        { coords: [42.6873, 2.8714], 
          html: '<div class="popup-content"><img src="' + guideMapData.imagePath + 'SanVicens.jpeg" alt="Atelier Sant Vicens" /><h5>Atelier Sant Vicens</h5><p>40 Rue Sant-Vicens</p></div>' 
        }
    ];
  
	
	// Ajoute les marqueurs à la carte
    markers.forEach(function(marker) {
        var markerInstance = L.marker(marker.coords, {	icon: customIcon }).addTo(map);
        markerInstance.bindPopup(marker.html);
    });
});