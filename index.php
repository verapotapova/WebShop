<?php

include("autorun.php");
$categoryItems = getCategory();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
	
	<meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	<meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	
	
</head>
<body>
	
<!-- Shell -->	
<div class="shell">
	
	<!-- Header -->	
	<div id="header">
		<h1 id="logo"><a href="#">shoparound</a></h1>	
		
		<!-- Cart -->
		<div id="cart">
			<a href="?type=4" class="cart-link">Корзина</a>
			<div class="cl">&nbsp;</div>
             <?php
			echo '<span>Количество: <strong>' . $cartCount . '</strong></span>
			&nbsp;&nbsp;
			<span>Цена: <strong>' . $cartSum  . ' руб</strong></span>'
            ?>
		</div>
		<!-- End Cart -->
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a href="?type=0" >Главная</a></li>
			    <li><a href="?type=1">Контакты</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->
	
	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
            <?php
                switch( $type )
                {
                        case 0:
                        include( "items_out.php" );
                        break;

                        case 1:
                        include( "contact.php" );
                        break;

                        case 3:
                        include( "item.php" );
                        break;

                        case 4:
                            include( "cart_out.php" );
                        break;

                        case 6:
                        echo '<h1>Cпасибо за покупку! Ждем вас снова!';

                        break;

                        case 9:
                            include( "PHPMailer.php" );
                        break;


                }

            ?>
			
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			<!-- Search -->
			<div class="box search">
				<h2>Поиск товара <span></span></h2>
				<div class="box-content">
					<form action="/" method="post">
						
						<label>Ключевое слово</label>
						<input type="text" name="keyword" class="field" />
						
						<label>Категории</label>
                        <select name = "category" class="field">
                            <option value="0">-- Выберете --</option>

                            <?php
                            foreach( $categoryItems as $item )
                            {
                                echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                            }
                            ?>
						</select>
						
						<div class="inline-field">
							<label>Цена</label>
							<input type ="text"  name = "price1" size="5" >
							<label>до:</label>
                            <input type ="text" name = "price2" size="5" >
                        </div>
						
						<input type="submit" class="search-submit" name="search" value="Поиск" />
						

					</form>
				</div>
			</div>
			<!-- End Search -->
			
			<!-- Categories -->
			<div class="box categories">
				<h2>Категории <span></span></h2>
				<div class="box-content">
					<ul>
                        <?php

                        $n = count( $categoryItems );
                        $i = 0 ;
                        foreach( $categoryItems as $item )
                        {
                            $item['link'] = '?id=' . $item['id'] ;
                            if( $i < $n - 1 )
                                echo '<li ><a href=" ' . $item['link'] . '">' . $item['name']. '</a></li>';
                            else
                                echo '<li class = "last"><a href=" ' . $item['link'] . '">' . $item['name']. '</a></li>';
                            $i++ ;
                        }
                        ?>
					</ul>
				</div>
			</div>
			<!-- End Categories -->
			
		</div>
		<!-- End Sidebar -->
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	
	<!-- Footer -->
	<div id="footer">
		<p class="left">
			<a href="?type=0">Главная</a>
			<span>|</span>
			<a href="?type=1">Контакты</a>
		</p>

		
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	
	
</body>
</html>