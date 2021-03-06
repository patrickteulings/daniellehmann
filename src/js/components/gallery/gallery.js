import SwiperCore, { Navigation } from 'swiper/core';
import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';

SwiperCore.use([Navigation]);

export default class Gallery {
  // Constructor always gets called, pass initial params here
  constructor(_elem) {
    this.elem = _elem;
    this.elementsArray = this.elem.querySelectorAll('.blocks-gallery-item');
    this.imageObjects = [];
    this.galleryIsOpen = false;
    this.thumbContainer = this.elem.querySelectorAll('.blocks-gallery-grid');
    this.scrollContainer = this.elem.querySelectorAll('.wp-block-gallery');
    this.swiper = '';
    this.navPrev = '';
    this.navNext = '';
    this.initialize();
  }

  initialize() {
    this.getImages();
    this.setWrapperWidth();
    this.createNavigation();
    this.addEvents();
    this.scrollToPosition(0);
  }

  // An initializer to create a nice array of objects
  getImages() {
    this.elementsArray.forEach((item, index) => {
      const img = item.getElementsByTagName('img')[0];
      const imageObj = {
        trigger: item,
        imageURL: img.dataset.fullUrl,
      };

      this.imageObjects.push(imageObj);
    });
  }

  // Navigation entry-point
  jumpToImage(item, index) {
    if (!document.getElementById('galleryContainer')) {
      this.createGallery(index);
    } else {
      const container = document.getElementById('galleryContainer');
      container.removeAttribute('hidden');
      this.swiper.slideTo(index);

      document.body.classList.add('body-is-locked');
    }
  }

  // Create gallery HTML
  createGallery(index = 0) {
    const container = document.createElement('div');
    container.id = 'galleryContainer';
    container.className = `swiper-container gallery-container`;

    const closeButton = document.createElement('div');
    closeButton.className = 'swiper-button-close';
    closeButton.innerHTML =
      '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>';

    const next = document.createElement('div');
    next.className = 'swiper-button-next';

    const prev = document.createElement('div');
    prev.className = 'swiper-button-prev';

    const imagesWrapper = document.createElement('div');
    imagesWrapper.className = 'swiper-wrapper';

    container.appendChild(next);
    container.appendChild(prev);
    container.appendChild(closeButton);
    container.appendChild(imagesWrapper);

    document.body.appendChild(container);

    // Add Images WITHOUT actually loading them!!!!
    this.imageObjects.forEach((item) => {
      const wrapper = document.createElement('div');
      const image = document.createElement('img');

      wrapper.className = 'swiper-slide';
      wrapper.dataset.url = item.imageURL;
      wrapper.style.width = window.innerWidth + 'px';

      image.className = 'image';
      image.src = item.imageURL;

      imagesWrapper.appendChild(wrapper);
      wrapper.appendChild(image);
    });

    this.swiper = new Swiper('.swiper-container', {
      // Optional parameters
      loop: false,
      initialSlide: index,

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    document.body.classList.add('body-is-locked');

    document.addEventListener('keydown', (e) => {
      if (e.code === 'Escape') {
        this.closeGallery();
      }
    });

    closeButton.onclick = (e) => {
      this.closeGallery();
    };
  }

  // Close and remove listeners if needed
  closeGallery() {
    const container = document.getElementById('galleryContainer');
    container.setAttribute('hidden', 'true');
    this.galleryIsOpen = false;
    document.body.classList.remove('body-is-locked');
  }

  setWrapperWidth() {
    this.thumbContainer[0].style.width = `${
      this.elementsArray.length * (272 + 16)
    }px`;
  }

  // NAVIGATION CODE
  createNavigation() {
    const navContainer = this.elem.querySelector('.wp-block-gallery');
    this.navPrev = document.createElement('div');
    this.navPrev.className = 'gallery-prev';
    this.navPrev.innerHTML =
      '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>';
    this.navNext = document.createElement('div');
    this.navNext.innerHTML =
      '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>';
    this.navNext.className = 'gallery-next';

    this.elem.appendChild(this.navPrev);
    this.elem.appendChild(this.navNext);
  }

  // Click events etc
  addEvents() {
    // Open gallery on Image Click
    this.imageObjects.forEach((item, index) => {
      item.trigger.onclick = (e) => {
        this.jumpToImage(item, index);
      };
    });

    this.navPrev.onclick = (e) => {
      this.scrollToPosition(-200);
    };

    this.navNext.onclick = (e) => {
      this.scrollToPosition(+200);
    };
  }

  scrollToPosition(difference) {
    let currentScroll = this.scrollContainer[0].scrollLeft;
    currentScroll += difference;

    let containerWidth = this.scrollContainer[0].offsetWidth;

    this.scrollContainer[0].scroll({
      top: 0, // could be negative value
      left: currentScroll,
      behavior: 'smooth',
    });

    console.log(
      this.thumbContainer[0].clientWidth,
      containerWidth,
      currentScroll
    );

    this.navPrev.style.opacity = currentScroll <= 0 ? '0.4' : '1';
    this.navNext.style.opacity =
      this.thumbContainer[0].clientWidth < containerWidth + currentScroll - 200
        ? '0.4'
        : '1';
  }
}
