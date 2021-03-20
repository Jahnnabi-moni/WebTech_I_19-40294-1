<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'controller/displayController.php';
$tableName = 'product';
$product = fetchProduct($tableName, $_GET['id']);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIT PRODUCT</title>
</head>
<body>

	
	<fieldset>
		<legend><b>EDIT PRODUCT</b></legend><br>
		<form action="controller/editController.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
	Name:<br>
	<input type="text" name="name" value="<?php echo $product['Name']; ?>"><hr>
	Buying Price:<br>
	<input type="text" name="bprice" value="<?php echo $product['BuyingPrice']; ?>"><hr>
	Selling Price:<br>
	<input type="text" name="sprice" value="<?php echo $product['SellingPrice']; ?>"><hr>
	<input type="checkbox" name="display" value="Yes" <?php if($product['display']=='Yes'){echo 'checked';} ?>>
	<label for="display">Display</label><hr>
	<input type="submit" name="submit" value="Save">
    </form>
	</fieldset>

</body>
</html>
<?php }
else{
	echo "Error accessing the page.";
} ?>