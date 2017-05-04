<?php
echo "<div class='brands' id='brands'>";
echo "<ul class = 'sales'>";

	foreach ($products as $product) {
		echo "<li><a href = 'javascript:loadProduct($product[product_id])'><img src='/~tdiw-h1/view/images/".$product['image']."'/></a>";
		echo "<a href = 'javascript:loadProduct($product[product_id])'><h1>".$product['product_name']."</h1></a>";
		echo "<p>$product[brief_description]</p>";
	}
	echo  "</ul></div>";
 ?>
