<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'controller/displayController.php';
$tableName = 'product';
$product = fetchProduct($tableName, $_GET['id']);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETE PRODUCT</title>
</head>
<body>

<fieldset>
	<legend><b>DELETE PRODUCT</b></legend><br>
	<form action="controller/deleteController.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
	Name: <?php echo $product['Name']; ?> <hr>
	Buying Price: <?php echo $product['BuyingPrice']; ?> <hr>
	Selling Price: <?php echo $product['SellingPrice']; ?> <hr>
	Displayable: <?php echo $product['display']; ?><hr>
	<input type="submit" name="submit" value="Delete">
</form>
</fieldset>


</body>
</html>
<?php }
else{
	echo "Error accessing the page.";
} ?>