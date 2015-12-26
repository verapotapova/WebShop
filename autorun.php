<?php
session_start();
$dblocation = "localhost";
$dbname = "vera";
$dbuser = "root";
$dbcnx = mysql_connect($dblocation, $dbuser);
mysql_query('SET NAMES utf8');
mysql_select_db($dbname,$dbcnx) ;

//
$displaySlider = 0;
$isSearch = 0 ;
if( !isset($_GET['type']) ) {
    $type = 0;
}
else
{
    $type = $_GET['type'];
}
if( !isset( $_POST['search'] ) )
{
    $displaySlider = 1;
    if( isset( $_GET['id'] ) )
    {
        $id = $_GET['id'];
    }
    else
    {
        //Ecли не корзина
        if( $type != 4 ) {
            $id = 1;
        }
        else
        {
            $id = 0;
        }
    }
}
else
{
    $isSearch = 1 ;
}

include ("items.php");
include ("cart.php");

if( isset( $_SESSION['cart'] ) )
{
    $cartSum =0 ;
    $cartCount = 0;
    foreach( $_SESSION['cart'] as $itemId=>$count )
    {
        $itemSql = getItem($itemId)[0];
        $cartSum += $itemSql['price'] * $count;
        $cartCount += $count ;
    }
}
else
{
    $cartSum = 0 ;
    $cartCount = 0;
}


switch($type) {
    case 4:
    addToCart($id);
    break;
    case 5:
        freeCart();
        header("location: http://" . $_SERVER['HTTP_HOST']);
        break;
    case 6:
    include( "cart_out_mail.php" );
    include( "sendmail.php" );
    
    sendMail('vera_potapova_95@mail.ru', $cartOut  , 'Информация по заказку');
    freeCart();  
    
    freeCart();
    break;
    case 7:
        deleteOneFromCart($id);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "?type=4");
        break;
    case 8 :
        deleteItemFromCart($id);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "?type=4");
        break;


}
