<?php

function addToCart($id, $count = 1)
{

    if( $id > 0 ) {
        $idAdd = 0;
        if (!isset($_SESSION['cart'])) {
            $isAdd = 1;
        } else {
            if (!isset($_SESSION['cart'][$id])) {
                $idAdd = 1;
            }
        }
        if ($idAdd) {
            $_SESSION['cart'][$id] = $count;
        } else {
            $_SESSION['cart'][$id] += $count;
        }
    }
}

function deleteOneFromCart($id)
{
        if( isset( $_SESSION['cart'][$id] ) )
        {
            if(  $_SESSION['cart'][$id] > 1 )
            {
                $_SESSION['cart'][$id] --;
            }
            else
            {
                unset(  $_SESSION['cart'][$id] );
            }
        }
}

function deleteItemFromCart($id)
{
    if( isset( $_SESSION['cart'][$id] ) )
    {
            unset(  $_SESSION['cart'][$id] );

    }
}

function freeCart()
{
    if( isset( $_SESSION['cart'] ) )
        unset(  $_SESSION['cart'] );
}