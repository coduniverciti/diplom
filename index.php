<?
session_start();
if(!isset($_SESSION['cart'])){
	$_SESSION['cart']=array();
	$_SESSION['total_items']=0;
	$_SESSION['total_price']='0.00';
}
include '/view/stranisy/function.php';

if($_GET['view']=='add_to_cart'){
	$id=$_GET['id'];
	$add_item=add_to_cart($id);
	$_SESSION['total_items'] = total_items($_SESSION['cart']);
	$_SESSION['total_price'] = total_price($_SESSION['cart']);
	header('Location:index.php?view=kniga&id='.$id);
}
if($_GET['view']=='update_cart'){
	update_cart();
	$_SESSION['total_items'] = total_items($_SESSION['cart']);
	$_SESSION['total_price'] = total_price($_SESSION['cart']);
	header('Location:index.php?view=carzina');
}
$view =empty($_GET['view'])?'index' : $_GET['view']; 
include($_SERVER[DOCUMENT_ROOT].'/view/shablon/books.php');
?>