<?php include_once 'config/database.php';
include_once 'objects/scheldworden.php';

?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<meta name='description' content='Basic loginsystem'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='x-ua-compatible' content='ie=edge'>
	<link href='css/bootstrap.min.css' rel='stylesheet'>
	<woord>Basic Login System</woord>
</head>
<body>

	<div class='container'>
		<div class='row'>
			<div class='col-lg-12 col-lg-offset-2'>
				<div class='col-lg-12 col-lg-offset-2'>
					<h3>book Data</h3>
					<hr>
					<div class='table-responsive'>
						<table class='table table-striped'>
							<thead>
								<tr>
									<th>woord</th>
									<th>goedgekeurd</th>
									<th>gradatieScheldwoord</th>
									<th>overview</th>
									<th>pages</th>
								</tr>
							</thead>
							<tbody>
								<?php
$query = "SELECT * FROM `scheldworden`";
$result = mysqli_query($con, $query) or die('Cannot fetch data from database. '.mysqli_error($con));
if(mysqli_num_rows($result) > 0) {
 while($sheldwoord = mysqli_fetch_assoc($result)) {
   echo '<tr>';
   echo '<td>' . $sheldwoord['woord']  . '</td>';
   echo '<td>' . $sheldwoord['goedgekeurd']   . '</td>';
   echo '<td>' . $sheldwoord['gradatieScheldwoord']      . '</td>';
//    echo '<td><a href="object/scheldworden.php?del='.$sheldwoord['id'].'" class="btn btn-sm btn-danger">Delete</a></td>';
   echo '<td><a href="update.php?upd='.$sheldwoord['id'].'" class="btn btn-sm btn-warning">Update</a></td>';
   echo '</tr>';
 }
}
mysqli_free_result($result);
mysqli_close($con);

// $query = "SELECT * FROM `scheldworden`";
// $result = mysqli_query($con, $query) or die('Cannot fetch data from database. '.mysqli_error($con));
// if(mysqli_num_rows($result) > 0) {
//  while($book = mysqli_fetch_assoc($result)) {
//    echo '<tr>';
//    echo '<td>' . $book['woord']  . '</td>';
//    echo '<td>' . $book['goedgekeurd']   . '</td>';
//    echo '<td>' . $book['gradatieScheldwoord']      . '</td>';
//    echo '<td><a href="config/actions.php?del='.$book['id'].'" class="btn btn-sm btn-danger">Delete</a></td>';
//    echo '<td><a href="update.php?upd='.$book['id'].'" class="btn btn-sm btn-warning">Update</a></td>';
//    echo '</tr>';
//  }
// }
// mysqli_free_result($result);
// mysqli_close($con);
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class='row'>
			<div class='col-lg-8 col-lg-offset-2'>
				<div class='col-lg-6 col-lg-offset-3'>
					<h3>Add book</h3>
					<hr/>
					<form name='signup' id='signup' action='product/create.php?' method='post'>
						<div class='form-group'>
							<label for='woord'>woord</label>
							<input name='woord' id='woord' type='text' class='form-control' placeholder='woord' required />
						</div>
						<div class='form-group'>
							<label for='goedgekeurd'>goedgekeurd</label>
							<input name='goedgekeurd' id='goedgekeurd' type='number' class='form-control' placeholder='goedgekeurd' required />
						</div>
						<div class='form-group'>
							<label for='gradatieScheldwoord'>gradatieScheldwoord</label>
							<input name='gradatieScheldwoord' id='gradatieScheldwoord' type='number' class='form-control' placeholder='gradatieScheldwoord' required />
						</div>
						<div class='form-group'>
							<input type="submit" name='submit' id='submit' value='Sign Up' class='btn btn-primary btn-block'></input>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>