<?php
//parametres de text
if (isset($_SESSION['username']) and strcmp($_SESSION['username'],"admin") == 0){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $formatErr = 0;
    $name = test_input($_POST['Name']);
    // nomes caracters i espais i mida com a maxim 40
    if (!preg_match("/^[a-zA-Z ]*$/",$name) || strlen($name) > 30) {
        $formatErr = "Wrong name format";
        goto end;
    }
    $category = test_input($_POST['Category_id']);
    if (!preg_match("/^[0-9]*$/",$category) || strlen($category) > 11) {
        $formatErr = "Wrong brief description format";
        goto end;
    }
    $briefDescription = test_input($_POST['Brief_description']);
    // nomes caracters i espais i mida com a maxim 40
    if (!preg_match("/^[a-zA-Z ]*$/",$briefDescription) || strlen($briefDescription) > 255) {
        $formatErr = "Wrong brief description format";
        goto end;
    }
    $fullDescription = test_input($_POST['Full_description']);
    // nomes caracters i espais i mida com a maxim 40
    if (!preg_match("/^[a-zA-Z ]*$/",$fullDescription) || strlen($fullDescription) > 65535) {
        $formatErr = "Wrong full description format";
        goto end;
    }
    $price = test_input($_POST['Price']);
    // nomes caracters i espais i mida com a maxim 40
    if (!preg_match("/^[0-9]*$/",$price)) {
        $formatErr = "Wrong price format";
        goto end;
    }
    if ($formatErr == 0){
        require_once './model/addProduct.php';
        $fileName = basename($_FILES["fileToUpload"]["name"]);
        $productInfo = array($name, $category, $briefDescription, $fullDescription, $price, $fileName);
        $success = addProduct($productInfo);
    }

//imatge

$target_dir = './view/images/';
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// // Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) and $formatErr == 0) {
        header("Refresh: 0; URL = /~tdiw-h1/brands/view");

    }else if ($formatErr != 0){
            end:
            echo $formatErr;
    }else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}else{
    echo "UNAUTHORISED";
}
?>
