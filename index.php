<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aliance Production</title>

    <link rel="shortcut icon" href="img/favicon-light.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/global.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/fonts.css" />
  </head>
  <body class="front-page">
    <div class="wrapper">
    <div class="mobile-menu">
      <div class="mobile-menu__container">
          <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
              <a href="./about.php" class="mobile-menu__item-link">О компании</a>
          </li>
          <li class="mobile-menu__item">
              <a href="./contracts.php" class="mobile-menu__item-link">Контрактное производство</a>
              <ul class="mobile-menu__sublist">
              <li class="mobile-menu__sublist-item">
                  <a href="#" class="mobile-menu__sublist-link">Автомобильная химия</a>
              </li>
              <li class="mobile-menu__sublist-item">
                  <a href="#" class="mobile-menu__sublist-link">Бытовая химия</a>
              </li>
              <li class="mobile-menu__sublist-item">
                  <a href="#" class="mobile-menu__sublist-link">Дезинфицирующие средства</a>
              </li>
              <li class="mobile-menu__sublist-item">
                  <a href="#" class="mobile-menu__sublist-link">Пищевые аэрозоли</a>
              </li>
              <li class="mobile-menu__sublist-item">
                  <a href="#" class="mobile-menu__sublist-link">Косметическая продукция</a>
              </li>
              <li class="mobile-menu__sublist-item">
                  <a href="#" class="mobile-menu__sublist-link">Краски аэрозольные</a>
              </li>
              </ul>
          </li>
          <li class="mobile-menu__item">
              <a href="./trademarks.php" class="mobile-menu__item-link">Собственные марки</a>
              <ul class="mobile-menu__sublist">
              <li class="mobile-menu__sublist-item">
                  <a href="#" class="mobile-menu__sublist-link">Автохимия AG-Tech</a>
              </li>
              <li class="mobile-menu__sublist-item">
                  <a href="#" class="mobile-menu__sublist-link">Автохимия AP</a>
              </li>
              </ul>
          </li>
          <li class="mobile-menu__item">
              <a href="./news.php" class="mobile-menu__item-link">Новости</a>
          </li>
          <li class="mobile-menu__item">
              <a href="./contacts.php" class="mobile-menu__item-link">Контакты</a>
          </li>
          </ul>
          <div class="mobile-menu__contacts">
          <a href="tel:+74996861014" class="mobile-menu__phone">+7 (499) 686-10-14</a>
          <div class="mobile-menu__address">
              <svg class="icon" width="24" height="24">
              <use href="img/sprite.svg#mark"></use>
              </svg>
              <span class="mobile-menu__address-text">г. Москва, Холодильный пер. 4к1с8</span>
          </div>
          <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-menu__email">
              <svg class="icon" width="24" height="24">
              <use href="img/sprite.svg#mail"></use>
              </svg>
              <span class="mobile-menu__email-text">a.dragunov@tdaliance.ru</span>
          </a>
          <div class="mobile-menu__socials">
              <a href="#" class="mobile-menu__social-link">
              <svg class="icon" width="24" height="24">
                  <use href="img/sprite.svg#vk"></use>
              </svg>
              </a>
              <a href="#" class="mobile-menu__social-link">
              <svg class="icon" width="24" height="24">
                  <use href="img/sprite.svg#inst"></use>
              </svg>
              </a>
          </div>
          </div>
      </div>
    </div>
      <?php $navbar_type = "navbar_dark"; include_once("./templates/navbar.php"); ?>
      <header class="header">
        <div class="container header__container">
          <div class="header__content">
            <div class="separator header__separator"></div>
            <h1 class="header__content-title title title_h1">
              Комплексное обеспечение товарами и&nbsp;расходными материалами бизнеса
            </h1>
            <p class="header__content-subtitle">
              Высокий уровень вовлечения представителей целевой аудитории является четким
              доказательством простого факта: высококачественный прототип будущего проекта напрямую
              зависит от анализа существующих паттернов поведения.
            </p>
            <button class="header__content-button button" type="button" data-toggle="modal">
              Подробнее о компании
            </button>
          </div>
          <div class="swiper header__slider">
            <!-- Additional required wrapper -->
            <ul class="swiper-wrapper header__features-list">
              <!-- Slides -->
              <li class="swiper-slide header__features-item">
                <svg class="icon header__features-img" width="36" height="36">
                  <use href="img/sprite.svg#hour"></use>
                </svg>
                <p class="header__features-text">Непрерывная работа c&nbsp;2017 года</p>
              </li>
              <li class="swiper-slide header__features-item">
                <svg class="icon header__features-img" width="36" height="36">
                  <use href="img/sprite.svg#certificate"></use>
                </svg>
                <p class="header__features-text">Вся продукция сертифицирована</p>
              </li>
              <li class="swiper-slide header__features-item">
                <svg class="icon header__features-img" width="36" height="36">
                  <use href="img/sprite.svg#control"></use>
                </svg>
                <p class="header__features-text">Контроль качества на&nbsp;всех этапах</p>
              </li>
              <li class="swiper-slide header__features-item">
                <svg class="icon header__features-img" width="36" height="36">
                  <use href="img/sprite.svg#delivery"></use>
                </svg>
                <p class="header__features-text">Возможны поставки по&nbsp;всей России</p>
              </li>
              <li class="swiper-slide header__features-item">
                <svg class="icon header__features-img" width="36" height="36">
                  <use href="img/sprite.svg#speed"></use>
                </svg>
                <p class="header__features-text">Оперативное производство</p>
              </li>
            </ul>

            <!-- If we need navigation buttons -->
            <div class="header__slides-buttons">
              <div class="header__slide-button-prev">
                <svg class="header__slide-svg" width="36" height="24">
                  <use href="img/sprite.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="header__slide-button-next">
                <svg class="header__slide-svg" width="36" height="24">
                  <use href="img/sprite.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </header>
      <?php 
      include_once('./templates/procedure.php');
      $production_block_title = "Контрактное производство";
      include_once('./templates/production.php');
      $trademarks_block_title = "Собственные торговые марки";
      include_once('./templates/trademarks-block.php');
      ?>
      <section class="founder">
        <img class="founder__img" src="img/founder.jpg" alt="Founder" />
        <div class="founder__container container">
          <div class="founder__content">
            <div class="separator"></div>
            <h2 class="founder__title title title_h2">Отношение к делу и к клиентам</h2>
            <div class="founder__text-block">
              <p class="founder__text">
                Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика
                показывает, что укрепление и развитие внутренней структуры говорит о возможностях
                соответствующих условий активизации. Внезапно, независимые государства, которые
                представляют собой яркий пример континентально-европейского типа политической
                культуры, будут подвергнуты целой серии независимых исследований. С учётом
                сложившейся международной обстановки, синтетическое тестирование выявляет срочную
                потребность системы массового участия.
              </p>
              <p class="founder__text">
                А ещё действия представителей оппозиции, превозмогая сложившуюся непростую
                экономическую ситуацию, в равной степени предоставлены сами себе. Не следует,
                однако, забывать, что выбранный нами инновационный путь в значительной степени
                обусловливает важность дальнейших направлений развития.
              </p>
            </div>
            <a href="#" class="founder__button-link button-link">Подробнее о компании</a>
          </div>
        </div>
      </section>
      <?php include_once('./templates/clients.php');?>
      <section class="blog">
        <div class="blog__container container">
          <div class="separator"></div>
          <h2 class="blog__title title title_h2">Блог экспертов в области производства</h2>
          <div class="swiper blog__slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper blog__wrapper">
              <!-- Slides -->
              <a href="#" class="swiper-slide blog__slide">
                <img src="img/blog/blog-photo-1.png" alt="blog-photo" class="blog__slide-img" />
                <h3 class="blog__slide-title title title_h3">
                  Современная методология разработки одухотворила всех причастных
                </h3>
                <p class="blog__slide-text">
                  Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
                  ситуацию, в равной степени предоставлены...
                </p>
              </a>
              <a href="#" class="swiper-slide blog__slide">
                <img src="img/blog/blog-photo-2.png" alt="blog-photo" class="blog__slide-img" />
                <h3 class="blog__slide-title title title_h3">
                  Сложно сказать, почему жизнь прекрасна
                </h3>
                <p class="blog__slide-text">
                  Сложно сказать, почему элементы политического процесса функционально разнесены на
                  независимые элементы. Безусловно, высокотехнологичная...
                </p>
              </a>
              <a href="#" class="swiper-slide blog__slide">
                <img src="img/blog/blog-photo-1.png" alt="blog-photo" class="blog__slide-img" />
                <h3 class="blog__slide-title title title_h3">
                  Современная методология разработки одухотворила всех причастных
                </h3>
                <p class="blog__slide-text">
                  Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
                  ситуацию, в равной степени предоставлены...
                </p>
              </a>
            </div>

            <div class="blog__bottom">
              <div class="blog__bottom-block-link">
                <a href="/blog.php" class="blog__bottom-link button-link">Весь блог</a>
              </div>
              <div class="blog__slides-buttons slide-buttons_primary">
                <button class="blog__slide-button-prev slide-button-prev_primary" type="button">
                  <svg class="icon" width="36" height="24">
                    <use href="img/sprite.svg#arrow-prev"></use>
                  </svg>
                </button>
                <button class="blog__slide-button-next slide-button-next_primary" type="button">
                  <svg class="icon" width="36" height="24">
                    <use href="img/sprite.svg#arrow-next"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php include('./templates/cta.php');?>
      <?php include_once('./templates/footer.php');?>
      <div class="modal">
        <div class="modal__container">
          <form action="handler.php" method="POST" class="modal__form cta__content cta-form">
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
                  class="modal__input cta__input input _req"
                  id="modal-user-name"
                  type="text"
                  name="name"
                  placeholder="Имя"
                />
                <label for="modal-user-name" class="modal__label cta__label">Имя</label>
              </div>
              <div class="modal__input-group cta__input-group">
                <input
                  class="modal__input cta__input input phone-mask _req"
                  id="modal-user-phone"
                  type="tel"
                  name="phone"
                  pattern="/^(\+7|7|8) ?\(?[0-9]{3}\)?[-| ]?[0-9]{3}[-| ]?[0-9]{2}[-| ]?[0-9]{2}$/v"
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
      <?php include_once('./templates/modal-thanks.php');?>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
