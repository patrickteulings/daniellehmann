import "../styles/style.scss";

import ElementToggle from "./utilities/toggle/elementToggle.js";

const toggles = document.querySelectorAll('[data-module="toggle"]');

for (let toggle of toggles) {
  toggle = new ElementToggle(toggle);
}

console.log("DESIGN AND DEVELOPMENT BY PATRICKTEULINGS.NL");
