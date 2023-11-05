<div class="category-inside">
    <div class="category-inside__list">
        <?php
        // $category_amount - количество элементов, которые необходимо вывести
        // $category_svg - массив идентификаторов svg картинок по порядку, относительно текущей страницы
        // $category_text - массив текста для каждого элемента по порядку
        // Цикл работает пока не будет равен $category_amount, при каждой итерации
        // он проверяет есть ли картинка и текст, если хотя бы одно из этого отсутствует, то элемент не будет выведен
            for($i = 0;$i < $category_amount; $i++) {
                if (!$category_svg[$i] == "" && !$category_text[$i] == "") {
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