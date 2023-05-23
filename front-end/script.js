const slider = document.querySelector('.slider');
const slides = slider.querySelectorAll('.slide');
const dotsContainer = slider.querySelector('.dots');
let currentIndex = 0;

function showSlide(index) {
  const slideWidth = slides[0].offsetWidth;
  const offset = -index * slideWidth;
  slider.querySelector('.slides').style.transform = `translateX(${offset}px)`;
}

function createDots() {
  slides.forEach((slide, index) => {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    dot.addEventListener('click', () => {
      currentIndex = index;
      showSlide(currentIndex);
      updateActiveDot();
    });
    dotsContainer.appendChild(dot);
  });
}

function updateActiveDot() {
  const dots = dotsContainer.querySelectorAll('.dot');
  dots.forEach((dot, index) => {
    dot.classList.toggle('active', index === currentIndex);
  });
}

function autoSlide() {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
  updateActiveDot();
}

createDots();
showSlide(currentIndex);
updateActiveDot();
setTimeout(autoSlide, 5000); // Display each slide for 10 seconds
setInterval(autoSlide, 5000); // Auto slide every 8 seconds
