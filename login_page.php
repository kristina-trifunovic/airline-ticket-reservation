<?php
	session_start();
?>
<html>
	<head>
		<title>
			Logovanje
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
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/logo.jpg"/> 
		<h1 id="title">
			PMF Air	</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Pocetna</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Rezervacija karata</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> O nama</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Uloguj se</a></li>
			</ul>
		</div>
		<br>
		<br>
		<br>
		<form class="float_form" style="padding-left: 40px" action="login_handler.php" method="POST">
			<fieldset>
				<legend></legend>
				<strong>Korisnicko ime:</strong><br>
				<input type="text" name="username" placeholder="Unesite korisnicko ime" required><br><br>
				<strong>Lozinka:</strong><br>
				<input type="password" name="password" placeholder="Unesite lozinku" required><br><br>
				<strong>Tip korisnika:</strong><br>
				Putnik <input type='radio' name='user_type' value='Customer' checked/> Administrator <input type='radio' name='user_type' value='Administrator'/>
				<br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Pogresno korisnicko ime/loznika!</strong>
						<br><br>";
					}
				?>
				<input type="submit" name="Login" value="Uloguj se">
			</fieldset>
			<br>
			<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Napravite nov profil</a>
		</form>
	</body>
</html>