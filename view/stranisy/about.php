<?
if($_SERVER['REQUEST_METHOD'] === 'POST'){
 	$who_name =$_POST['who_name']; 
    $who_email =$_POST['who_email']; 
    $message =$_POST['message'];
    db_connect();
    $query = mysql_query("INSERT INTO about(who_name,who_email,message) VALUES ('$who_name','$who_email','$message')"); 
}
?>
<div class="about_alpha">
	<div class="about_text">
		<p>Информационные технологии - это все еще молодая, стремительно развивающаяся и крайне изменчивая отрасль, которая однако все глубже проникает в нашу жизнь. Аудитория потребителей (и создателей) электронных продуктов постоянно растет, такие вещи как компьютер и Всемирная Паутина популярны на территории всей планеты.<br><br>

		Новейшие технологии достаточно сложны и для работы с ними придется многому научиться, в этом Вам и призван помочь портал Programmer's Klondike. Однако найдется не мало светлых голов, которые могли бы поделиться своими знаниями или идеями с другими заинтересованными людьми. Мы были бы очень рады помочь в этом - присылайте свои размышления, статьи, графику, знания и с ними познакомятся тысячи людей!<br><br>
		Также мы всегда рады Вашим отзывам и предложениям по улучшению нашего сайта.</p>
		<div class="obs">
	    	<h3><b>Контакты</b></h3>
	        	<form action="<?=$_SERVER['REQUEST_URI'];?>" method="post">
	           		<label>Ваша имя:<input type="text"name="who_name"></label><br><br>
	           		<label>E-mail:<input type="text"name="who_email"></label><br><br>
	           		<label>Введите сообщения.</label>
	           		<div>
	           		<textarea name="message" rows="6"cols="60"></textarea>
	           		</div>
	           		<label><input style="float: right;margin-bottom:600px;background-color: black;color:white;border-radius: 7px;padding: 5px;"type="submit" value="Отправить"></label>
	        	</form>
		</div>
	</div>
	
</div>