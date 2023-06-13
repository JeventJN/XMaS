const carousel = document.querySelector('.carousel');
const carouselItems = document.querySelector('.carousel-items');
const carouselItemWidth = carouselItems.querySelector('.carousel-item').clientWidth;

let startX = 0;
let currentTranslateX = 0;
let previousTranslateX = 0;
let isDragging = false;

carouselItems.addEventListener('mousedown', dragStart);
carouselItems.addEventListener('touchstart', dragStart);
document.addEventListener('mousemove', drag);
document.addEventListener('touchmove', drag);
document.addEventListener('mouseup', dragEnd);
document.addEventListener('touchend', dragEnd);
document.addEventListener('mouseleave', dragEnd);

function dragStart(event) {
  if (event.type === 'touchstart') {
    startX = event.touches[0].clientX;
  } else {
    startX = event.clientX;
  }

  isDragging = true;

  // Add CSS transition when dragging starts
  carouselItems.style.transition = '';
}

function drag(event) {
  if (isDragging) {
    let currentX = 0;

    if (event.type === 'touchmove') {
      currentX = event.touches[0].clientX;
    } else {
      currentX = event.clientX;
    }

    const dragDistance = currentX - startX;
    currentTranslateX = previousTranslateX + dragDistance;

    // Limit scrolling within the bounds of the carousel
    const minTranslateX = -(carouselItems.offsetWidth - carousel.offsetWidth);
    const maxTranslateX = 0;
    currentTranslateX = Math.max(Math.min(currentTranslateX, maxTranslateX), minTranslateX);

    carouselItems.style.transform = `translateX(${currentTranslateX}px)`;
  }
}

function dragEnd() {
  if (isDragging) {
    isDragging = false;

    // Calculate the nearest snap position
    const snapPosition = Math.round(currentTranslateX / carouselItemWidth) * carouselItemWidth;

    // Add CSS transition when dragging ends
    // carouselItems.style.transition = 'transform 0.3s ease';
    carouselItems.style.transform = `translateX(${snapPosition}px)`;
    previousTranslateX = snapPosition;
  }
}

