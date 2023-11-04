<section class="founder <?= $founder_in_container ?>">
    <img class="founder__img" src="<?= $founde_img_link ?>" alt="Founder" />
    <div class="founder__container container">
        <div class="founder__content <?php echo $founder_type ? " " . $founder_type : ""; ?>">
            <div class="separator"></div>
            <h2 class="founder__title <?php echo $founder_type ? " " . $founder_type : ""; ?> title title_h2"> <?= $founder_title ?></h2>
            <div class="founder__text-block">
                <?php 
                for($i = 0; $i != $founder_amount_text; $i++) {
                    echo '<p class="founder__text">' . $founder_text[$i] . '</p>';
                }
                ?>
            </div>
            
            <?php
                if ($founder_link) {
                    echo '<a href="#" class="founder__button-link button-link">Подробнее о компании</a>';
                }
            ?>
        </div>
    </div>
</section>