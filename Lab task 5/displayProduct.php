<?php  
require_once 'controller/displayController.php';
$tableName = 'product';
$products = fetchAllProducts($tableName);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DISPLAY PRODUCT</title>
</head>
<body>

	<fieldset>
		<legend><b>DISPLAY</b></legend><br>
		<?php 

		 if(!empty($_GET['msg']))

		 	echo $_GET['msg'];


		    ?>
		
		<table border="1">

		<thead>
			<tr>
			<th>Name</th>
			<th>Profit</th>
			<th colspan="2"></th>
		</tr>
		</thead>

		<tbody>
			<?php foreach ($products as $i => $product): ?>
			<?php if($product['display']=='Yes'){ ?>
			<tr>
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['SellingPrice']-$product['BuyingPrice'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['id'] ?>">Edit</a></td>
				<td><a href="deleteProduct.php?id=<?php echo $product['id'] ?>">Delete</a></td>
			</tr>
		<?php } ?>
		<?php endforeach; ?>
		</tbody>

	</table>

	</fieldset>

</body>
</html>