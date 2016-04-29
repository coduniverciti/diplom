<?
function db_connect(){
        $host = 'localhost';
        $user = 'Akmat';
        $pswd = 'qwerty';
        $db = 'diplom';
        
        $connection = mysql_connect($host, $user, $pswd);
        if(!$connection || !mysql_select_db($db,$connection))
        {
            return false;
        }
        return $connection;
    }

    
    
    function db_result_to_array($result){
        $res_array = array();
        
        $count = 0;
        
        while($row = mysql_fetch_array($result))
        {
            $res_array[$count] = $row;
            $count++;
        }
        return $res_array;
    }
    
    
    function get_products(){
        db_connect();
        
        $query = "SELECT * FROM kniga ORDER BY id DESC";
        
        $result = mysql_query($query);
        
        $result = db_result_to_array($result);
        
        return $result;
    }
	$products = get_products();
	foreach($products as $item):?>
		<table>
				<tr>
					<td class='img'><img src='images/python.jpg'></td>
					<td class='p'><a href="<?=$item['id']?>">В корзину</a><h3><a href="<?=$item['id']?>"><?=$item['title']?></a></h3>
					<p><?=$item['text']?></p></td>
				</tr>
		</table>
<?
	endforeach;
?>	