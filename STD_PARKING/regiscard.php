<html>
<head>
			<title>Register Card</title>
</head>
<body>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<?php  
include('connection.php'); 
session_start();
	if(isset($_SESSION['Account'])){
		$user = $_SESSION['Account'];
		$q = "SELECT * FROM admin WHERE User_admin = '".$user."'";
		$result = $conn->query($q);
		$data = mysqli_fetch_array($result);
	} 
	?>

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
        <a class="nav-link" href="regiscard.php"><font face="Bangna new" size="+1">ลงทะเบียนผู้ใช้งาน</font><span class="sr-only">(current)</span></a>
      </li>
    </ul>
        <ul class="navbar-nav mr-auto">
    </ul>
    <li class="navbar-text">
      <a class="nav-link"><font face="Bangna new"><?php echo  "ชื่อผู้ใช้งาน : " . $data['Name_admin']; ?></font></a>
    </li>
        <li class="navbar-text">
      <a class="nav-link" href="Logout.php"><u><font face="Bangna new" color="#FF6347" size="+1">Logout</font></u></a>
    </li>
  </div>
</nav>
<br><br>

<div><center><font face="Bangna new" size="+1">
	
			<br><head><font size="+4" color="#000000"><b>Register Card</b></font></head>
				<form method="post" action="insertinfo.php"><br><br>
	<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">ชื่อผู้ใช้งาน</span>
  </div>
  <input type="text" class="form-control" style="height:50" style="width:50%" placeholder="EnterName..." aria-label="Username" aria-describedby="basic-addon1" name="Name" autofocus>
</div>
	<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">ทะเบียนรถ</span>
  </div>
  <input type="text" class="form-control" style="height:50" placeholder="EnterLicense..." aria-label="Username" aria-describedby="basic-addon1" name="License">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">CardID</span>
  </div>
  <input type="text" class="form-control" style="height:50" placeholder="EnterCardnumber..." aria-label="Username" aria-describedby="basic-addon1" name="CardID">
</div>
<div class="form-group"><font face="Bangna new" size="+1">
	<small id="emailHelp" class="form-text text-muted">กดในช่อง CardID แล้วทำการสแกนบัตรได้เลย.(สแกนบัตรเพียงครั้งเดียว)</small>
</font></div>
					<br><button type="submit" class="btn btn-outline-success">ยืนยัน</button>
				</form>

</font></center></div>

</body>
</html>