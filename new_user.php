<html>
	<head>
		<title>
			Napravite nov profil
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
    			margin: 0px 135px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/logo.jpg"/> 
		<h1 id="title">
			PMF AIR		</h1>
		<div>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Pocetna</a></li>
				<li><a href="pnr.php"><i class="fa fa-desktop" aria-hidden="true"></i> Stampaj kartu</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Izloguj se</a></li>
			</ul>
		</div>
		<br>
		<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
			<h2><i class="fa fa-user-plus" aria-hidden="true"></i> NAPRAVITE NOV PROFIL</h2>
			<br>
			<table cellpadding='10'>
				<strong>UNESITE PODATKE</strong>
				<tr>
					<td>Unesite korisnicko ime  </td>
					<td><input type="text" name="username" required><br><br></td>
				</tr>
				<tr>
					<td>Unesite lozinku  </td>
					<td><input type="password" name="password" required><br><br></td>
				</tr>
				<tr>
					<td>Unesite email</td>
					<td><input type="text" name="email" required><br><br></td>
				</tr>
			</table>
			<br>
			<table cellpadding='10'>
				<strong>LICNE INFORMACIJE</strong>
				<tr>
					<td>Unesite Vase ime  </td>
					<td><input type="text" name="name" required><br><br></td>
				</tr>
				<tr>
					<td>Unesite Vas broj telefona</td>
					<td><input type="text" name="phone_no" required><br><br></td>
				</tr>
				<tr>
					<td>Unesite Vasu adresu</td>
					<td><input type="text" name="address" required><br><br></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Potvrdi" name="Submit">
			<br>
		</form>
	</body>
</html>