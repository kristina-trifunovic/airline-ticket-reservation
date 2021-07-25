<?php
	session_start();
?>
<html>
	<head>
		<title>Obrisi let</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Delete']))
			{
				$data_missing=array();
				if(empty($_POST['flight_no']))
				{
					$data_missing[]='broj leta';
				}
				else
				{
					$flight_no=trim($_POST['flight_no']);
				}
				if(empty($_POST['departure_date']))
				{
					$data_missing[]='datum polaska';
				}
				else
				{
					$departure_date=trim($_POST['departure_date']);
				}

				if(empty($data_missing))
				{
					require_once('Database Connection file/mysqli_connect.php');
					$query="DELETE FROM Flight_Details WHERE flight_no=? AND departure_date=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flight_no,$departure_date);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					if($affected_rows==1)
					{
						echo "Uspesno obrisan";
						header("location: delete_flight_details.php?msg=success");
					}
					else
					{
						echo "Greska";
						echo mysqli_error();
						header("location: delete_flight_details.php?msg=failed");
					}
				}
				else
				{
					echo "Ova polja su prazna! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Podaci nisu validni";
			}
		?>
	</body>
</html>