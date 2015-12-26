
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
            echo '<form action="/?type=6" method="post">
                        
                        <p>
            <label for="name">Имя:</label>
            <input class="input" type="text"  name="name" placeholder="Введите ваше имя" required />
          </p>
          <p>
            <label for="email">Email:</label>
            <input class="input" type="email" name="email" placeholder="Введите электронный адрес" required />
            <span class="form_hint">Правильный формат "name@something.com"</span>
          </p>
          <p>
            <label for="tel">Телефон:</label>
            <input class="input" type="tel" name="tel" placeholder="Введите номер телефона" required />
            <span class="form_hint">Правильный формат "+7-123-4567890"</span>
          </p>
                        
          <input type="submit" class="search-submit" name="search" style="text-align: center; width: 200px;" value="Купить Все">
                        
</form>';

}
?>

