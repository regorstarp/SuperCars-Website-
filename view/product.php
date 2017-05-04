 <section>
      <div id="product" class = "product">
				<div class = "container">
<?php
		$name = $product['product_name'];
		$id = $product['product_id'];
		$price = $product['price_tag'];
		$img = $product['image'];
		$description = $product['full_description'];
		echo "<h1>$name</h1>";
		echo "<img src ='/~tdiw-h1/view/images/$img'/>";
		echo "<p>$description</p>";
		$product_info = "\"$name,$id,$price\"";
		echo "<a id='addToCart' class='addToCart' href = 'javascript:addToCart($product_info)'>Add to Cart | $price €</a>"
 ?>
 </div>
 </div>
 </section>
