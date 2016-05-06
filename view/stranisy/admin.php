<?
echo "<h2 style='padding-bottom:10px;border-bottom:2px solid #fff;'>Админ часть магазина</h2>";
echo "<h2 style=''>Добавления книг</h2>";
?>
<div>
	<form action='#' method='POST' style='float: left;margin-bottom:10%;color: #fff;font-weight: bold;'>
		<label>Названия книг:<input type="text" name="title"></label><br><br>
		<label>Названия изображения:<input type="text" name="title"></label><br><br>
		<label>Загрузка изображения:<input type="file" name="img"></label><br><br>
		<label>Год:<input type="text" name="god"></label><br><br>
		<label>Издательство:<input type="text" name="izdatelstvo"></label><br><br>
		<label>Формать книг:<input type="text" name="format"></label><br><br>
		<label>Страница:<input type="text" name="stranisa"></label><br><br>
		<label>Цена:<input type="text" name="prcie"></label><br><br>
		<textarea rows='7' cols='40'name="text" style="margin-left: 150px;"placeholder='Описания книг'></textarea><br>
		<input style='float:right;margin-top: 20px;'type="submit" name="add_book" value="Добавить книгу">
	</form>
</div>