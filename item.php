<?php
$item = getItem( $id )[0];

?>
<div class="products">
    <div class="cl">&nbsp;</div>
    <ul>

<?php
        echo '<li>';
    $catName = getCategoryById( $item['id_category' ] )[0]['name'];
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
	echo $item['description'];
?>

</ul>
<div class="cl">&nbsp;</div>
    <?php
        echo '<a class="search-submit" style="width: 150px; text-align: center" href="?type=4&id=' .  trim($id) . '" >Добавить в корзину</a>'
    ?>
</div>