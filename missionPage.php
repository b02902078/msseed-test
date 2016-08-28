<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<!-- Title -->
<title>遊戲關卡</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="css/mission.css">
<style>

</style>


</head>

<body>
<?php
  include "backend/navbar/nav.php";
if($_SESSION['ID'] != null){ 
  ?>


	<div class="container col-lg-6 col-lg-offset-3 col-xs-8 col-xs-offset-2 text-center">
      <!-- Title -->
    <div class="row" align="middle">
		<div class="title">Mission</div>
	</div>  
      <!-- Login form-->
      <form role="form" action="getMission.php" method="post" id="mission-form" autocomplete="on">
        <!-- Password -->
        <div class="form-group">
          <label for="code">Code</label>
          <input type="text" class="form-control" name="code" placeholder="輸入序號">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>



<?php
}
else{
	echo "<script> alert('您無權觀看此頁面喔')</script>";
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Navbar Dropdown -->
	<script src="js/nav.js"></script>
</body>
</html>
