const navbar = document.querySelector(".navbar");
const mobileMenu = document.querySelector(".mobile-menu");
const navbarBurger = document.querySelector(".navbar__burger");
const isFront = document.querySelector(".front-page");

const ctaForm = document.querySelectorAll(".cta-form");
const modal = document.querySelector(".modal");
const thanksModal = document.querySelector(".modal-thanks");

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
        sendForm(form, thanksModal);
      }
    });
  });
});

//=== Проверка валидности формы ===
const validateRegNumber =
  /^(\+7|7|8) ?\(?[0-9]{3}\)?[-| ]?[0-9]{3}[-| ]?[0-9]{2}[-| ]?[0-9]{2}$/;
const nameLength = 50;

function formValidate(form) {
  const inputsFormReq = form.querySelectorAll("._req"); // получаем все инпуты, которые нужно проверять
  // переменная для количества ошибок
  let error = 0;
  // переменная для сохранения статуса проверки
  let errorCheck = false;

  // перебираем все инпуты
  inputsFormReq.forEach((input) => {
    input.classList.remove("isInvalid"); // убираем статус не валидности, чтобы обнулить проверку и вернуть стили в исходное состояние

    // проверяем есть аттрибут name и пустой ли он
    if (input.hasAttribute("name") && input.getAttribute("name")) {
      //Если инпут не пустой получаем значени аттрибута name
      inputAttributeValue = input.getAttribute("name");
      // Проверяем значения поля name, чтобы понять какое поле сейчас проходит валидацию
      if (inputAttributeValue === "phone") {
        // Проверяем для телефона, проходит ли он по маске
        const phoneChek = validateRegNumber.test(input.value);
        // Если phoneChek = false, то добавляем статус isInvalid инпуту, выводим label с указанием и увеличиваем счетчик ошибок на единицу
        if (!phoneChek) {
          addLabelError(input);
          input.parentElement.classList.add("isInvalid");
          input.classList.add("isInvalid");
          error++;
        }
      } else if (inputAttributeValue === "name") {
        // Проверяем для имени пустое ли значение
        if (input.value === "") {
          // Если пустое, то добавляем статус isInvalid инпуту, выводим label с указанием и увеличиваем счетчик ошибок на единицу
          addLabelError(input);
          input.parentElement.classList.add("isInvalid");
          input.classList.add("isInvalid");
          error++;
          // Если не пустое, то проверяем не больше ли оно необходимой длинны
        } else if (input.value.split("").length > nameLength) {
          // Если больше, то добавляем статус isInvalid инпуту, выводим label с указанием и увеличиваем счетчик ошибок на единицу
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

  // Получаем массив всех не валидных инпутов
  const inputsFormInvalid = form.querySelectorAll("input.isInvalid");
  // Проверяем, заполнен ли этот массив и если да, то фокусируем на первом элементе(инпуте)
  if (inputsFormInvalid.length != 0) {
    inputsFormInvalid[0].focus();
  }

  // Проверяем счетчик ошибок
  if (error > 0) {
    errorCheck = false;
  } else {
    errorCheck = true;
  }
  // Возвращаем результат выполнения функции
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
function sendForm(form, thanks) {
  let formData = new FormData(form);
  fetch(form.getAttribute("action"), {
    method: form.getAttribute("method"),
    body: formData,
  }).then((response) => {
    if (response.ok) {
      form.reset();
      thanks.classList.add("isOpen");
      modal.classList.remove("isOpen");
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
// === features-slider ===
const featuresSlider = new Swiper(".features-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".features-slider__button-next",
    prevEl: ".features-slider__button-prev",
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
const researchSlider = new Swiper(".research-center__slider", {
  speed: 1000,
  loop: true,
  centeredSlides: false,
  spaceBetween: 30,
  slidesPerView: 2,
  navigation: {
    nextEl: ".research-center__slide-button-next",
    prevEl: ".research-center__slide-button-prev",
  },
});
// === features-slider ===
// ===
// === modal scripts ===
const modalContainer = document.querySelector(".modal__container");
document.addEventListener("click", (event) => {
  if (
    // переключение модального окна c формой заявки
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (event.target === modal && modal.classList.contains("isOpen"))
  ) {
    modal.classList.toggle("isOpen");
  } else if (
    // переключение модального окна после заявки
    event.target.dataset.toggle == "modal-thanks" ||
    event.target.parentNode.dataset.toggle == "modal-thanks" ||
    (event.target === thanksModal && thanksModal.classList.contains("isOpen"))
  ) {
    thanksModal.classList.toggle("isOpen");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.code === "Escape" && modal.classList.contains("isOpen")) {
    modal.classList.toggle("isOpen");
  }
});
// === modal scripts ===
// ===

//=== phone-mask ===
/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});
// ===
