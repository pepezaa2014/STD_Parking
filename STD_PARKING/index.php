<html>
<body>
	<body background="bg.jpg">
<div><center><font face="Bangna New"><font size="+2" color=""><b>
<?php 
	if(isset($_SESSION['Account']))
	{
		$user = $_SESSION['Account'];
		header('location:index2.php');	
	}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<div class="alert alert-secondary" role="alert">
		<title>STD Parking for ADMIN only!!</title>

			<br><br><head><font size="+4" color="#8B814C">กรุณาลงชื่อเข้าสู่ระบบ STD Parking</font></head>
				<form method="post" action="checkuser.php"><br><br>
					<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Username</span>
  </div>
  <input type="text" class="form-control" style="height:50" style="width:50%" placeholder="EnterID..." aria-label="Username" aria-describedby="basic-addon1" name="Username" autofocus>
</div>

					<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Password</span>
  </div>
  <input type="password" class="form-control" style="height:50" placeholder="EnterPassword..." aria-label="Username" aria-describedby="basic-addon1" name="Password">
</div>


					<br><br><button type="submit" class="btn btn-secondary btn-lg btn-block">ยืนยัน</button>
				</form>
			</div>
</b></font></font></center></div>

</body>
</html>