<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
</head>
<body>
	<form action="controller/addController.php" method="post" enctype="multipart/form-data">
<fieldset>
	<legend><b>ADD PRODUCT</b></legend><br>
	Name:<br>
	<input type="text" name="name"><hr>
	Buying Price:<br>
	<input type="text" name="bprice"><hr>
	Selling Price:<br>
	<input type="text" name="sprice"><hr>
	<input type="checkbox" name="display" value="Yes">
	<label for="display">Display</label><hr>
	<input type="submit" name="submit" value="Save">
</form>
</fieldset>
</body>
</html>