"use strict";

const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
let currentSlide = 0;

// Reset all slides and dots
const reset = () => {
  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
    dots[i].classList.remove("active");
  }
};

// Show the current slide and dot
const showSlide = () => {
  reset();
  slides[currentSlide].classList.add("active");
  dots[currentSlide].classList.add("active");
};

// Next slide
const nextSlide = () => {
  currentSlide++;
  if (currentSlide > slides.length - 1) {
    currentSlide = 0;
  }
  showSlide();
};

// Previous slide
const prevSlide = () => {
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  }
  showSlide();
};

// Click on a dot
dots.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    currentSlide = index;
    showSlide();
  });
});

// Automatic slide change
setInterval(() => {
  nextSlide();
}, 8000);
