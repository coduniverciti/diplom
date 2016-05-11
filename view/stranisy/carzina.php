<?
if($_SESSION['cart'] !== array()){
?>
<h2 align="center" style="color: white;border-bottom: 2px solid #fff;padding-bottom: 20px;">Ваша корзина товаров</h2>
<form action="index.php?view=update_cart" method="post" id="cart-form">

<table id="mycart" align="center" cellspacing="0" cellpadding="0" border="0" style="border-radius: 10px;">
	  <tr style="background-color: #0083ca;">
		  <th style="padding: 3px;color:#fff;">Книги</th>
			<th style="padding: 3px;color:#fff;border-left: 1px solid white;">Цена</th>
			<th style="padding: 3px;color:#fff;border-left: 1px solid white;">Кол-во</th>
			<th style="padding: 3px;color:#fff;border-left: 1px solid white;">Всего</th>
	  </tr>
<?
	foreach ($_SESSION['cart'] as $id => $quantity):	
		$product=get_product($id,'python');
?>
	  <tr style="color: #fff;">
          <td align="left"style='color: #000;padding: 2px;border-top:1px solid #fff;background-color: #fff;'><?=$product['title'];?></td>
    	  <td align="center" style='color: #000;padding: 2px;border-top:1px solid #fff;background-color: #fff;border-left: 1px solid #000;'><?=$product['price'];?> Сом</td>
    	  <td align="center" style='color: #000;background-color: #fff;padding: 2px;border-top:1px solid #fff;border-left: 1px solid #000;background-color: #fff;'><input type="text" size="2" name="<?=$id;?>" maxlength="2" value="<?=$quantity;?>" /></td>
    	  <td align="center"style='color: #000;padding: 2px;background-color: #fff;border-top:1px solid #fff;border-left: 1px solid #000;'><?=$product['price'] * $quantity;?> Сом</td>
	  </tr>
	  <?endforeach;?>
</table>
	 <p style="text-align: center;"><b>Общая сумма заказа:</b> <span class="product-price"><?=$_SESSION['total_price'];?> Сом</span></p>
	 <p align="center"><input type="submit" name="update" value="Обновить" /></p>
	
</form>
<p style="text-align: center;margin-top: 5%">
<a href="index.php?view=zakaz"style="border-radius: 10px;color:#fff;background-color: #0083ca;padding: 10px;font-size: 20px;"><b>Оформить заказ</b></a>
</p>
<?
}else{
echo "<h2 style='text-align:center'>Ваша корзина пуста!<h2>";
}
?>