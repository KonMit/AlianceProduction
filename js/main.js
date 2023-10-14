const navbar = document.querySelector(".navbar");
const mobileMenu = document.querySelector(".mobile-menu");
const navbarBurger = document.querySelector(".navbar__burger");
const isFront = document.querySelector(".front-page");

const ctaForm = document.querySelectorAll(".cta-form");
const validateRegNumber =
  /^(\+7|7|8) ?\(?[0-9]{3}\)?[-| ]?[0-9]{3}[-| ]?[0-9]{2}[-| ]?[0-9]{2}$/;
const nameLength = 50;
document.addEventListener("DOMContentLoaded", () => {
  // === Отключение стандартной отправки формы ===
  ctaForm.forEach((form) => {
    form.addEventListener("submit", (event) => {
      event.preventDefault();
      const inputsForm = form.querySelectorAll("input");

      inputsForm.forEach((input) => {
        input.addEventListener("input", (event) => {
          event.target.parentElement.classList.remove("isInvalid");
          event.target.classList.remove("isInvalid");

          const labelError =
            event.target.parentElement.querySelector(".cta__label_error");
          if (labelError) {
            labelError.remove();
          }
        });
      });

      if (!formValidate(form)) {
        console.log("Запрос не может быть отправлен!");
      } else {
        sendForm(form);
      }
    });
  });
});

//=== Проверка валидности формы ===
function formValidate(form) {
  const inputsFormReq = form.querySelectorAll("._req");
  let error = 0;
  let errorCheck = false;

  inputsFormReq.forEach((input) => {
    input.classList.remove("isInvalid");

    if (input.hasAttribute("name") && input.getAttribute("name")) {
      inputAttributeValue = input.getAttribute("name");
      if (inputAttributeValue === "phone") {
        const phoneChek = validateRegNumber.test(input.value);
        if (!phoneChek) {
          addLabelError(input);
          input.parentElement.classList.add("isInvalid");
          input.classList.add("isInvalid");
          error++;
        }
      } else if (inputAttributeValue === "name") {
        if (input.value === "") {
          addLabelError(input);
          input.parentElement.classList.add("isInvalid");
          input.classList.add("isInvalid");
          error++;
        } else if (input.value.split("").length > nameLength) {
          addLabelError(input);
          input.parentElement.classList.add("isInvalid");
          input.classList.add("isInvalid");
          error++;
        }
      }
    } else {
      console.log("Аттрибута нет");
    }
  });

  const inputsFormInvalid = form.querySelectorAll("input.isInvalid");
  if (inputsFormInvalid.length != 0) {
    inputsFormInvalid[0].focus();
  }

  if (error > 0) {
    errorCheck = false;
  } else {
    errorCheck = true;
  }
  return errorCheck;
}
//=== Добавление label с ошибкой ===
function addLabelError(input) {
  input.parentElement.insertAdjacentHTML(
    "afterbegin",
    '<label for="username" class="cta__label cta__label_error">Введите корректное значение</label>'
  );
}

//=== Отправка формы ===
function sendForm(form) {
  let formData = new FormData(form);
  fetch(form.getAttribute("action"), {
    method: form.getAttribute("method"),
    body: formData,
  }).then((response) => {
    if (response.ok) {
      // alert("Форма отправлена");
    } else {
      alert(response.statusText);
    }
  });
}

window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar_light");
    navbar.classList.add("isScroll");
    navbar.style.height = "4.625rem";
  } else {
    navbar.classList.remove("isScroll");
    navbar.style.height = "5.875rem";
    if (isFront) {
      navbar.classList.remove("navbar_light");
    }
  }
});
navbarBurger.addEventListener("click", (e) => {
  e.preventDefault();
  if (!mobileMenu.classList.contains("isOpen")) {
    navbar.classList.add("navbar_light");
    navbar.classList.add("isOpen");
    mobileMenu.classList.add("isOpen");
    document.body.style.overflow = "hidden";
  } else {
    if (this.scrollY > 1) {
      mobileMenu.classList.remove("isOpen");
      navbar.classList.remove("isOpen");
      document.body.style.overflow = "visible";
    } else {
      mobileMenu.classList.remove("isOpen");
      navbar.classList.remove("isOpen");
      document.body.style.overflow = "visible";
      if (isFront) {
        navbar.classList.remove("navbar_light");
      }
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
document.addEventListener("click", (event) => {
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
// ===
