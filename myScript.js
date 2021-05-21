var index = 1;
buyukfoto(index);

function butonhareket(n) {
  buyukfoto(index += n);
}

function fotogecisleri(n) {
  buyukfoto(index = n);
}

function buyukfoto(n) {
  var i;
  var galeri = document.getElementsByClassName("galeri");
  var kucukefekt = document.getElementsByClassName("kucukefekt");
  var altyazi = document.getElementById("altyazi");
  if (n > galeri.length) {index = 1}
  if (n < 1) {index = galeri.length}
  for (i = 0; i < galeri.length; i++) {
      galeri[i].style.display = "none";
  }
  for (i = 0; i < kucukefekt.length; i++) {
      kucukefekt[i].className = kucukefekt[i].className.replace(" active", "");
  }
  galeri[index-1].style.display = "block";
  kucukefekt[index-1].className += " active";
  altyazi.innerHTML = kucukefekt[index-1].alt;
}