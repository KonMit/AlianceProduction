<nav class="navbar <?= $navbar_type ?>">
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
        <use href="<?= $navbar_link?>img/sprite.svg#logo-dark"></use>
        </svg>
    </a>
    <ul class="navbar__list">
        <li class="navbar__item">
        <a href="/about.php" class="navbar__link">О компании</a>
        </li>
        <li class="navbar__item">
        <a href="/contracts.php" class="navbar__link">Контрактное производство</a>
        </li>
        <li class="navbar__item">
        <a href="/trademarks.php" class="navbar__link">Собственные торговые марки</a>
        </li>
        <li class="navbar__item">
        <a href="/news.php" class="navbar__link">Новости</a>
        </li>
        <li class="navbar__item">
        <a href="/contacts.php" class="navbar__link">Контакты</a>
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