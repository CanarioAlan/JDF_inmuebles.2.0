//
const imag = document.querySelectorAll(".img-prop");

const volver = document.querySelector(".btn-izq");
const sigui = document.querySelector(".btn-der");
var index = 0;
console.log(imag);
const visual = () => imag[index].classList.add("activo");
const visualisacion = () => imag[index].classList.remove("activo");
sigui.addEventListener("click", () => {
  imag[index].classList.remove("activo");
  if (index >= imag.length - 1) {
    index = 0;
  } else {
    index++;
  }
  visual();
});
volver.addEventListener("click", () => {
  imag[index].classList.remove("activo");
  if (index <= 0) {
    index = imag.length - 1;
  } else {
    index--;
  }
  visual();
});

visual();
