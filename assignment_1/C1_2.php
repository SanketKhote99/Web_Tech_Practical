<html>
<head>
	<title>Product Information</title>
</head>
<body>
	<form method="post" action="C1_3.php">
		<label for="product_name">Product Name:</label>
		<input type="text" name="product_name" id="product_name" required><br><br>
		
		<label for="quantity">Quantity:</label>
		<input type="number" name="quantity" id="quantity" required><br><br>
		
		<label for="rate">Rate:</label>
		<input type="number" name="rate" id="rate" required><br><br>
		
		<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
		<input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">
		<input type="hidden" name="mobile" value="<?php echo $_POST['mobile']; ?>">
		
		<input type="submit" value="Generate Bill">
	</form>
</body>
</html>
