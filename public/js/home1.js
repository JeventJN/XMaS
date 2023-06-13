const carousel1 = document.querySelector('.carousel1');
const carouselItems1 = document.querySelector('.carousel1-items');
const carouselItemWidth1 = carouselItems1.querySelector('.carousel1-item').clientWidth;

let startX1 = 0;
let currentTranslateX1 = 0;
let previousTranslateX1 = 0;
let isDragging1 = false;

carouselItems1.addEventListener('mousedown', dragStart1);
carouselItems1.addEventListener('touchstart', dragStart1);
document.addEventListener('mousemove', drag1);
document.addEventListener('touchmove', drag1);
document.addEventListener('mouseup', dragEnd1);
document.addEventListener('touchend', dragEnd1);
document.addEventListener('mouseleave', dragEnd1);

function dragStart1(event) {
  if (event.type === 'touchstart') {
    startX1 = event.touches[0].clientX;
  } else {
    startX1 = event.clientX;
  }

  isDragging1 = true;

  // Add CSS transition when dragging starts
  carouselItems1.style.transition = '';
}

function drag1(event) {
  if (isDragging1) {
    let currentX1 = 0;

    if (event.type === 'touchmove') {
      currentX1 = event.touches[0].clientX;
    } else {
      currentX1 = event.clientX;
    }

    const dragDistance1 = currentX1 - startX1;
    currentTranslateX1 = previousTranslateX1 + dragDistance1;

    // Limit scrolling within the bounds of the carousel
    const minTranslateX1 = -(carouselItems1.offsetWidth - carousel1.offsetWidth);
    const maxTranslateX1 = 0;
    currentTranslateX1 = Math.max(Math.min(currentTranslateX1, maxTranslateX1), minTranslateX1);

    carouselItems1.style.transform = `translateX(${currentTranslateX1}px)`;
  }
}

function dragEnd1() {
  if (isDragging1) {
    isDragging1 = false;

    // Calculate the nearest snap position
    const snapPosition1 = Math.round(currentTranslateX1 / carouselItemWidth1) * carouselItemWidth1;

    // Add CSS transition when dragging ends
    // carouselItems1.style.transition = 'transform 0.3s ease';
    carouselItems1.style.transform = `translateX(${snapPosition1}px)`;
    previousTranslateX1 = snapPosition1;
  }
}
