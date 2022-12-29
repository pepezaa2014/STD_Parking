<html>
<body>
	<?php
	include('connection.php'); 
	date_default_timezone_set("Asia/Bangkok");
		$date = date("Y-m-d");
		$time = date("H:i:s"); 

		 	$sql = "SELECT * FROM `sd`";
			$result1 = $conn->query($sql);
		 	$data = mysqli_fetch_array($result1);
		 	$sentTime = "UPDATE `sd` SET `Time` = '00:00:00', `Status`='ไม่มา'";
		 	$sending = $conn->query($sentTime);


		header('location:index2.php');
		?>
</body>
</html>