<?php

function fetchSql($sql)
{
    $result  = mysql_query( $sql );
	$items = array();
    while( $res = mysql_fetch_array( $result ) )
    {
		//$res['id'], $res['name']
        $items[] = $res;
    }
	//$items = array( 0=>( id=>1, 'муж... ), 1=>
    return $items;
}

function getItems( $id )
{
    $sql = "SELECT * from items WHERE id_category ='" . $id . "'";
    return fetchSql($sql);
}

function getItem( $id )
{
    $sql = "SELECT * from items WHERE id ='" . $id . "'";
    return fetchSql($sql);
}

function getCategory()
{
    $sql = "SELECT * from category WHERE 1";
    return fetchSql($sql);

}


function getSlider()
{
    $sql = "SELECT * from slider LIMIT 4";
    return fetchSql($sql);
}

function getCategoryById( $id )
{
    $sql = "SELECT * from category WHERE id = " . $id;
    return fetchSql($sql);

}

function searchItems( $keyWord, $categoryId, $price1, $price2 )
{
    $sql = 'SELECT * from items WHERE ';
    $isVoid = 1;
    if( $keyWord != '' )
    {
        $isVoid = 0 ;
        $sql .= "( name LIKE '%" . $keyWord  . "%'  OR  description LIKE '%" . $keyWord . "%' )" ;
    }
    if( $categoryId != 0 )
    {
        if( !$isVoid )
        {
            $sql .= ' AND ';
        }
        $isVoid = 0;
        $sql .= "( id_category = " . $categoryId . " ) " ;
    }

    if( $price1 > 0 )
    {
        if( !$isVoid )
        {
            $sql .= ' AND ';
        }
        $isVoid = 0;
        $sql .= "( price >= " . $price1 .  " AND " . "price <= " . $price2 . ")" ;
    }
    $sql .= ' order by price ' ;
    return fetchSql($sql);
}