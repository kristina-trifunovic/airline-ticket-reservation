<?php
	session_start();
?>
<html>
	<head>
		<title>
			Unesi putne/karta detalje
		</title>
		<style>
			input {
    			border: 1.5px solid #a6261f;
    			border-radius: 4px;
    			padding: 7px 10px;
			}
			input[type=number] {
    			border: 1.5px solid #a6261f;
    			border-radius: 4px;
    			padding: 7px 0px;
			}
			input[type=submit] {
				background-color: #a6261f;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 500px
			}
			input[type=radio] {
    			margin-right: 30px;
			}
			select {
    			border: 1.5px solid #a6261f;
    			border-radius: 4px;
    			padding: 6.5px 15px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/logo.jpg"/> 
		<h1 id="title">
			PMF AIR
		</h1>
		<div>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Pocetna</a></li>
				<li><a href="pnr.php"><i class="fa fa-desktop" aria-hidden="true"></i> Stampaj kartu</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Izloguj se</a></li>
			</ul>
		</div>
		<?php
			$no_of_pass=$_SESSION['no_of_pass'];
			$class=$_SESSION['class'];
			$count=$_SESSION['count'];
			$flight_no=$_POST['select_flight'];
			$_SESSION['flight_no']=$flight_no;

			echo "<h2>DETALJI O PUTNIKU</h2>";
			echo "<form action=\"add_ticket_details_form_handler.php\" method=\"post\">";
			while($count<=$no_of_pass)
			{
					echo "<p><strong>PUTNIK ".$count."<strong></p>";
					echo "<table cellpadding=\"0\">";
					echo "<tr>";
					echo "<td class=\"fix_table_short\">Ime</td>";
					echo "<td class=\"fix_table_short\">Godine</td>";
					echo "<td class=\"fix_table_short\">Pol</td>";
					echo "<td class=\"fix_table_short\">Obrok</td>";
					echo "<td class=\"fix_table_short\">ID cestog putnika (ako postoji)</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td class=\"fix_table_short\"><input type=\"text\" name=\"pass_name[]\" required></td>";
					echo "<td class=\"fix_table_short\"><input type=\"number\" name=\"pass_age[]\" required></td>";
					echo "<td class=\"fix_table_short\">";
					echo "<select name=\"pass_gender[]\">";
  					echo "<option value=\"male\">Muski</option>";
  					echo "<option value=\"female\">Zenski</option>";
  					echo "<option value=\"other\">Ostalo</option>";
  					echo "</select>";
  					echo "</td>";
  					echo "<td class=\"fix_table_short\">";
					echo "<select name=\"pass_meal[]\">";
  					echo "<option value=\"yes\">Da</option>";
  					echo "<option value=\"no\">Ne</option>";
  					echo "</select>";
  					echo "</td>";
  					echo "<td class=\"fix_table_short\"><input type=\"text\" name=\"pass_ff_id[]\"></td>";
					echo "</tr>";
					echo "</table>";
					echo "<br><hr>";
					$count=$count+1;
				}
				echo "<br><h2>DETALJI O LETU</h2>";
				echo "<table cellpadding=\"5\">";
				echo "<tr>";
				echo "<td class=\"fix_table_short\">Da li zelite pristup nasoj premium lozi?</td>";
				echo "<td class=\"fix_table_short\">Da li zelite da budete priority putnik?</td>";
				echo "<td class=\"fix_table_short\">Da li zelite putno osiguranje?</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td class=\"fix_table\">";
				echo "Da <input type='radio' name='lounge_access' value='yes' checked/> Ne <input type='radio' name='lounge_access' value='no'/>";
  				echo "</td>";
  				echo "<td class=\"fix_table\">";
				echo "Da <input type='radio' name='priority_checkin' value='yes' checked/> Ne <input type='radio' name='priority_checkin' value='no'/>";
  				echo "</td>";
  				echo "<td class=\"fix_table\">";
				echo "Da <input type='radio' name='insurance' value='yes' checked/> Ne <input type='radio' name='insurance' value='no'/>";
  				echo "</td>";
				echo "</tr>";
				echo "</table>";
				echo "<br><br>";
				echo "<input type=\"submit\" value=\"Potvrdi\" name=\"Submit\">";
				echo "</form>";
		?>
	</body>
</html>