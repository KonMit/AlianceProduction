const navbar = document.querySelector(".navbar");
const navbarLogoSvg = document.querySelector(".navbar__logo-svg use");

window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar_light");
    navbarLogoSvg.href.baseVal = "img/sprite.svg#logo-dark";
  } else {
    navbar.classList.remove("navbar_light");
    navbarLogoSvg.href.baseVal = "img/sprite.svg#logo-light";
  }
});
