const wrapper = document.getElementById("tiles");

let columns = 0,
  rows = 0;
// toggled = false;

// const toggle = () => {
//   toggled = !toggled;

//   document.body.classList.toggle("toggled");
// };

// const handleOnClick = (index) => {
//   toggle();

//   anime({
//     targets: ".tile",
//     opacity: toggled ? 0 : 1,
//     delay: anime.stagger(50, {
//       grid: [columns, rows],
//       from: index,
//     }),
//   });
// };

const createTile = (index) => {
  const tile = document.createElement("div");

  tile.classList.add("tile");

  // tile.style.opacity = toggled ? 0 : 1;

  // tile.onclick = (e) => handleOnClick(index);

  return tile;
};

const createTiles = (quantity) => {
  Array.from(Array(quantity)).map((tile, index) => {
    wrapper.appendChild(createTile(index));
  });
};

const createGrid = () => {
  wrapper.innerHTML = "";

  const size = document.getElementById("tiles").clientWidth > 800 ? 100 : 50;

  columns = Math.floor(document.getElementById("tiles").clientWidth / size);
  rows = Math.floor(document.getElementById("tiles").clientHeight / size);

  wrapper.style.setProperty("--columns", columns);
  wrapper.style.setProperty("--rows", rows);

  createTiles(columns * rows);
};

console.log(document.getElementById("tiles").clientHeight);
createGrid();

window.onresize = () => createGrid();
