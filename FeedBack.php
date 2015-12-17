<!DOCTYPE html>

<html>
     <head>
     	<title>FeedBack</title>
     	<meta name="description" content="" />
     	<meta name="keywords" content="" />
     	<meta http-equiv="content-type" content="text/html"  charset-"utf-8"/>
     </head>
     <body>
     	
     	<form action="PHPMailer.php" name="FeedBack" method="post">
     		
     		<textarea name="message" rows="7" cols="40" placeholder="сообщение"><?=$_POST ["message"]?></textarea>
     		<br />
     		<button type="submit" name="send">Отправить</button>
     	</form>
     	
     </body>
</html>     	
