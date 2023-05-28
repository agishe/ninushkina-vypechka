btnUp.onclick = function () {
  window.scrollTo(pageXOffset, 0);
};

window.addEventListener("scroll", function () {
  btnUp.hidden = pageYOffset < document.documentElement.clientHeight;
});
