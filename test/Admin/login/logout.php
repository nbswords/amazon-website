<?php
	session_start();
	unset($_SESSION["email"]);
   
	echo 'You have cleaned session';
	header("Location:http://localhost/test/Admin/Admin.php" );
?>
<br>