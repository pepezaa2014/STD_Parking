<html>
<head>
	<title>Scancard for STD Parking</title>
	
</head>
<body>
<?php include("connection.php");
	session_start();
	// if(isset($_SESSION['Account']))
	// {
	// 	$user = $_SESSION['Account'];
	// 	$q = "SELECT * FROM sd WHERE User_admin = '".$user."'";
	// 	$result = $conn->query($q);
	// 	$data = mysqli_fetch_array($result);
	// 	// echo $data['Name_admin'];
	// } 
	?>

<link rel="stylesheet" type="text/css" href="bootstrap.css"> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="http://www.chiangkham.ac.th/">
    <img src="logockw.gif" width="40" height="50" class="d-inline-block align-top" alt="">
  </a>
</nav>
  <a class="navbar-brand" href="index2.php"><b><font face="Bangna new" size="+2">STD Parking</font></b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="shownamesd.php"><font face="Bangna new" size="+1">ตรวจสอบรายชื่อนักเรียนที่นำรถมาโรงเรียน </font><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="showsdtoday.php"><font face="Bangna new" size="+1">ตรวจสอบจำนวนนักเรียนที่นำรถมาในวันนี้ </font><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="scancard.php"><font face="Bangna new" size="+1">สแกนบัตร </font><span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="regiscard.php"><font face="Bangna new" size="+1">ลงทะเบียนผู้ใช้งาน </font><span class="sr-only">(current)</span></a>
      </li>
    </ul>
        <ul class="navbar-nav mr-auto">
    </ul>
        <li class="navbar-text">
      <a class="nav-link" href="resetts.php"><font face="Bangna new" color="#3300FF" size="+1"><u>Reset Time</u></font></a>
    </li>
        <li class="navbar-text">
      <a class="nav-link" href="Logout.php"><font face="Bangna new" color="#FF6347" size="+1"><u>Logout</u></font></a>
    </li>
  </div>
</nav>
<br><br>
<div><font face="Bangna new" size="+1">



	<div><font face="Bangna new" size="+2"><b><center><br>
	<form action="" method="POST">
		<div class="form-group">
    <font size="+5" color="#000000"><b><label for="exampleInputEmail1">Scancard</label></b></font><br><br>
    <input type="text" name="CardID" class="form-control" placeholder="Entercardnumber..." autofocus>
	</form>
	</center><b></font></div><br>

<div><font face="Bangna new" size="+2" color="#000000"><center><br>

	<?php
	date_default_timezone_set("Asia/Bangkok");
		$date = date("Y-m-d");
		$time = date("H:i:s"); 
		$come = "มา";
	if (isset($_POST['CardID'])){
		$CardID = $_POST['CardID'];
		// echo $CardID;
		$sql = "SELECT * FROM `sd` WHERE `CardID` = '$CardID'";
		$result1 = $conn->query($sql);
		$data = mysqli_fetch_array($result1);
		// echo print_r($result);
		

		if($result1->num_rows == 1){
		// $datasdname = mysqli_fetch_array($result1);
			echo  'สวัสดีคุณ ' .$data['NAME_SD'] . "<br />" . "<br />";
			echo  "ทะเบียน " . $data['License'] . "<br />" . "<br />";
			echo  $time ;


			$sentTime = "UPDATE `sd` SET `Time` = '$time', `Status`='$come' WHERE `sd`.`CardID` = '$CardID'";
			$sending = $conn->query($sentTime);

			$port = fopen("COM1", "w+");
			fwrite($port, "n");
			fclose($port);
}
		else
		{
			echo 'ไม่พบข้อมูล';
		}
	}
	?>
</center></font></div>

</body>
</html>