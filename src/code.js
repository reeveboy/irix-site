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

function gototop() {
  document
    .getElementById("canvas")
    .scrollIntoView({ behavior: "smooth", block: "start" });
}

function gotorules() {
  document
    .getElementById("general-rules")
    .scrollIntoView({ behavior: "smooth", block: "start" });
}

function gotoevents() {
  document
    .getElementById("events")
    .scrollIntoView({ behavior: "smooth", block: "start" });
}

function gotoschedule() {
  document
    .getElementById("schedule")
    .scrollIntoView({ behavior: "smooth", block: "start" });
}

// document.onreadystatechange = function () {
//   if (document.readyState !== "complete") {
//     document.querySelector("body").style.visibility = "hidden";
//     document.querySelector("#loader").style.visibility = "visible";
//   } else {
//     document.querySelector("#loader").style.display = "none";
//     document.querySelector("body").style.visibility = "visible";
//   }
// };
