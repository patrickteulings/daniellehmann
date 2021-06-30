import '../styles/app.scss';

import ElementToggle from './utilities/toggle/elementToggle.js';
import ReadMore from './utilities/toggle/readMore.js';
import Gallery from './components/gallery/gallery';

const toggles = document.querySelectorAll('[data-module="toggle"]');
const intros = document.querySelectorAll('[data-module="readmore"]');
const galleries = document.querySelectorAll('.gallery');

for (let toggle of toggles) {
  toggle = new ElementToggle(toggle);
}
for (let intro of intros) {
  readMore = new ReadMore(intro);
}

for (let gallery of galleries) {
  gallery = new Gallery(gallery);
}

let map;

function initMap(testrun) {
  if (testrun) return;

  let latitude = '';
  let longitude = '';

  if (document.getElementById('mapCoordinates')) {
    latitude = document.getElementById('mapCoordinates').dataset.lat;
    longitude = document.getElementById('mapCoordinates').dataset.lon;
  }

  if (!latitude.length) return;

  const mapCenter = { lat: Number(latitude), lng: Number(longitude) };

  map = new google.maps.Map(document.getElementById('map'), {
    center: mapCenter,
    zoom: 15,
    mapTypeControl: false,
  });

  // Add the circle for this city to the map.
  const cityCircle = new google.maps.Circle({
    strokeColor: '#152228',
    strokeOpacity: 0.6,
    strokeWeight: 1,
    fillColor: '#152228',
    fillOpacity: 0.35,
    map,
    center: mapCenter,
    radius: 100,
  });
}

initMap(true);

console.log('DESIGN AND DEVELOPMENT BY PATRICKTEULINGS.NL');
