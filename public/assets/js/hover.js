window.onscroll = function () { myFunction() };

let header = document.getElementById("myNavContent");
let sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
  header.classList.remove("nav-content")
}
