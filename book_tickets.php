<?php
	session_start();
?>
<html>
	<head>
		<title>
			Pretrazi slobodne letove
		</title>
		<style>
			input {
    			border: 1.5px solid #a6261f;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #a6261f;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #a6261f;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #a6261f;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
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
		<form action="view_flights_form_handler.php" method="post">
			<h2>PRETRAZI SLOBODNE LETOVE</h2>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Mesto polaska:</td>
					<td class="fix_table">Mesto dolaska:</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From" required>
  						<datalist id="origins">
  						  	<option value="Nis">
  						</datalist>
					</td>
					<td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="Istanbul">
  						  	<option value="Pariz">
  						  	<option value="Bukurest">
  						  	<option value="Moskva">
  						  	<option value="Berlin">
  						</datalist>
					</td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Datum polaska</td>
					<td class="fix_table">Broj putnika</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" min=
						<?php 
							$todays_date=date('Y-m-d'); 
							echo $todays_date;
						?> 
						max=
						<?php 
							$max_date=date_create(date('Y-m-d'));
							date_add($max_date,date_interval_create_from_date_string("90 days")); 
							echo date_format($max_date,"Y-m-d");
						?> required></td>
					<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Primer: 5" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Klasa</td>
				</tr>
				<tr>
					<td class="fix_table">
						<select name="class">
  							<option value="economy">Ekonomska</option>
  							<option value="business">Biznis</option>
  						</select>
  					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Pretrazi slobodne letove" name="Search">
		</form>
	</body>
</html>