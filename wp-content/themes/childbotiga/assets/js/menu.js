"use strict";

const links = document.querySelectorAll(".menu a");

links.forEach((link) => {
  link.addEventListener("click", () => {
    const checkbox = document.getElementById("hamburger-toggle");
    checkbox.checked = false;
  });
});
