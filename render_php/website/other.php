<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My Shop</title>
	</head>
	<body>
		<?php 
			$json = file_get_contents('http://service-api:9876/product');
			echo "<h3>Products</h3>";
			$obj = json_decode($json);
			
			$products = $obj->products;
			foreach ($products as $product) {
				echo "<li>$product</li>";
			}
		 ?>
	</body>
</html>