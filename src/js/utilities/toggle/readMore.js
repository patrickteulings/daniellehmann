export default class ReadMore {
  // Constructor always gets called, pass initial params here
  constructor(_elem) {
    this.elem = _elem;
    this.config = JSON.parse(_elem.dataset.config);
    this.trigger = '';
    this.target = '';
    this.activeClass = this.config.activeClass;
    this.isOpen = false;
    this.breakWord = 'BREAK'; // the term use can use in WP to define the end of the excerpt.
    this.initialize();
  }

  initialize() {
    this.isOpen =
    this.config.initialState && !this.config.initialState === 'open';
    this.trigger = this.elem.querySelector(this.config.toggleTrigger);
    this.triggerLess = this.elem.querySelector(this.config.toggleLessTrigger);
    this.target = this.elem.querySelector(this.config.toggleTarget);

    this.shortenText();

    // this.addEvents();
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

  shortenText () {
    const shortEl = this.elem.querySelector('.excerpt');
    const shortText = this.elem.querySelector('.excerpt').innerHTML;
    const fullText = this.elem.querySelector('.full').innerHTML;

    if (fullText.search(this.breakWord) === -1) return;

    const split = fullText.split(this.breakWord);

    shortEl.innerHTML = `${split[0]}...<span class="read-more"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg></span></p>`;
    this.trigger = this.elem.querySelector(this.config.toggleTrigger);
    setTimeout(() => this.addEvents(), 1000);
  }
}
