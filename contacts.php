<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Контакты - Aliance Production</title>

    <link rel="shortcut icon" href="img/favicon-light.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fonts.css" />
  </head>
  <body>
    <div class="wrapper">
      <?php $navbar_type = "navbar_light"; include_once("./templates/navbar.php"); ?>
      <?php 
      $page_title = "Контакты";
      include_once('./templates/header-page.php');
      ?>
      <?php include('./templates/cta.php');?>
      <?php include_once('./templates/footer.php');?>
    </div>
    <div class="modal">
      <div class="modal__container">
        <form action="#" class="modal__form cta__content">
          <div class="modal__top">
            <h2 class="modal__title cta__title title title_h2">Есть вопросы?</h2>
            <button class="modal__close-btn" type="button" data-toggle="modal">
              <svg class="modal__close-svg" width="24" height="24">
                <use href="img/sprite.svg#close"></use>
              </svg>
            </button>
          </div>
          <p class="modal__description cta__description">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!
          </p>
          <div class="modal__inputs cta__inputs">
            <div class="modal__input-group cta__input-group">
              <input
                class="modal__input cta__input input"
                id="modal-user-name"
                type="text"
                placeholder="Имя"
              />
              <label for="modal-user-name" class="modal__label cta__label">Имя</label>
            </div>
            <div class="modal__input-group cta__input-group">
              <input
                class="modal__input cta__input input"
                id="modal-user-phone"
                type="text"
                placeholder="Номер телефона"
              />
              <label for="modal-user-phone" class="modal__label cta__label">Номер телефона</label>
            </div>
          </div>
          <div class="modal__button-group cta__button-group">
            <button class="button modal__button cta__button" type="submit">Отправить заявку</button>
            <div class="modal__notify-group cta__notify-group">
              <svg class="modal__notify-img cta__notify-img" width="14" height="14">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p class="modal__notify-text cta__notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>