<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once '../model/model.php';
$tableName = 'product';
//echo $_GET['id'];
if (deleteProduct($tableName, $_GET['id'])) {
    	$msg ='<p>Product deleted Successfully !!!</p><br>';
  	header('Location: ../displayProduct.php?msg='.$msg.'');
}
else{
	echo '<p>Product Not Deleted!!</p>';
}
 ?>
<?php }
else{
	echo "Error accessing the page !!!";
} ?>