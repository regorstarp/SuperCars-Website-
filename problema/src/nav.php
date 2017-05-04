<?php
if(!isset($_SESSION['user'])) {
?>
<nav>L'escola | Graus | Matrícula | <a href="#" id="login" onclick="loadForm();">Login</a></nav>
<?php
} else {
?>  
<nav>L'escola | Graus | Matrícula | <a href="#"><?php echo $_SESSION['user'] ;?></a>  
&nbsp;&nbsp;&nbsp;&nbsp;<a href="./controller/logout.php">Logout</a></nav>
<?php 
}
?>