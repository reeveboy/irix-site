window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > document.getElementById("canvas").clientHeight ||
    document.documentElement.scrollTop >
      document.getElementById("canvas").clientHeight
  ) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-80px";
  }
}
