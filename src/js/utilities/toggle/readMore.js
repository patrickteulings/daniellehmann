export default class ReadMore {
  // Constructor always gets called, pass initial params here
  constructor(_elem) {
    this.elem = _elem;
    this.config = JSON.parse(_elem.dataset.config);
    this.trigger = '';
    this.target = '';
    this.activeClass = this.config.activeClass;
    this.isOpen = false;
    this.initialize();
  }

  initialize() {
    this.isOpen =
      this.config.initialState && !this.config.initialState === 'open';
    this.trigger = this.elem.querySelector(this.config.toggleTrigger);
    this.triggerLess = this.elem.querySelector(this.config.toggleLessTrigger);
    this.target = this.elem.querySelector(this.config.toggleTarget);
    this.addEvents();
  }

  addEvents() {
    if (this.trigger) this.trigger.onclick = (e) => this.toggleElement(e);
    if (this.triggerLess)
      this.triggerLess.onclick = (e) => this.toggleElement(e);
  }

  toggleElement() {
    if (this.isOpen) {
      this.closeElement();
    } else {
      this.openElement();
    }
  }

  openElement() {
    this.trigger.classList.add('is-open');
    this.elem.classList.add('is-open');
    this.isOpen = true;

    const el = this.elem.querySelector('.full');
    el.setAttribute('aria-hidden', 'false');
  }

  closeElement() {
    this.trigger.classList.remove('is-open');
    this.elem.classList.remove('is-open');
    this.isOpen = false;

    const el = this.elem.querySelector('.full');
    el.setAttribute('aria-hidden', 'true');
  }
}