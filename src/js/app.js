import "../styles/app.scss";

import ElementToggle from "./utilities/toggle/elementToggle.js";
import Gallery from "./components/gallery/gallery";

const toggles = document.querySelectorAll('[data-module="toggle"]');
const galleries = document.querySelectorAll(".gallery");

for (let toggle of toggles) {
  toggle = new ElementToggle(toggle);
}

for (let gallery of galleries) {
  gallery = new Gallery(gallery);
}

console.log("DESIGN AND DEVELOPMENT BY PATRICKTEULINGS.NL");
