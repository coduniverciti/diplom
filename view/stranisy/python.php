<h2 style="text-align: center;border-bottom: 2px solid #fff;padding-bottom: 20px;">Книги по программированию.</h2>
<?
    $table = 'python';
	$products = get_products($table);
	foreach($products as $item):?>
		<table>
				<tr>
					<td class='img'><img src='images/<?=$item['img']?>'></td>
					<td class='p'><h3><a href="index.php?view=kniga&id=<?=$item['id']?>"><?=$item['title']?></a></h3>
					<p style="height: 50px; overflow: hidden;"><?=$item['text']?></p></td>
				</tr>
		</table>
<?
	endforeach;
?>	