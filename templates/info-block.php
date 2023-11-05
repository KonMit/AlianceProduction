<section class="info-block container <?= $info_block_full_width ?>">
    <div class="info-block__container container">
        <div class="info-block__content">
            <div class="separator"></div>
            <h2 class="info-block__title title title_h2"><?= $info_block_title; ?></h2>
            <div class="info-block__text-block">

                <?php 
                    if(count($info_block_text) != 0) {
                        for($i = 0;$i != count($info_block_text);$i++) {
                            echo 
                                "<p class='info-block__text'>
                                 {$info_block_text[$i]}
                                </p>";
                        }
                    }
                    
                ?>
                
                <p class="info-block__text">
                
                </p>
            </div>
            <?php 
                include("./templates/category-inside.php");
            ?>
        </div>
    </div>
    <img class="info-block__img" src="<?= $info_block_img_link; ?>" alt="Founder"/>
</section>