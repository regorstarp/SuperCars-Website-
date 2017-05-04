<?php
function updateProduct($params){

   require_once("./model/connectDB.php");
   $conn = connectDB();
   $sql = "UPDATE Product SET product_name=?, category_id=?, brief_description=?, full_description=?, price_tag=? WHERE product_id=?";
   $stmt = $conn->prepare($sql);
   if ($stmt->execute($params) != true) {
   echo "Error: " . $sql . "<br>" . $conn->errorCode();
   }
   $conn = null;
   return $stmt;
}
 ?>
