
<?php
            $cartOut = '';
            $cartOut .= 'Информация о заказе покупателя: ' . $_POST['name'] . "<br>";
            $cartOut .= 'email: ' . $_POST['email'] . "<br>";
            $cartOut .= 'телефон: ' . $_POST['tel'] . "<br><br><br>";
            
            
            $cartOut .=  '<table  align="center" border="1" style="margin-top: 50px;" >
                <tr>
                    <td style="padding: 0 30px 0 30px;">Наименование</td>
                    <td style="padding: 0 30px 0 30px;">Кол-во</td>
                    <td style="padding: 0 30px 0 30px;">Цена</td>
                </tr>';

            foreach( $_SESSION['cart'] as $itemId => $count )
            {

                $cartOut .= '<tr>';
                $item = getItem($itemId)[0];
                $cartOut .= '<td style="padding: 0 30px 0 30px;">' . $item['name'] . '</td>';
                $cartOut .= '<td style="padding: 0 30px 0 30px;">' . $count . '</td>';
                $cartOut .= '<td style="padding: 0 30px 0 30px;">' . $item['price'] . '</td>';
                echo '</tr>';

            }


            $cartOut .= '
            </table>
            <p style="margin-top: 20px; font-size: 20px;">Итого: ' . $cartSum . ' рублей </p>';


    