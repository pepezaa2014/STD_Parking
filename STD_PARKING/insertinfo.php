<html>
<body>

<?php
include("connection.php");

$name= $_POST['Name'];
$license= $_POST['License'];
$card= $_POST['CardID'];

$sql = "SELECT * FROM `sd`";
$sentdata = "INSERT INTO `sd` (`ID_SD`, `NAME_SD`, `CardID`, `Status`, `Time`, `License`) VALUES (NULL, '$name', '$card', 'ไม่มา', '00:00:00', '$license')";
$sending = $conn->query($sentdata);	
header("location:regiscard.php");
	?>

</body>
</html>