const Heroimage = (_elem) => {
  if (!_elem) return;

  const elem = _elem;
  const loadedClass = 'imageIsLoaded';
  const imageURL = elem.dataset.image;

  let isLoaded = false;

  const initialize = () => {
    if (!imageURL) return;

    fetch(imageURL)
      .then(function (response) {
        return response.blob();
      })
      .then(function (myBlob) {
        const objectURL = URL.createObjectURL(myBlob);
        elem.style.backgroundImage = `url(${objectURL})`;
        setTimeout(() => {
          elem.classList.add(loadedClass);
        }, 1000);
        isLoaded = true;
      });
  };

  initialize();
};

export default Heroimage;
