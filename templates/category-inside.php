<div class="category-inside">
    <div class="category-inside__list">
        <?php
            for($i = 0;$i < $category_amount; $i++) {
                if (!$category_svg[$i] == "" || !$category_text[$i] == "") {
                    echo  
                    "<div class='category-inside__item'>
                        <svg class='category-inside__item-img'>
                            <use href='{$category_svg[$i]}'></use>
                        </svg>
                        <p class='category-inside__item-text'>{$category_text[$i]}</p>
                    </div>";
                } 
            }
        ?>
    </div>
    <!-- /.clients__category-list -->
</div>