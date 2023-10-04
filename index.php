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

    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fonts.css" />
  </head>
  <body class="front-page">
    <div class="wrapper">
      <div class="mobile-menu">
        <div class="mobile-menu__container">
          <ul class="mobile-menu__list">
            <li class="mobile-menu__item">
              <a href="/about.html" class="mobile-menu__item-link">О компании</a>
            </li>
            <li class="mobile-menu__item">
              <a href="#" class="mobile-menu__item-link">Контрактное производство</a>
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
              <a href="#" class="mobile-menu__item-link">Собственные марки</a>
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
              <a href="#" class="mobile-menu__item-link">Новости</a>
            </li>
            <li class="mobile-menu__item">
              <a href="#" class="mobile-menu__item-link">Контакты</a>
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
      <nav class="navbar">
        <a href="#" class="navbar__burger">
          <div class="navbar__burger-lines">
            <div class="navbar__burger-line"></div>
            <div class="navbar__burger-line"></div>
            <div class="navbar__burger-line"></div>
          </div>
          <span class="navbar__burger-title title title_h3">Меню</span>
        </a>
        <a href="/" class="navbar__logo logo-light">
          <svg class="icon navbar__logo-svg">
            <use href="img/sprite.svg#logo-light"></use>
          </svg>
        </a>
        <a href="/" class="navbar__logo logo-dark">
          <svg class="icon navbar__logo-svg">
            <use href="img/sprite.svg#logo-dark"></use>
          </svg>
        </a>
        <ul class="navbar__list">
          <li class="navbar__item">
            <a href="/about.html" class="navbar__link">О компании</a>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">Контрактное производство</a>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">Собственные торговые марки</a>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">Новости</a>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">Контакты</a>
          </li>
        </ul>
        <div class="navbar__right">
          <a href="tel:+74996861014" class="navbar__phone">
            <svg class="icon navbar__phone-icon" width="24" height="24">
              <use href="img/sprite.svg#phone"></use>
            </svg>
            <span class="navbar__phone-text">+7 (499) 686-10-14</span>
          </a>
          <button class="navbar__button button" type="button" data-toggle="modal">
            <span class="navbar__button-text">Получить консультацию</span>
            <svg class="icon navbar__button-icon" width="24" height="24">
              <use href="img/sprite.svg#phone-light"></use>
            </svg>
          </button>
        </div>
      </nav>
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
                <svg class="icon" width="36" height="24">
                  <use href="img/sprite.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="header__slide-button-next">
                <svg class="icon" width="36" height="24">
                  <use href="img/sprite.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section class="procedure container">
        <div class="separator"></div>
        <h2 class="procedure__title title title_h2">Схема работы</h2>
        <div class="swiper procedure__slider">
          <!-- Additional required wrapper -->
          <ol class="swiper-wrapper procedure__list steps">
            <!-- Slides -->
            <li class="swiper-slide steps__item">
              <span class="steps__num">01</span>
              <h3 class="steps__title title title_h3">Знакомство</h3>
              <p class="steps__text">
                Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
                воздействия.
              </p>
              <a href="#" class="steps__item-link button-link">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps__item">
              <span class="steps__num">02</span>
              <h3 class="steps__title title title_h3">Заключение договора</h3>
              <p class="steps__text">Лишь интерактивные прототипы призваны к ответу.</p>
            </li>
            <li class="swiper-slide steps__item">
              <span class="steps__num">03</span>
              <h3 class="steps__title title title_h3">Производство</h3>
              <p class="steps__text">
                А также стремящиеся вытеснить традиционное производство, нанотехнологии
                функционально разнесены на независимые элементы.
              </p>
            </li>
            <li class="swiper-slide steps__item">
              <span class="steps__num">04</span>
              <h3 class="steps__title title title_h3">Доставка</h3>
              <p class="steps__text">
                В частности, экономическая повестка сегодняшнего дня говорит о возможностях
                приоритизации разума над эмоциями.
              </p>
            </li>
          </ol>

          <!-- If we need navigation buttons -->
          <div class="procedure__slides-buttons">
            <button class="procedure__slide-button-prev slide-button-prev_primary" type="button">
              <svg class="icon" width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </button>
            <button class="procedure__slide-button-next slide-button-next_primary" type="button">
              <svg class="icon" width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </button>
          </div>
        </div>
      </section>
      <section class="production">
        <div class="production__container container">
          <div class="separator"></div>
          <h2 class="production__title title title_h2">Контрактное производство</h2>
          <div class="production__cards">
            <a href="" class="production__card">
              <div class="production__content">
                <h3 class="production__card-title title title_h3">Автомобильная химия</h3>
                <p class="production__text">
                  Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
                  воздействия.
                </p>
              </div>
              <img src="img/avto-him.png" alt="Автомобильная химия" class="production__image" />
            </a>
            <a href="" class="production__card">
              <div class="production__content">
                <h3 class="production__card-title title title_h3">Бытовая химия</h3>
                <p class="production__text">
                  А также стремящиеся вытеснить традиционное производство, нанотехнологии
                  функционально разнесены на независимые элементы.
                </p>
              </div>
              <img src="img/bit-him.png" alt="Бытовая химия" class="production__image" />
            </a>
            <a href="" class="production__card">
              <div class="production__content">
                <h3 class="production__card-title title title_h3">Дезинфицирующие средства</h3>
                <p class="production__text">Лишь интерактивные прототипы призваны к ответу.</p>
              </div>
              <img
                src="img/dezinfect.png"
                alt="Дезинфицирующие средства"
                class="production__image"
              />
            </a>
            <a href="" class="production__card">
              <div class="production__content">
                <h3 class="production__card-title title title_h3">Пищевые аэрозоли</h3>
                <p class="production__text">
                  Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
                  воздействия.
                </p>
              </div>
              <img src="img/dezinfect.png" alt="Пищевые аэрозоли" class="production__image" />
            </a>
            <a href="" class="production__card">
              <div class="production__content">
                <h3 class="production__card-title title title_h3">Косметическая продукция</h3>
                <p class="production__text">Лишь интерактивные прототипы призваны к ответу.</p>
              </div>
              <img src="img/avto-him.png" alt="Косметическая продукция" class="production__image" />
            </a>
            <a href="" class="production__card">
              <div class="production__content">
                <h3 class="production__card-title title title_h3">Краски аэрозольные</h3>
                <p class="production__text">
                  А также стремящиеся вытеснить традиционное производство, нанотехнологии
                  функционально разнесены на независимые элементы.
                </p>
              </div>
              <img src="img/bit-him.png" alt="Краски аэрозольные" class="production__image" />
            </a>
          </div>
        </div>
      </section>
      <section class="mark">
        <div class="mark__container container">
          <div class="separator"></div>
          <h2 class="mark__title title title_h2">Cобственные торговые марки</h2>
          <div class="mark__list">
            <a href="#" class="mark__item">
              <svg class="icon mark__svg">
                <use href="img/sprite.svg#ag-tech"></use>
              </svg>
              <h3 class="mark__list-title title title_h3">Автохимия AG&#8209;Tech</h3>
              <p class="mark__text">
                Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление
                создаёт предпосылки для поставленных обществом задач.
              </p>
            </a>
            <a href="#" class="mark__item">
              <svg class="icon mark__svg">
                <use href="img/sprite.svg#aliance-production"></use>
              </svg>
              <h3 class="mark__list-title title title_h3">Автохимия AP</h3>
              <p class="mark__text">
                Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление
                создаёт предпосылки для поставленных обществом задач.
              </p>
            </a>
          </div>
        </div>
      </section>
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
      <section class="clients">
        <div class="clients__container container">
          <div class="separator"></div>
          <div class="clients__wrapper">
            <div class="clients__category">
              <h2 class="clients__title title title_h2">
                Производим аэрозольную продукцию для разных сфер
              </h2>
              <div class="clients__category-list">
                <div class="clients__category-item">
                  <svg class="icon clients__category-item-img">
                    <use href="img/sprite.svg#him"></use>
                  </svg>
                  <p class="clients__category-item-text">Химические производства</p>
                  <!-- /.clients__category-item-text -->
                </div>
                <!-- /.clients__category-item -->
                <div class="clients__category-item">
                  <svg class="icon clients__category-item-img">
                    <use href="img/sprite.svg#car-wash"></use>
                  </svg>
                  <p class="clients__category-item-text">Автомойки</p>
                  <!-- /.clients__category-item-text -->
                </div>
                <!-- /.clients__category-item -->
                <div class="clients__category-item">
                  <svg class="icon clients__category-item-img">
                    <use href="img/sprite.svg#eat"></use>
                  </svg>
                  <p class="clients__category-item-text">Пищевая продукция</p>
                  <!-- /.clients__category-item-text -->
                </div>
                <!-- /.clients__category-item -->
                <div class="clients__category-item">
                  <svg class="icon clients__category-item-img">
                    <use href="img/sprite.svg#brush"></use>
                  </svg>
                  <p class="clients__category-item-text">Лаки и краски</p>
                  <!-- /.clients__category-item-text -->
                </div>
                <!-- /.clients__category-item -->
                <div class="clients__category-item">
                  <svg class="icon clients__category-item-img">
                    <use href="img/sprite.svg#cosmetic"></use>
                  </svg>
                  <p class="clients__category-item-text">Косметические средства</p>
                  <!-- /.clients__category-item-text -->
                </div>
                <!-- /.clients__category-item -->
                <div class="clients__category-item">
                  <svg class="icon clients__category-item-img">
                    <use href="img/sprite.svg#car-cosmetic"></use>
                  </svg>
                  <p class="clients__category-item-text">Автомобильная косметика</p>
                  <!-- /.clients__category-item-text -->
                </div>
                <!-- /.clients__category-item -->
                <div class="clients__category-item">
                  <svg class="icon clients__category-item-img">
                    <use href="img/sprite.svg#shirt"></use>
                  </svg>
                  <p class="clients__category-item-text">Косметика по уходу за одеждой</p>
                  <!-- /.clients__category-item-text -->
                </div>
                <!-- /.clients__category-item -->
                <div class="clients__category-item">
                  <svg class="icon clients__category-item-img">
                    <use href="img/sprite.svg#boots"></use>
                  </svg>
                  <p class="clients__category-item-text">Косметика по уходу за обувью</p>
                  <!-- /.clients__category-item-text -->
                </div>
                <!-- /.clients__category-item -->
                <div class="clients__category-item">
                  <svg class="icon clients__category-item-img">
                    <use href="img/sprite.svg#brics"></use>
                  </svg>
                  <p class="clients__category-item-text">Строительные материалы</p>
                  <!-- /.clients__category-item-text -->
                </div>
                <!-- /.clients__category-item -->
                <div class="clients__category-item">
                  <svg class="icon clients__category-item-img">
                    <use href="img/sprite.svg#more"></use>
                  </svg>
                  <p class="clients__category-item-text">И многих других</p>
                  <!-- /.clients__category-item-text -->
                </div>
                <!-- /.clients__category-item -->
              </div>
              <!-- /.clients__category-list -->
            </div>
            <div class="clients__logo-list">
              <div class="clients__logo-item">
                <img src="img/client-logo.png" alt="client-logo" class="clients__logo-item-img" />
              </div>
              <!-- /.clients__logo-item -->
              <div class="clients__logo-item">
                <img src="img/client-logo.png" alt="client-logo" class="clients__logo-item-img" />
              </div>
              <!-- /.clients__logo-item -->
              <div class="clients__logo-item">
                <img src="img/client-logo.png" alt="client-logo" class="clients__logo-item-img" />
              </div>
              <!-- /.clients__logo-item -->
              <div class="clients__logo-item">
                <img src="img/client-logo.png" alt="client-logo" class="clients__logo-item-img" />
              </div>
              <!-- /.clients__logo-item -->
              <div class="clients__logo-item">
                <img src="img/client-logo.png" alt="client-logo" class="clients__logo-item-img" />
              </div>
              <!-- /.clients__logo-item -->
              <div class="clients__logo-item">
                <img src="img/client-logo.png" alt="client-logo" class="clients__logo-item-img" />
              </div>
              <!-- /.clients__logo-item -->
              <div class="clients__logo-item">
                <img src="img/client-logo.png" alt="client-logo" class="clients__logo-item-img" />
              </div>
              <!-- /.clients__logo-item -->
              <div class="clients__logo-item">
                <img src="img/client-logo.png" alt="client-logo" class="clients__logo-item-img" />
              </div>
              <!-- /.clients__logo-item -->
              <div class="clients__logo-item">
                <img src="img/client-logo.png" alt="client-logo" class="clients__logo-item-img" />
              </div>
              <!-- /.clients__logo-item -->
            </div>
          </div>
        </div>
      </section>
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
              <a href="#" class="blog__slide-link button-link">Весь блог</a>
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
      <section class="cta">
        <img src="img/cta-bg.png" alt="" class="cta__bg" />
        <div class="cta__wrapper">
          <div class="cta__container container">
            <form action="#" class="cta__content">
              <h2 class="cta__title title title_h2">Хотите сотрудничать?</h2>
              <p class="cta__description">
                Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
                интересующие вопросы и поможем даже в самых сложных случаях!
              </p>
              <div class="cta__inputs">
                <div class="cta__input-group">
                  <input class="cta__input input" id="user-name" type="text" placeholder="Имя" />
                  <label for="user-name" class="cta__label">Имя</label>
                </div>
                <div class="cta__input-group">
                  <input
                    class="cta__input input"
                    id="user-phone"
                    type="text"
                    placeholder="Номер телефона"
                  />
                  <label for="user-phone" class="cta__label">Номер телефона</label>
                </div>
              </div>
              <div class="cta__button-group">
                <button class="button cta__button" type="submit">Отправить заявку</button>
                <div class="cta__notify-group">
                  <svg class="cta__notify-img" width="14" height="14">
                    <use href="img/sprite.svg#shield"></use>
                  </svg>
                  <p class="cta__notify-text">
                    Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                    конфиденциальность информации!
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <footer class="footer">
        <div class="footer__container container">
          <div class="footer__top">
            <a href="#" class="footer__logo-link">
              <svg class="icon footer__logo-svg">
                <use href="img/sprite.svg#logo-dark"></use>
              </svg>
            </a>
            <a href="tel:+74996861014" class="footer__phone">+7 (499) 686-10-14</a>
            <div class="footer__address">
              <svg class="icon" width="24" height="24">
                <use href="img/sprite.svg#mark"></use>
              </svg>
              <address class="footer__address-text">г. Москва, Холодильный пер. 4к1с8</address>
            </div>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer__email">
              <svg class="icon" width="24" height="24">
                <use href="img/sprite.svg#mail"></use>
              </svg>
              <span class="footer__email-text">a.dragunov@tdaliance.ru</span>
            </a>
            <div class="footer__socials">
              <a href="#" class="footer__social-link">
                <svg class="icon" width="24" height="24">
                  <use href="img/sprite.svg#vk"></use>
                </svg>
              </a>
              <a href="#" class="footer__social-link">
                <svg class="icon" width="24" height="24">
                  <use href="img/sprite.svg#inst"></use>
                </svg>
              </a>
            </div>
          </div>
          <div class="footer__mid">
            <div class="footer__menu footer-menu">
              <a href="#" class="footer-menu__link">Контрактное производство</a>
              <ul class="footer-menu__item-list footer__columns-2">
                <li class="footer-menu__item">
                  <a href="#" class="footer-menu__item-link">Автомобильная химия</a>
                </li>
                <li class="footer-menu__item">
                  <a href="#" class="footer-menu__item-link">Бытовая химия</a>
                </li>
                <li class="footer-menu__item">
                  <a href="#" class="footer-menu__item-link">Дезинфицирующие средства</a>
                </li>
                <li class="footer-menu__item">
                  <a href="#" class="footer-menu__item-link">Пищевые аэрозоли</a>
                </li>
                <li class="footer-menu__item">
                  <a href="#" class="footer-menu__item-link">Косметическая продукция</a>
                </li>
                <li class="footer-menu__item">
                  <a href="#" class="footer-menu__item-link">Краски аэрозольные</a>
                </li>
              </ul>
            </div>
            <div class="footer__menu footer-menu">
              <a href="#" class="footer-menu__link">Собственные марки</a>
              <ul class="footer-menu__item-list">
                <li class="footer-menu__item">
                  <a href="#" class="footer-menu__item-link">Автохимия AG-Tech</a>
                </li>
                <li class="footer-menu__item">
                  <a href="#" class="footer-menu__item-link">Автохимия AP</a>
                </li>
              </ul>
            </div>
            <div class="footer__menu footer-menu">
              <a href="#" class="footer-menu__link">О компании</a>
              <a href="#" class="footer-menu__link">Новости</a>
              <a href="#" class="footer-menu__link">Контакты</a>
            </div>
          </div>
          <div class="footer__bottom">
            <div class="footer__bottom-left">
              <span class="footer__copyright">
                &copy; <?php echo date("Y")?> «Aliance Production». Все права защищены.
              </span>
              <a href="#" class="footer__policy">Политики конфиденциальности</a>
            </div>

            <div class="footer__made-in made-in">
              <span class="made-in__text">Сделано в</span>
              <svg class="icon made-in__svg">
                <use href="img/sprite.svg#author-logo"></use>
              </svg>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="modal"></div>
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
