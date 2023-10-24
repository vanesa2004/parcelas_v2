// Selecciona todos los elementos "article" con la clase "parcela"
const articles = document.querySelectorAll('.parcela');

// Itera a través de cada "article"
articles.forEach(article => {
  const sliderImages = article.querySelectorAll('.slider-image');
  const sliderPopup = article.querySelector('.slider-popup');
  const closeButton = article.querySelector('.close-button');
  const prevButton = article.querySelector('.prev-button');
  const nextButton = article.querySelector('.next-button');
  const prevButtonPopup = article.querySelector('.prev-button-popup');
  const nextButtonPopup = article.querySelector('.next-button-popup');

  let currentSlideIndex = 0;

  sliderImages.forEach((image, index) => {
    image.addEventListener('click', () => {
      // Mostrar el slider emergente
      sliderPopup.style.display = 'block';

      // Mostrar la imagen seleccionada en el slider emergente
      mostrarImagen(index, sliderPopup.querySelector('.slider'));
      currentSlideIndex = index;
    });
  });

  closeButton.addEventListener('click', () => {
    // Ocultar el slider emergente cuando se hace clic en el botón Cerrar
    sliderPopup.style.display = 'none';
  });

  prevButton.addEventListener('click', () => {
    // Mostrar la imagen anterior en el slider principal
    currentSlideIndex = (currentSlideIndex - 1 + sliderImages.length) % sliderImages.length;
    mostrarImagen(currentSlideIndex, article.querySelector('.slider'));
  });

  nextButton.addEventListener('click', () => {
    // Mostrar la siguiente imagen en el slider principal
    currentSlideIndex = (currentSlideIndex + 1) % sliderImages.length;
    mostrarImagen(currentSlideIndex, article.querySelector('.slider'));
  });

  prevButtonPopup.addEventListener('click', () => {
    // Mostrar la imagen anterior en el slider emergente
    currentSlideIndex = (currentSlideIndex - 1 + sliderImages.length) % sliderImages.length;
    mostrarImagen(currentSlideIndex, sliderPopup.querySelector('.slider'));
  });

  nextButtonPopup.addEventListener('click', () => {
    // Mostrar la siguiente imagen en el slider emergente
    currentSlideIndex = (currentSlideIndex + 1) % sliderImages.length;
    mostrarImagen(currentSlideIndex, sliderPopup.querySelector('.slider'));
  });

  function mostrarImagen(index, container) {
    const slides = container.querySelectorAll('.slider-image');
    const slideWidth = slides[0].clientWidth; // Ancho de una imagen
    const totalSlides = slides.length;
  
    // Ajustar el índice para que sea un valor válido dentro del rango de imágenes
    index = (index + totalSlides) % totalSlides;
  
    container.style.transform = `translateX(-${index * slideWidth}px)`;
  }
});