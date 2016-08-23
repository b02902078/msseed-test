<?php session_start(); ?>

<div class="container col-lg-4 col-lg-offset-4 col-xs-8 col-xs-offset-2">
	<!-- Banner -->
	<div class="banner">
		<img src="png/ms_airline.png" class="img-responsive"/>
	</div>

	<!-- Get User Info -->
	<?php
	echo $_SESSION['ID'];
	require_once("../taskmodel.php");
	$user = getUserInfo($_SESSION['ID']);
	if (!empty($user)) 
	{
		$_SESSION['ch_name'] = $user[0][1];
		$_SESSION['en_name'] = $user[0][2];
		$_SESSION['country'] = $user[0][3];
		$_SESSION['room'] = $user[0][4];
		$_SESSION['master'] = $user[0][5];
		$_SESSION['mission'] = $user[0][6];

		/* Decide teams for Taipei & Stronghold */
		$_SESSION['t_team'] = $user[0][1];
		$_SESSION['s_team'] = $user[0][1];

		echo $_SESSION['en_name'] . $_SESSION['country'];
	}
	else { echo 'empty'; }
	?>

	<!-- Plane Ticket-->
	<div class="plane-ticket">
		<?php echo '<img src="../../png/plain_ticket'.$_SESSION['country'].'.png" class="img-responsive">'; ?>
	</div>
</div>





<?php
echo "Hello ".$_SESSION['ID']."<br>";
echo "Your authority is  ".$_SESSION['authority']."<br>";
echo '  
<div class="container col-lg-6 col-lg-offset-3 col-xs-8 col-xs-offset-2">
	<!-- Logout form-->
	<form role="form" action="backend/login/logout.php" method="post" accept-charset="UTF-8" autocomplete="on">
		<button type="submit" class="btn btn-default">Logout</button>
	</form>
</div>';

?>