<?php
include('cennection.php');
$sql = "SELECT * FROM `sd` WHERE `CardID` = '$CardID'";
		$result1 = $conn->query($sql);
		$data = mysqli_fetch_array($result1);
	
	$how = $data['Token']++;
	if ($how%2!=0) {
		$show='อยู่ในโรงเรียน';
	}
	if ($how%2==0) {
		$show='ออกจากโรงเรียนแล้ว'
	}


?>