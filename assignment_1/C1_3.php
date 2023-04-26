<html>
<head>
	<title>Bill</title>
</head>
<body>
	<h1>Bill</h1>
	<p><strong>Name:</strong> <?php echo $_POST['name']; ?></p>
	<p><strong>Address:</strong> <?php echo $_POST['address']; ?></p>
	<p><strong>Mobile Number:</strong> <?php echo $_POST['mobile']; ?></p>
	<table border="1">
		<tr>
			<th>Product Name</th>
			<th>Quantity</th>
			<th>Rate</th>
			<th>Amount</th>
		</tr>
		<tr>
			<td><?php echo $_POST['product_name']; ?></td>
			<td><?php echo $_POST['quantity']; ?></td>
			<td><?php echo $_POST['rate']; ?></td>
			<td><?php echo $_POST['quantity'] * $_POST['rate']; ?></td>
		</tr>
	</table>
</body>
</html>
