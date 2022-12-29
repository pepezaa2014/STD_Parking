<html>

<head>
	<meta charset="UTF-8">
	<title>STD Parking</title>
</head>

<body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	<?php include("connection.php");
		if (mysqli_connect_errno())
	{
		echo "error";
		exit;
	} 

	 session_start();
	if(isset($_SESSION['Account']))
	{
		$user = $_SESSION['Account'];
		$q = "SELECT * FROM admin WHERE User_admin = '".$user."'";
		$result = $conn->query($q);
		$data = mysqli_fetch_array($result);
		// echo $data['Name_admin'];
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



   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://scontent.fbkk7-3.fna.fbcdn.net/v/t1.15752-9/s2048x2048/53220383_1166484070192072_5977902513850941440_n.jpg?_nc_cat=101&_nc_ht=scontent.fbkk7-3.fna&oh=5269d45a4530bd7de1fd26a6e033b692&oe=5CDF53DD" class="d-block w-100" style="width: 80%;" height="638"alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://scontent.fbkk7-2.fna.fbcdn.net/v/t1.15752-9/s2048x2048/53265513_352956225305408_1848572207874179072_n.jpg?_nc_cat=111&_nc_ht=scontent.fbkk7-2.fna&oh=a065740e6dae1969d871fb4abc85625c&oe=5CE3C9A2" class="d-block w-100" height="638" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://scontent.fbkk7-2.fna.fbcdn.net/v/t1.15752-9/s2048x2048/53165243_303089967023152_3436607043828449280_n.jpg?_nc_cat=109&_nc_ht=scontent.fbkk7-2.fna&oh=427621df393a6cdabf1ebe1afcb2d50a&oe=5D0FC31A" height="638" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>