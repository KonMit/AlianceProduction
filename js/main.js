const navbar = document.querySelector(".navbar");
const navbarLogoSvg = document.querySelector(".navbar__logo-svg use");
const mobileMenu = document.querySelector(".mobile-menu");
const navbarBurger = document.querySelector(".navbar__burger");

window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar_light");
    navbarLogoSvg.href.baseVal = "img/sprite.svg#logo-dark";
  } else {
    navbar.classList.remove("navbar_light");
    navbarLogoSvg.href.baseVal = "img/sprite.svg#logo-light";
  }
});

navbarBurger.addEventListener("click", () => {
  if (!mobileMenu.classList.contains("isOpen")) {
    navbar.classList.add("navbar_light");
    navbar.classList.add("isOpen");
    navbarLogoSvg.href.baseVal = "img/sprite.svg#logo-dark";
    mobileMenu.classList.add("isOpen");
    document.body.style.overflow = "hidden";
  } else {
    mobileMenu.classList.remove("isOpen");
    navbar.classList.remove("navbar_light");
    navbar.classList.remove("isOpen");
    navbarLogoSvg.href.baseVal = "img/sprite.svg#logo-light";
    document.body.style.overflow = "visible";
  }
});
