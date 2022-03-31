function changeBg() {
  const num_alea = Math.floor(Math.random() * 10) + 1;
  const bg = document.getElementById("index-images");
  bg.style.backgroundImage = "url('import/homepage_images/" + num_alea + ".jpg')";
}
setInterval(changeBg, 4000);

function toggleContrib() {
  var getMenu = document.getElementById("menu-contrib");
  if (getMenu.style.left == "0px") getMenu.style.left = "calc(-210px - 10vw)";
  else getMenu.style.left = "0px";
}
function changePDF(file) {
  document.getElementById("pdf-viewer").src = file;
}
