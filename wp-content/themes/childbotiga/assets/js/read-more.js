"use strict";

function readMore() {
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("readMore");
  var iconDown = document.getElementById("iconDown");
  var iconUp = document.getElementById("iconUp");

  if (moreText.style.display === "inline") {
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
    iconUp.style.display = "none";
    iconDown.style.display = "block";
  } else {
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
    iconDown.style.display = "none";
    iconUp.style.display = "block";
  }
}
