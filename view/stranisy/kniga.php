<?
$id =$_GET['id'];
$table ='python';
$product = get_product($id,$table);
?>
<div style="width: 750px;margin-bottom: 20%">
	<h2 style="text-align: center;"><?=$product['title']?></h2>
	<img style="float: left; margin: 10px 10px; border-radius: 20px" src="images/<?=$product['img']?>">
	<p><?=$product['text']?></p><br>
	<blockquote>
		<b>Год издания:</b> <?=$product['god']?><br>
		<b>Издательство:</b> <?=$product['izdatelstvo']?><br>
		<b>Формат:</b> <?=$product['format']?><br>
		<b>Страниц:</b> <?=$product['stranisa']?><br>
		<h2><?=$product['price']?> Сом</h2>	
	</blockquote>
	<a style="float: right; background-color: black; padding: 2px 10px 3px 10px;border-radius: 10px;font-weight: bold;" href="index.php?view=add_to_cart&id=<?=$product['id']?>">В корзину</a>

</div>