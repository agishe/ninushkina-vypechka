btnUp.onclick = function () {
  window.scrollTo(scrollX, 0);
};

window.addEventListener("scroll", function () {
  btnUp.hidden = scrollY < document.documentElement.clientHeight;
});
