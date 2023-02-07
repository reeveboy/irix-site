const wrapper = document.getElementById("tiles");

let columns = 0,
  rows = 0;

const createTile = (index) => {
  const tile = document.createElement("div");

  tile.classList.add("tile");

  return tile;
};

const createTiles = (quantity) => {
  Array.from(Array(quantity)).map((tile, index) => {
    wrapper.appendChild(createTile(index));
  });
};

const createGrid = () => {
  wrapper.innerHTML = "";
  wrapper.style.height = document.getElementById("next").clientHeight + "px";

  const size = document.getElementById("tiles").clientWidth > 800 ? 50 : 50;

  columns = Math.floor(document.getElementById("tiles").clientWidth / size);
  rows = Math.floor(document.getElementById("tiles").clientHeight / size);

  wrapper.style.setProperty("--columns", columns);
  wrapper.style.setProperty("--rows", rows);
  createTiles(columns * rows);
};

createGrid();

window.onresize = () => createGrid();
