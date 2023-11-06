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
<header class="header-inside  <?= $header_type ?>">
    <div class="header-inside__container container">
        <div class="header-inside__content">
        <div class="separator"></div>
        <h2 class="header-inside__title title title_h2"><?= $page_title ?></h2>
        <div class="header-inside__breadcrumb breadcrumb">
            <ul class="breadcrumb__list">
            <?php
                
                if (!empty($header_page_breadcrumb)) {
                    $index = 0;
                    foreach($header_page_breadcrumb as $key => $value) {
                        $count = count($header_page_breadcrumb);
                        $prev = "_prev";
                        if ($index == $count - 1) {
                            $prev = "";
                            echo 
                            "<li class='breadcrumb__item {$prev}'>
                                <span class='breadcrumb__link {$prev}'>{$key}</span>
                            </li>";
                        } else {
                            echo 
                            "<li class='breadcrumb__item {$prev}'>
                                <a href='{$value}' class='breadcrumb__link {$prev}'>{$key}</a>
                            </li>";
                        }
                        
                        $index++;
                    }
                } else {
                  echo 
                  " <li class='breadcrumb__item _prev'>
                        <a href='/' class='breadcrumb__link _prev'>Главная</a>
                    </li>
                    <li class='breadcrumb__item'>
                        <span class='breadcrumb__link'> {$page_title} </span>
                    </li>";
                }
            
            ?>
            
            </ul>
        </div>
        </div>
        <img src="/img/avto-him-header.png" alt="Автохимия" class="header-inside__image" />
    </div>
</header>