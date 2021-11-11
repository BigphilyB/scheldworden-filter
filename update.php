<?php
	// Hier komt de code te staan die ervoor zorgt dat er een database-connectie is
	require 'config/database.php';

	// Hier komt de code te staan die de gebruiker ophaalt uit de database die geupdate gaat worden 
	if( isset($_GET['upd']) ) {
		$id     = $_GET['upd'];
		$query  = "SELECT * FROM `scheldworden` WHERE id=$id";
		$result = mysqli_query($con, $query);
		$scheldwoord   = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		mysqli_close($con);
	   }


?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<meta name='description' content='Basic loginsystem'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='x-ua-compatible' content='ie=edge'>
	<link href='css/bootstrap.min.css' rel='stylesheet'>
	<title>Basic Login System</title>
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
				<div class='col-lg-4 col-lg-offset-4'>
					<h3>Update Data</h3>
					<hr/>
					<form name='update' id='update' action='product/update.php?id=<?php echo $scheldwoord['id'] ?>' method='post'>

						<div class='form-group'>
							<label for='woord'>woord</label>
							<input value='<?php echo $scheldwoord['woord'] ?>' name='woord' id='woord' type='text' class='form-control' placeholder='woord' />
						</div>
						<div class='form-group'>
							<label for='goedgekeurd'>goedgekeurd</label>
							<input value='<?php echo $scheldwoord['goedgekeurd'] ?>' name='goedgekeurd' id='goedgekeurd' type='number' class='form-control' placeholder='goedgekeurd' />
						</div>
						<div class='form-group'>
							<label for='gradatieScheldwoord'>gradatieScheldwoord</label>
							<input value='<?php echo $scheldwoord['gradatieScheldwoord'] ?>' name='gradatieScheldwoord' id='gradatieScheldwoord' type='number' class='form-control' placeholder='gradatieScheldwoord' />
						</div>

						<div class='form-group'>
							<button name='btnupdate' id='update' class='btn btn-primary btn-block'>Update</button>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>