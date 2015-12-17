<!-- Content Slider -->

            <?php
            if( $displaySlider ) {
                echo '<div id="slider" class="box">
            <div id="slider-holder">
                <ul>
            ';
                $slider = getSlider();
                $n = count($slider);
                $i = 0;
                echo '<li ><a href=" ' . $slider[0]['link'] . '"><img src="' . $slider[0]['photo'] . '" alt="" /></a></li>';
                echo '</ul>
    </div>
</div>';
            }
            ?>

<!-- End Content Slider -->

<!-- Products -->
<div class="products">
    <div class="cl">&nbsp;</div>
    <ul>
        <?php
            if( $isSearch )
            {
                $items = searchItems( $_POST['keyword'], $_POST['category'], $_POST['price1'], $_POST['price2'] );
            }
            else
            {
                $items = getItems( $id );
            }
        ?>
        <?php
            $n = count($items);
            $i = 0;
            foreach ($items as $item) {
                echo '<li>';
                $catName = getCategoryById( $item['id_category' ] )[0]['name'];
                $item['description'] = substr($item['description'], 0 , 10 );
                $i++;
                $link = '?type=3&id=' . $item['id'];
                echo '<a href="'. $link .  '"><img src="' . $item['photo'] .  '" alt="" /></a>
                <div class="product-info">
                    <h3>' . $catName .  '</h3>
                    <div class="product-desc">
                        <h4>' . $item['name'] .  '</h4>
                        <strong class="price">' . $item['price'] .  ' руб.</strong>
                    </div>
                </div>';
                echo '</li>';


         }
        ?>

    </ul>
    <div class="cl">&nbsp;</div>
</div>
<!-- End Products -->