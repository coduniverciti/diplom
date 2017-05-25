<?
include 'view/stranisy/function.php';
function proverka($name){
	trim(strip_tags(htmlspecialchars($name)));
	return $name;
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
 	$title_book =proverka($_POST['title']);
    $text_book =proverka($_POST['textt']); 
    $link_img_book =proverka($_POST['img']);
    $god_book =proverka($_POST['god']);
    $izdatelstvo_book =proverka($_POST['izdatelstvo']);
    $format_book =proverka($_POST['format']);
    $stranisa_book =proverka($_POST['stranisa']);
    $price_book =proverka($_POST['price']);
    db_connect();
    $query = mysql_query("INSERT INTO python(title,textt,img,god,izdatelstvo,format,stranisa,price) VALUES ('$title_book','$text_book','$link_img_book','$god_book','$izdatelstvo_book','$format_book','$stranisa_book','$price_book')"); 

    echo "Книга добавлена успешно.";
}

echo "<h2 style='padding-bottom:10px;border-bottom:2px solid #fff;'>Админ часть магазина</h2>";
echo "<h2 style=''>Добавления книг</h2>";
?>
<div>
	<form action="<?=$_SERVER['PHP_SELF']?>" method='post' style='float: left;margin-bottom:10%;color: #000;font-weight: bold;'>
		<label><b>Названия книг:</b><input type="text" name="title"required></label><br><br>
		<label><b>Ссылка на изображения:</b><input type="text" name="img"required></label><br><br>
		<label><b>Год:</b><input type="text" name="god"required></label><br><br>
		<label><b>Издательство:</b><input type="text" name="izdatelstvo"required></label><br><br>
		<label><b>Формать книг:</b><input type="text" name="format"required></label><br><br>
		<label><b>Страница:</b><input type="text" name="stranisa"required></label><br><br>
		<label><b>Цена:</b><input type="text" name="price"required></label><br><br>
		<textarea rows='7' cols='40'name="textt" style="margin-left: 150px;"placeholder='Описания книг'></textarea><br>
		<input style='float:right;margin-top: 20px;'type="submit" name="add_book" value="Добавить книгу">
	</form>
</div>