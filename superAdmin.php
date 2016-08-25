<?php 
session_start();
?>
<html>
<!--
/** * Copyright 2013 Microsoft Corporation 
	*  
	* Licensed under the Apache License, Version 2.0 (the "License"); 
	* you may not use this file except in compliance with the License. 
	* You may obtain a copy of the License at 
	* http://www.apache.org/licenses/LICENSE-2.0 
	*  
	* Unless required by applicable law or agreed to in writing, software 
	* distributed under the License is distributed on an "AS IS" BASIS, 
	* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. 
	* See the License for the specific language governing permissions and 
	* limitations under the License. 
	*/
-->
<head>
<!-- Title -->
<title>超級管理員</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- CSS Style -->
<style type="text/css">
	body { background-color: #fff; border-top: solid 10px #000;
		color: #333; font-size: .85em; margin: 20px; padding: 20px;
		font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
	}
	h1, h2, h3 { color: #000; margin-bottom: 0; padding-bottom: 0; }
	h1 { font-size: 2em; }
	h2 { font-size: 1.75em; }
	h3 { font-size: 1.2em; }
	table { margin-top: 0.75em;}
	th { font-size: 1.2em; text-align: center; border: none 0px; padding-right: 15px;
		background-color: #4CAF50;
		color: white; }
		td { padding: 0.25em 2em 0.25em 0em; border: 0 none; }
		tr:nth-child(even){ background-color: #f2f2f2; }
	</style>

	<link rel="stylesheet" type="text/css" href="rules.css">
</head>


<body>

<?php include "backend/navbar/nav.php"; ?>

<div class="container">
	<div class="panel-group">

<!-- Account -->
<div class="panel panel-success">
	<div class="panel-heading" data-toggle="collapse" href="#collapse1">
		<h4 class="panel-title">Account</h4>
	</div>
	<div id="collapse1" class="panel-collapse collapse">
		<div class="panel-body">

			<?php
			if($_SESSION['authority']==3)
			{
				header('Cache-Control: no-cache');
				header('Pragma: no-cache');
				require_once "getitems.php";

				$items = getItems();
				if(!empty($items))
				{
					echo "<table border='1'>
					<tr>
						<th>pid</th>
						<th>Account</th>
						<th>Password</td>
						<th>Authority</td>
						<th>Delete?</th>
					</tr>";
					foreach($items as $item)
					{
						echo 	"<tr>
						<td>".$item[0]."</td>
						<td>".$item[1]."</td>
						<td>".$item[2]."</td>
						<td>".$item[3]."</td>";

						echo "<td><a href='deleteitem.php?id=".$item[0]."'>Delete</a></td>";
						echo "</tr>";
					}

					echo "</table>";
				}
				else
				{
					prepareAccount();
				}
			}
			?>

			<!-- Add Item -->
			<form action="additem.php" method="post">
				<table border="1">
					<tr>
						<td>Account: </td>
						<td><input name="account" type="text"/></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input name="password" type="text"/></td>
					</tr>
				</table>
				<input type="submit" value="Add item"/>
			</form>
		</div>
	</div>
</div>



<!-- Message -->
<div class="panel panel-success">
	<div class="panel-heading" data-toggle="collapse" href="#collapse3">
		<h4 class="panel-title">Message</h4>
	</div>
	<div id="collapse3" class="panel-collapse collapse">
		<div class="panel-body">	

			<?php
			header('Cache-Control: no-cache');
			header('Pragma: no-cache');
			require_once "getitems.php";
			$items = getMessages();
			if(!empty($items))
			{
				echo "<table border='1'>
				<tr>
					<th>Time</th>
					<th>Client</td>
						<th>Color</td>
							<th>Message</td>
								<th>Delete?</th>
							</tr>";
							foreach($items as $item)
							{
								echo 	"<tr>
								<td>".$item[1]."</td>
								<td>".$item[2]."</td>
								<td>".$item[4]."</td>
								<td>".$item[3]."</td>";

								echo "<td><a href='deletemessage.php?id=".$item[0]."'>Delete</a></td>";
								echo "</tr>";
							}

							echo "</table>";
						}
						?>

						<form action="addmessage.php" method="post">
							<table border="1">
								<tr>
									<td>Time: </td>
									<td><input name="time" type="text"/></td>
								</tr>
								<tr>
									<td>client: </td>
									<td>
										<select name="client"/>
										<option value="A">美洲</option>
										<option value="B">歐洲</option>
										<option value="C">亞洲</option>
										<option value="D">非洲</option>
										<option value="All">All</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Message: </td>
								<td><textarea name="content" rows="4" cols="40"></textarea></td>
							</tr>
							<tr>
								<td>Color: </td>
								<td>
									<select name="color"/>
									<option value="black">黑色</option>
									<option value="blue">藍色</option>
									<option value="red">紅色</option>
								</select>
							</td>
						</tr>
					</table>
					<input type="submit" value="Add message"/>
				</form>

				<?php
				header('Cache-Control: no-cache');
				header('Pragma: no-cache');
				require_once "getitems.php";
				$items = getGMMessages();
				if(!empty($items))
				{
					echo "<table border='1'>
					<tr>
						<th>Time</th>
						<th>Client</td>
							<th>Color</td>
								<th>Message</td>
									<th>Delete?</th>
								</tr>";
								foreach($items as $item)
								{
									echo 	"<tr>
									<td>".$item[1]."</td>
									<td>".$item[2]."</td>
									<td>".$item[4]."</td>
									<td>".$item[3]."</td>";

									echo "<td><a href='deleteGMmessage.php?id=".$item[0]."'>Delete</a></td>";
									echo "</tr>";
								}

								echo "</table>";
							}
							?>

						</div>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading" data-toggle="collapse" href="#collapse4">
						<h4 class="panel-title">Stronghold</h4>
					</div>
					<div id="collapse4" class="panel-collapse collapse">
						<div class="panel-body">

							<form action="createStronghold.php" method="post">
								<input type="submit" value="Create Stronghold Table"/>
							</form>

							<?php
							header('Cache-Control: no-cache');
							header('Pragma: no-cache');
							require_once "getitems.php";
	#prepareStronghold();
							$items = getStrongholds();
							if(!empty($items))
							{
								echo "<table border='1'>
								<tr>
									<th>Nnumber:  </th>
									<th>Name:  </th>
									<th>產生:</th>
									<th>產生量:     </th>
									<th>產生物:  </th>
									<th>產生時間:    </th>
									<th>佔領隊伍:</th>
									<th>Mission Code:    </th>
									<th>最高紀錄:    </th>
								</tr>";
								foreach($items as $item)
								{
									echo 	"<tr>
									<td>".$item[1 ]."</td>
									<td>".$item[2 ]."</td>
									<td>".$item[3 ]."</td>
									<td>".$item[4 ]."</td>
									<td>".$item[5 ]."</td>
									<td>".$item[6 ]."</td>
									<td>".$item[7 ]."</td>
									<td>".$item[8 ]."</td>
									<td>".$item[9 ]."</td>";
									echo "</tr>";
								}

								echo "</table>";
							}
							?>

						</div>
					</div>
				</div>

				<div class="panel panel-success">
					<div class="panel-heading" data-toggle="collapse" href="#collapse5">
						<h4 class="panel-title">Mission</h4>
					</div>
					<div id="collapse5" class="panel-collapse collapse">
						<div class="panel-body">	

							<form action="createMission.php" method="post">
								<input type="submit" value="Create Mission Table"/>
							</form>

							<?php
							header('Cache-Control: no-cache');
							header('Pragma: no-cache');
							require_once "getitems.php";
	#prepareStronghold();
							$items = getMissions();
							if(!empty($items))
							{
								echo "<table border='1'>
								<tr>
									<th>Code:	</th>
									<th>主題:	</th>
									<th>內容:									</th>
									<th>任務人數:	</th>
									<th>Day1條件:	</th>
									<th>Day2條件:	</th>
									<th>Day3條件:	</th>
									<th>Day4條件:	</th>
								</tr>";
								foreach($items as $item)
								{
									echo 	"<tr>
									<td>".$item[1 ]."</td>
									<td>".$item[2 ]."</td>
									<td>".$item[3 ]."</td>
									<td>".$item[4 ]."</td>
									<td>".$item[5 ]."</td>
									<td>".$item[6 ]."</td>
									<td>".$item[7 ]."</td>
									<td>".$item[8 ]."</td>";
									echo "</tr>";
								}

								echo "</table>";
							}
							?>

						</div>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading" data-toggle="collapse" href="#collapse6">
						<h4 class="panel-title">Time Table</h4>
					</div>
					<div id="collapse6" class="panel-collapse collapse">
						<div class="panel-body">

							<?php
							header('Cache-Control: no-cache');
							header('Pragma: no-cache');
							require_once "getitems.php";
							$items = getTimes();
							if(!empty($items))
							{
								echo "<table border='1'>
								<tr>
									<th>據點:  </th>
									<th>需要的時間:  </th>
									<th>現在的時間:  </th>
								</tr>";
								foreach($items as $item)
								{
									echo 	"<tr>
									<td>".$item[1 ]."</td>
									<td>".$item[2 ]."</td>
									<td>".$item[3 ]."</td>";
									echo "</tr>";
								}

								echo "</table>";
							}
							?>

							<script type="text/javascript">
								function GetTime(){
									var d=new Date();
									var nsec=d.getSeconds();
									if(nsec==0){
		// place to trigger php
									}
									document.getElementById('clockbox').innerHTML=nsec;
								}
								window.onload=function(){
									GetTime();
									setInterval(GetTime, 1000);
								}
							</script>
							<div id="clockbox"></div>

							<a href="auto_add.php" target=_new>自動加時頁面</a>
							<a href="auto_reset.php" target=_new>Reset time</a>

							<?php
							header('Cache-Control: no-cache');
							header('Pragma: no-cache');
							require_once "getitems.php";
							$items = getDay();
							if(!empty($items))
							{
								echo "<table border='1'>
								<tr>
									<th>Day:</th>
								</tr>";
								foreach($items as $item)
								{
									echo "<tr>
									<td>".$item[0 ]."</td>";
									echo "</tr>";
								}

								echo "</table>";
							}
							?>

						</div>
					</div>
				</div>

				<div class="panel panel-success">
					<div class="panel-heading" data-toggle="collapse" href="#collapse7">
						<h4 class="panel-title">SQL</h4>
					</div>
					<div id="collapse7" class="panel-collapse collapse">
						<div class="panel-body">	

							<form action="usesqlcode.php" method="post">
								<table border="1">
									<tr>
										<td>SQL: </td>
										<td><textarea name="sql" rows="4" cols="40"></textarea></td>
									</tr>
								</table>
								<input type="submit" value="Send SQL"/>
							</form>
							<br>reference:<br>
							UPDATE resource SET magic_powder='0', cloth='0', ruby='0', shaft='0', fire='0', seed='0', water='0', light='0', flax='0', screw='0', plastic='0', electron='0', ergonomic='0', imagine='0', metal='0', air='0', magic_stone='0', control_panel='0', seat='0', wheel='0', rope='0', cypress='0', propeller='0', door='0', jet='0', gun='0', elk='0', sound='0', sd_card='0', missile='0', miss_air='0', led_light='0', s_logo='0'<br>
							UPDATE stronghold SET team='0', highest_score='0'<br>
						</div>
					</div>
				</div>
			</div>
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