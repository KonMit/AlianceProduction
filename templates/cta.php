<section class="cta">
    <img src="img/cta-bg.png" alt="" class="cta__bg" />
    <div class="cta__wrapper">
    <div class="cta__container container">
        <form action="handler.php" method="POST" class="cta__content">
        <h2 class="cta__title title title_h2">Хотите сотрудничать?</h2>
        <p class="cta__description">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <div class="cta__inputs">
            <div class="cta__input-group">
            <input 
                class="cta__input input" 
                id="username" type="text" 
                name="username" 
                placeholder="Имя"
                maxLength="100"
                required
            />
            <label for="username" class="cta__label">Имя</label>
            </div>
            <div class="cta__input-group">
            <input
                class="cta__input input"
                id="userphone"
                type="text"
                name="userphone"
                placeholder="Номер телефона"
                maxLength="20"
                required
                pattern="^(\+7|7|8) ?\(?[0-9]{3}\)?[-| ]?[0-9]{3}[-| ]?[0-9]{2}[-| ]?[0-9]{2}$"
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