export default class ElementToggle {
  // Constructor always gets called, pass initial params here
  constructor(_elem) {
    this.elem = _elem;
    this.config = JSON.parse(_elem.dataset.config);
    this.trigger = "";
    this.target = "";
    this.activeClass = this.config.activeClass;
    this.isOpen = false;
    this.initialize();
  }

  initialize() {
    this.isOpen =
      this.config.initialState && !this.config.initialState === "open";
    this.trigger = this.elem.querySelector(this.config.toggleTrigger);
    this.target = this.elem.querySelector(this.config.toggleTarget);

    this.addEvents();
  }

  addEvents() {
    this.trigger.onclick = (e) => this.toggleElement(e);
  }

  toggleElement() {
    if (this.isOpen) {
      this.closeElement();
    } else {
      this.openElement();
    }
  }

  openElement() {
    this.trigger.classList.add("is-open");
    this.target.classList.add("is-open");
    this.elem.classList.add("is-open");
    this.isOpen = true;
    document.body.classList.add("body-is-locked");

    const count = Number(localStorage.getItem("menuClicked")) || 0;
    localStorage.setItem("menuClicked", count + 1);
  }

  closeElement() {
    this.trigger.classList.remove("is-open");
    this.target.classList.remove("is-open");
    this.elem.classList.remove("is-open");
    document.body.classList.remove("body-is-locked");
    this.isOpen = false;
  }
}
