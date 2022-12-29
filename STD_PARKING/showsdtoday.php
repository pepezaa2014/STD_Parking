<html>
<head>
	<title>Today</title>
</head>

<?php
include("connection.php");
	session_start();
	if(isset($_SESSION['Account']))
	{
		$user = $_SESSION['Account'];
		$q = "SELECT * FROM admin WHERE User_admin = '".$user."'";
		$result = $conn->query($q);
		$data = mysqli_fetch_array($result);
		// echo $data['Name_admin'];
		$i=0;
		$o=0;
	} 
	?>

<body>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
      <a class="nav-link"><font face="Bangna new"><?php echo  "ชื่อผู้ใช้งาน : " . $data['Name_admin']; ?></font></a>
    </li>
        <li class="navbar-text">
      <a class="nav-link" href="Logout.php"><font face="Bangna new" color="#FF6347" size="+1"><u>Logout</u></font></a>
    </li>
  </div>
</nav>
<br><br>

<div><font face="Bangna new" size="+1"><center>
<?php

$query = "SELECT * FROM sd ORDER BY ID_SD asc" or die("Error:" . mysqli_error()); 
$result = mysqli_query($conn, $query); 

echo "<table border='1' align='center' width='500'>";
echo "<tr align='center' bgcolor='#CCCCCC'><td>จำนวนนักเรียนที่นำรถมาโรงเรียนทั้งหมด</td><td>มา</td><td>ไม่มา</td>";
while($row = mysqli_fetch_array($result)) { 
  $i++;
  if ($row['Status'] == "ไม่มา") {
  	$o++;
  }
}
$z=$i-$o;
	
echo "<tr>";
echo "<td>" .$i . "</td>";
echo "<td>" .$z . "</td>"; 
echo "<td>" .$o . "</td>";

?>
	
</center></font></div>
</body>
</html>