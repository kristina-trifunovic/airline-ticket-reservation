<?php
	session_start();
?>
<html>
	<head>
		<title>
		Otkazi rezervisane karte
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
    			margin: 0px 68px
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
		<h2>OTKAZI REZERVISANE KARTE</h2>
		<h3 style='padding-left: 40px;'>Vasa rezervacija je uspesno otkazana.<br><br>Iznos od <?php echo $_SESSION['refund_amount']?> dinara ce biti refundiran na Vasem racunu. (otkazivanjem rezervacije se odbija 15% od iznosa)</td>
		</h3>
		<br>
	</body>
</html>