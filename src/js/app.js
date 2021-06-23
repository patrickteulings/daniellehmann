import '../styles/app.scss';

import ElementToggle from './utilities/toggle/elementToggle.js';
import ReadMore from './utilities/toggle/readMore.js';
import Gallery from './components/gallery/gallery';

const toggles = document.querySelectorAll('[data-module="toggle"]');
const intros = document.querySelectorAll('[data-module="readmore"]');
const galleries = document.querySelectorAll('.gallery');

console.log('intros', intros);

for (let toggle of toggles) {
  toggle = new ElementToggle(toggle);
}
for (let intro of intros) {
  readMore = new ReadMore(intro);
}

for (let gallery of galleries) {
  gallery = new Gallery(gallery);
}

console.log('DESIGN AND DEVELOPMENT BY PATRICKTEULINGS.NL');
