<?php include"../php/readdb_php.php";?>
<?php
	$state = $_GET["state"];
	$ID = $_GET["ID"];
	$Email = $_GET["Email"];

	if (isset($_GET['state'])) 
	{
		//
		$sql = "UPDATE `coupon` SET `CouponState` = '2' WHERE `coupon`.`CouponID` = '$ID' AND `coupon`.`UploadID` = '$Email'";
		//
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}else{
			if ($conn->query($sql) === TRUE) {
				echo "Modify successfully";
				header('Location:../MemberCoupon.php');
			} 
			else {
				echo "Error remove record: " . $conn->error;
			}
		}
	}	
?>
