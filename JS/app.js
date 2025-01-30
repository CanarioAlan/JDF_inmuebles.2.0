import Swiper from "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js";
const carouselInner = document.querySelector(".carousel-inner");
const prevButton = document.querySelector(".prev");
const nextButton = document.querySelector(".next");
const restartButton = document.querySelector(".restart");
let currentIndex = 0;

prevButton.addEventListener("click", () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateCarousel();
  }
});

nextButton.addEventListener("click", () => {
  if (currentIndex < carouselInner.children.length - 1) {
    currentIndex++;
    updateCarousel();
  } else {
    nextButton.style.display = "none";
    restartButton.style.display = "block";
  }
});

restartButton.addEventListener("click", () => {
  currentIndex = 0;
  updateCarousel();
  nextButton.style.display = "block";
  restartButton.style.display = "none";
});

function updateCarousel() {
  const offset = -currentIndex * 350; // Adjust this value based on the width of your carousel items
  carouselInner.style.transform = `translateX(${offset}px)`;
}

const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  autoplay: {
    deley: 2000,
  },
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  //   And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});
