<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Автохимия AG-Tech - Aliance Production</title>

    <link rel="shortcut icon" href="img/favicon-light.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/fonts.css" />
  </head>
  <body>
    <div class="wrapper">
      <?php $navbar_type = "navbar_light"; include_once("./templates/navbar.php"); ?>
      <?php 
        $page_title = "Автохимия AG-Tech";
        $header_type = "header-inside_img";
        $header_page_breadcrumb = array(
          "Главная",
          "Собственные торговые марки",
          "Автохимия AG-Tech",
        );
        include('./templates/header-page.php');
        $founder_in_container = "founder_in_container";
        $founder_amount_text = 2;
        $founde_img_link = "../img/agtech-img-1.png";
        $founder_type = "_large";
        $founder_title = "Собственное производство <br> автохимия AG-Tech";
        $founder_text = array(
          "Прежде всего, начало повседневной работы по формированию позиции 
          однозначно фиксирует необходимость приоритизации разума над эмоциями. 
          Кстати, представители современных социальных резервов неоднозначны и 
          будут описаны максимально подробно.",
          "Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! 
          Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие 
          возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, 
          конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в 
          формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены 
          в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является 
          четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки 
          для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее 
          развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые 
          горизонты для поставленных обществом задач."
        );
        include('./templates/founder.php');
      ?>
      <?php include('./templates/features-slider.php');?>
      <div class="catalog-download">
        <div class="catalog-download__container container">
          <div class="catalog-download__head">
              <div class="separator"></div>
              <h2 class="catalog-download__title title title_h2">Генеральный дистрибьютор<br>премиальной автохимии
              </h2>
              <p class="catalog-download__text">
                Внезапно, активно развивающиеся страны третьего мира могут 
                быть объявлены нарушающими общечеловеческие нормы этики и морали.
              </p>
          </div>

          <?php 
            $category_user_class = "catalog-download__list";
            $category_amount = 4;
            $category_svg = array(
              "img/sprite.svg#him",
              "img/sprite.svg#car-wash",
              "img/sprite.svg#brushpaint",
              "img/sprite.svg#him",
            );
            $category_text = array(
              "Полное описание товаров",
              "Актуальные цены",
              "Лаки и краски",
              "Химические производства",
            );
            include('./templates/category-inside.php');
          ?>
          <button class="catalog-download__btn button">
            <svg class='avtohim-types__item-img'>
              <use href='img/sprite.svg#download'></use>
            </svg>
            Скачать каталог
          </button>
        </div>
        <img class="catalog-download__bg" src="img/catalog-download-bg.png" alt="">
      </div>
      <?php include('./templates/research-center.php');?>
      <?php include('./templates/procedure.php');?>
      <?php include('./templates/clients.php');?>
      <?php include('./templates/footer.php');?>
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