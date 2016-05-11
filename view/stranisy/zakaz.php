<h2 style="text-align: center;border-bottom:2px solid #fff;padding-bottom: 20px;">Оформить заказ.</h2>
<?
if($_SESSION['cart'] && !isset($_POST['zakaz'])){
?>
<form action="<?$_SERVER['PHP_SELF'];?>" method="post" id="cart-form">

		<table id="mycart" align="center" cellspacing="0" cellpadding="0" border="0" style="border-radius: 10px;">
			  <tr style="background-color: #0083ca;">
				  <th style="padding: 3px;color: #fff;">Книги</th>
					<th style="color:#fff;padding: 3px;border-left: 1px solid white;">Цена</th>
					<th style="color:#fff;padding: 3px;border-left: 1px solid white;">Кол-во</th>
					<th style="color:#fff;padding: 3px;border-left: 1px solid white;">Всего</th>
			  </tr>
<?
	foreach ($_SESSION['cart'] as $id => $quantity):	
		$product=get_product($id,'python');
?>
			  <tr style="color: black;">
		          <td align="left"style='color: white;padding: 2px;background-color:#fff;color:#000;border-top:1px solid black; '><?=$product['title'];?></td>
		    	  <td align="center" style='color: white;padding: 2px;background-color:#fff;color:#000;border-top:1px solid black;border-left: 1px solid #000;'><?=$product['price'];?> Сом</td>
		    	  <td align="center" style='color: white;padding: 2px;background-color:#fff;color:#000;border-top:1px solid black;border-left: 1px solid #000;'><?=$quantity;?></td>
		    	  <td align="center"style='color: white;padding: 2px;background-color:#fff;color:#000;border-top:1px solid black;border-left: 1px solid #000;'><?=$product['price'] * $quantity;?> Сом</td>
			  </tr>
			  <?endforeach;?>
		</table>

	 <p class="total" align="center"><b>Общая сумма заказа:</b> <span class="product-price"><?=$_SESSION['total_price'];?> Сом</span></p>
	 <p style="width: 500px;">
	 	<label>Ваша Имя: <input type="text" name="name" required></label><br><br>
	 	<label>Ваша Фамилия: <input type="text" name="s_name"required></label><br><br>
	 	<label>Ваш адресс: <input type="text" name="adress"required></label><br><br>
	 	<label>Ваш E-mail: <input type="text" name="email"required></label><br><br>
	 	<label>Страна: <input type="text" name="strana"required></label><br><br>
	 	<label>Ваш Город: <input type="text" name="gorod"required></label><br><br>
	 	<p>Способ оплаты.<a href="https://www.mobilnik.kg/" target="blank"><img src="images/mobilnik.png" style="width: 10%;height: 10%"></a>      <a href="https://elsom.kg/" target="blank"><img src="images/elsom.png" style="width: 10%;height: 10%"></a>
	 	</p><br><br>

	 </p>
	 <p style="text-align: center;"><input type="submit" name="zakaz" value="Заказать" style="background-color: #0083ca;color: #fff;padding: 5px 10px;" /></p>
	
</form>
<?
}

if($_SESSION['cart'] && isset($_POST['zakaz'])){
    $name =$_POST['name']; 
    $s_name =$_POST['s_name']; 
    $adress =$_POST['adress']; 
    $email =$_POST['email']; 
    $strana =$_POST['strana']; 
    $gorod =$_POST['gorod']; 
    
    $date = date('Y-m-d');
    $time = date('H:i:s');

    if((!$name == '' || !$s_name == '')&&(!$adress == '' || !$email == '')&&(!$strana == '' || !$gorod == '')){
    	foreach($_SESSION['cart'] as $id => $quantity):
	    $product = get_product($id,'python');
	        $query = mysql_query("INSERT INTO orders(name,s_name,adress,email,strana,gorod,date,time,product,prod_id,price,qty) VALUES ('$name','$s_name','$adress','$email','$strana','$gorod','$date','$time','{$product['title']}','{$product['id']}','{$product['price']}','$quantity')");
	    endforeach;	
    }
       
}
	if(isset($_POST['zakaz'])){
			echo "<p align='center' style='color: #000;font-size:20px;'><b>Ваш заказ успешно принят! Спасибо за покупку!</b></p>";
	}

				