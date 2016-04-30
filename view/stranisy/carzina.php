<?
if($_SESSION['cart'] !== array()){
?>
<h2 align="center" style="color: white;border-bottom: 2px solid #fff;">Ваша корзина товаров</h2>
<form action="index.php?view=update_cart" method="post" id="cart-form">

<table id="mycart" align="center" cellspacing="0" cellpadding="0" border="0" style="border-radius: 10px;">
	  <tr style="background-color: black;">
		  <th style="padding: 3px;">Книги</th>
			<th style="padding: 3px;border-left: 1px solid white;">Цена</th>
			<th style="padding: 3px;border-left: 1px solid white;">Кол-во</th>
			<th style="padding: 3px;border-left: 1px solid white;">Всего</th>
	  </tr>
<?
	foreach ($_SESSION['cart'] as $id => $quantity):	
		$product=get_product($id,'python');
?>
	  <tr style="color: black;">
          <td align="left"style='color: white;padding: 2px;border-top:1px solid black; '><?=$product['title'];?></td>
    	  <td align="center" style='color: white;padding: 2px;border-top:1px solid black;border-left: 1px solid #000;'><?=$product['price'];?> Сом</td>
    	  <td align="center" style='color: white;padding: 2px;border-top:1px solid black;border-left: 1px solid #000;'><input type="text" size="2" name="<?=$id;?>" maxlength="2" value="<?=$quantity;?>" /></td>
    	  <td align="center"style='color: white;padding: 2px;border-top:1px solid black;border-left: 1px solid #000;'><?=$product['price'] * $quantity;?> Сом</td>
	  </tr>
	  <?endforeach;?>
</table>
	 <p class="total" align="center">Общая сумма заказа: <span class="product-price"><?=$_SESSION['total_price'];?> Сом</span></p>
	 <p align="center"><input type="submit" name="update" value="Обновить" /></p>
	
</form>
<?
}else{
echo "<h2 style='text-align:center'>Ваша корзина пуста!<h2>";
}
?>