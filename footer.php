<section class="cta">
    <img src="img/cta-bg.png" alt="" class="cta__bg" />
    <div class="cta__wrapper">
    <div class="cta__container container">
        <form action="handler.php" method="POST" class="cta__content cta-form">
            <h2 class="cta__title title title_h2">Хотите сотрудничать?</h2>
            <p class="cta__description">
                Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
                интересующие вопросы и поможем даже в самых сложных случаях!
            </p>
            <div class="cta__inputs">
                <div class="cta__input-group">
                <input
                    class="cta__input input _req" 
                    id="username" type="text" 
                    name="name" 
                    placeholder="Имя"
                />
                <label for="username" class="cta__label">Имя</label>
                </div>
                <div class="cta__input-group">
                <input
                    class="cta__input input _req"
                    id="userphone"
                    type="text"
                    name="phone"
                    pattern="^(\+7|7|8) ?\(?[0-9]{3}\)?[-| ]?[0-9]{3}[-| ]?[0-9]{2}[-| ]?[0-9]{2}$"
                    placeholder="Номер телефона"
                />
                <label for="userphone" class="cta__label">Номер телефона</label>
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
        <a href="tel:+74996861014" class="footer__phone">+7 (999) 686-10-14</a>
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
            &copy; 2023 «Aliance Production». Все права защищены.
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