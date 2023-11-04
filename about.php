<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>О компании - Aliance Production</title>

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
      $page_title = "О компании";
      $header_type = "";
      include_once('./templates/header-page.php');
      ?>
      <?php 
        $founder_title = "мы - эксперты в области производства химии";
        $founde_img_link = "img/company-img-1.png";
        $founder_amount_text = 1;
        $founder_type = "_large";
        $founder_link = "";
        $founder_in_container = "founder_in_container";
        $founder_text = array(
          "Разнообразный и богатый опыт говорит нам, 
          что перспективное планирование однозначно 
          фиксирует необходимость поставленных обществом задач!
           Есть над чем задуматься: ключевые особенности структуры 
           проекта могут быть объединены в целые кластеры себе подобных. 
           Интерактивные прототипы, которые представляют собой яркий пример 
           континентально-европейского типа политической культуры, будут описаны
            максимально подробно. Значимость этих проблем настолько очевидна, 
            что перспективное планирование 
          играет важную роль в формировании системы массового участия.",
        );
        include('./templates/founder.php');
        include('./templates/features-slider.php');
      ?>
      
      <?php
        $info_block_img_link = "./img/company-img-2.png";
        $info_block_title = "Наше производство";
        $category_amount = 6;
        $category_svg = array(
            "./img/sprite.svg#car-wash",
            "./img/sprite.svg#home-him",
            "./img/sprite.svg#shield-him",
            "./img/sprite.svg#eat-him",
            "./img/sprite.svg#cosmetic",
            "./img/sprite.svg#brush",
        );
        $category_text = array(
            "Автомобильная химия",
            "Бытовая химия",
            "Дезинфицирующие средства",
            "Пищевые аэрозоли",
            "Косметическая продукция",
            "Краски аэрозольные",
        );
        include('./templates/info-block.php'); 
      ?>
      <?php 
        $founder_title = "Отношение к делу и к клиентам";
        $founde_img_link = "img/founder.jpg ";
        $founder_amount_text = 2;
        $founder_type = "";
        $founder_in_container = "";
        $founder_link = true;
        $founder_text = array(
          "Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика
        показывает, что укрепление и развитие внутренней структуры говорит о возможностях
        соответствующих условий активизации. Внезапно, независимые государства, которые
        представляют собой яркий пример континентально-европейского типа политической
        культуры, будут подвергнуты целой серии независимых исследований. С учётом
        сложившейся международной обстановки, синтетическое тестирование выявляет срочную
        потребность системы массового участия.",
        "А ещё действия представителей оппозиции, превозмогая сложившуюся непростую
        экономическую ситуацию, в равной степени предоставлены сами себе. Не следует,
        однако, забывать, что выбранный нами инновационный путь в значительной степени
        обусловливает важность дальнейших направлений развития.",
        );
        include('./templates/founder.php');
      ?>
      <?php include_once('./templates/research-center.php');?>
      <?php include_once('./templates/clients.php');?>
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
