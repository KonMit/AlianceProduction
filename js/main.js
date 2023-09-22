const navbar = document.querySelector(".navbar");
const mobileMenu = document.querySelector(".mobile-menu");
const navbarBurger = document.querySelector(".navbar__burger");
const isFront = document.querySelector(".front-page");

window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar_light");
  } else if (isFront) {
    navbar.classList.remove("navbar_light");
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
// ===
// === header-slider ===
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
// === header-slider ===
// ===
// === procedure-slider ===
const swiperProcedure = new Swiper(".procedure__slider", {
  speed: 400,
  slidesPerView: 1.26,
  spaceBetween: 30,
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
// === procedure-slider ===
// ===
// === blog-slider ===
const swiperBlog = new Swiper(".blog__slider", {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog__slide-button-next",
    prevEl: ".blog__slide-button-prev",
  },
  breakpoints: {
    998: {
      slidesPerView: 2,
    },
  },
});
// === blog-slider ===
// ===
// === modal scripts ===
const modal = document.querySelector(".modal");
const modalContainer = document.querySelector(".modal__container");

document.addEventListener("click", () => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (event.target === modal && modal.classList.contains("isOpen"))
  ) {
    modal.classList.toggle("isOpen");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.code === "Escape" && modal.classList.contains("isOpen")) {
    modal.classList.toggle("isOpen");
  }
});
// === modal scripts ===
