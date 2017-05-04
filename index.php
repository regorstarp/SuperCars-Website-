<?php
if (session_status() == PHP_SESSION_NONE) {
   session_start();
}
if(isset($_GET['url'])){
   $url = $_GET['url'];
   $url = explode("/",$url);
   switch ($url[0]) {
      case 'user':
         if (isset($url[1])){
            switch ($url[1]) {
               case 'confirmPurchase':
                  require_once __DIR__ . '/controller/confirmPurchase.php';
                  break;
               case 'checkCredentials':
                  require_once __DIR__ . '/controller/checkCredentialsPurchase.php';
                  break;
               case 'logout':
                  require_once __DIR__ . '/controller/logout.php';
                  break;
               case 'register':
                  require_once __DIR__ .'/controller/register.php';
                  break;
               case 'login':
                  require_once __DIR__ .'/controller/login.php';
                  break;
               case 'profile':
                  require_once __DIR__ .'/controller/profile.php';
                  break;
               case 'registration':
                  require_once __DIR__ .'/controller/userRegistration.php';
                  break;
               case 'contact':
                  require_once __DIR__ .'/controller/contact.php';
                  break;
               case 'purchases':
                  require_once __DIR__ .'/controller/purchase.php';
                  break;
               case 'checkLogin':
                  require_once __DIR__ .'/controller/checkLogin.php';
                  break;
               case 'editProfile':
                  require_once __DIR__ .'/controller/editProfileForm.php';
                  break;
               case 'updateProfile':
                  require_once __DIR__ .'/controller/editProfile.php';
                  break;
               }
         }
         break;
      case 'product':
         if (isset($url[1])){
            switch($url[1]){
            case 'add':
                  require_once __DIR__ .'/controller/addProductForm.php';
                  break;
            case 'addProduct':
                  require_once __DIR__ .'/controller/addProduct.php';
                  break;
            case 'products':
               if (isset($url[2])){
                  require_once __DIR__ ."/controller/product.php?product_id=$url[2]";
               }
               break;
            case 'view':
                  $product_id = $url[2];
                  require_once __DIR__ .'/controller/product.php';
                  break;
            case 'search':
               require_once __DIR__ .'/controller/searchProduct.php';
               break;
            case 'edit':
            if (isset($url[2])){
               $product_id = $url[2];
               require_once __DIR__ . '/controller/editProductForm.php';
            }
               break;
            case 'update':
               require_once __DIR__ . '/controller/update_product.php';
            }
            break;
         }
      case 'brands':
         if (isset($url[1])){
            switch($url[1]){
            case 'view':
                  require_once __DIR__ .'/controller/brands.php';
                  break;
            case 'products':
               if (isset($url[2])){
                  $brand_id = $url[2];
                  require_once __DIR__ ."/controller/brands_detail.php";
               }
               break;

            default:
               # code...
               break;
               }
         }
         break;
      case 'purchase':
      if (isset($url[1])){
      switch ($url[1]) {
         case 'checkout':
            require_once __DIR__ .'/controller/checkout.php';
            break;
         case 'view':
            require_once __DIR__ .'/controller/purchase.php';
            break;
         case 'viewAll':
            require_once __DIR__ .'/controller/allPurchases.php';
            break;

      }
      break;
   }
      case 'cart':
         if (isset($url[1])){
            switch ($url[1]) {
                  case 'size':
                     $action = 'getSize';
                     require_once __DIR__ .'/controller/cart_update.php';
                     break;
                  case 'view':
                     require_once __DIR__ .'/controller/cart.php';
                     break;
                  case 'add':
                     if (isset($url[2]) and isset($url[2])){
                     $action = 'add';
                     $name = $url[2]; //product name
                     $price = $url[3]; //product price
                     $id = $url[4]; //product id
                     require_once __DIR__ . "/controller/cart_update.php";
                     }
                     break;
                  case 'delete':
                     if (isset($url[2])){
                     $action = 'del';
                     $id = $url[2];
                     require_once __DIR__ . "/controller/cart_update.php";
                     }
                     break;
               }
         break;
      }
      case 'menu':
         require_once __DIR__ .'/controller/menu.php';
         break;
      case 'map':
         require_once __DIR__ .'/controller/map.php';
         break;
      case 'about':
         require_once __DIR__ .'/controller/about.php';
         break;
      default:
         require_once __DIR__ . '/controller/index.php';
   }
}else{
   require_once __DIR__ .'/controller/index.php';
}

?>
