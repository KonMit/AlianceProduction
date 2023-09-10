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

navbarBurger.addEventListener("click", (e) => {
  e.preventDefault();
  if (!mobileMenu.classList.contains("isOpen")) {
    navbar.classList.add("navbar_light");
    navbar.classList.add("isOpen");
    navbarLogoSvg.href.baseVal = "img/sprite.svg#logo-dark";
    mobileMenu.classList.add("isOpen");
    document.body.style.overflow = "hidden";
  } else {
    if (this.scrollY > 1) {
      mobileMenu.classList.remove("isOpen");
      navbar.classList.remove("isOpen");
      document.body.style.overflow = "visible";
    } else {
      mobileMenu.classList.remove("isOpen");
      navbar.classList.remove("navbar_light");
      navbar.classList.remove("isOpen");
      navbarLogoSvg.href.baseVal = "img/sprite.svg#logo-light";
      document.body.style.overflow = "visible";
    }
  }
});

const swiper = new Swiper(".header__slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".header__slide-button-next",
    prevEl: ".header__slide-button-prev",
  },
  breakpoints: {
    370: {
      slidesPerView: 2,
    },
    640: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    },
  },
});

const swiperProcedure = new Swiper(".procedure__slider", {
  speed: 400,
  slidesPerView: 1.18,
  navigation: {
    nextEl: ".procedure__slide-button-next",
    prevEl: ".procedure__slide-button-prev",
  },
  breakpoints: {
    560: {
      slidesPerView: 2,
    },
    750: {
      slidesPerView: 3,
    },
    1000: {
      slidesPerView: 4,
    },
  },
});
