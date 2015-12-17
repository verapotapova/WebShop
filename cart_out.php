
<?php
if( $cartCount == 0 )
{
    echo '<h1>Ваша корзина пуста</h1>';
}
else {
    echo '<table  align="center" border="1" style="margin-top: 50px;" >
        <tr>
            <td style="padding: 0 30px 0 30px;">Наименование</td>
            <td style="padding: 0 30px 0 30px;">Кол-во</td>
            <td style="padding: 0 30px 0 30px;">Цена</td>
            <td style="padding: 0 30px 0 30px;">Больше</td>
            <td style="padding: 0 30px 0 30px;">Меньше</td>
            <td style="padding: 0 30px 0 30px;">Удалить</td>
        </tr>';

    foreach( $_SESSION['cart'] as $itemId => $count )
    {

        echo '<tr>';
        $item = getItem($itemId)[0];
        echo '<td style="padding: 0 30px 0 30px;">' . $item['name'] . '</td>';
        echo '<td style="padding: 0 30px 0 30px;">' . $count . '</td>';
        echo '<td style="padding: 0 30px 0 30px;">' . $item['price'] . '</td>';
        echo '<td style="padding: 0 30px 0 30px;"><a href="?type=4&id=' . $itemId  . '">' . 'Больше' . '</td>';
        echo '<td style="padding: 0 30px 0 30px;"><a href="?type=7&id=' . $itemId  . '">' . 'Меньше' . '</td>';
        echo '<td style="padding: 0 30px 0 30px;"><a href="?type=8&id=' . $itemId  . '">' . 'Удалить' . '</td>';
        echo '</tr>';

    }

    echo '
    </table>
    <p style="margin-top: 20px; font-size: 20px;">Итого: ' . $cartSum . ' рублей </p>
    <a class="search-submit" style="text-align: center; width: 200px;" href="?type=5">Очистить корзину</a>';
    echo '<a  class="search-submit" style="text-align: center; width: 200px;" href="?type=6">Купить Все</a><br>';
}