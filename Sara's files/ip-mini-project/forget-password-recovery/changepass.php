<?php 
$conn = mysqli_connect("localhost","root","selin@1234","login_register");

if(isset($_POST['forget'])){
	
	$id = $_GET['id'];
	$email = $_GET['email'];

	$newPass = $_POST['newPass'];
	$rePass = $_POST['rePass'];

	$select = "SELECT * FROM register WHERE id = '$id' AND email = '$email'";
	$result = mysqli_query($conn,$select);
	$count = mysqli_num_rows($result);
	$data = mysqli_fetch_array($result);
	$password = $data['password'];

	if ($newPass == $rePass) {

		if ($count == 1) {

			if ($newPass !== $rePass) {
				$msg = '<div class="alert alert-danger">Both passwords do not match!</div>';
			}else{
				$update = "UPDATE register SET password = '$rePass' WHERE id = '$id' AND email = '$email'";
				$query = mysqli_query($conn,$update);
					if ($query) {
						$msg = '<div class="alert alert-success">Password changed successfully. You can Login now!</div>';
					}else{
						$ErrorMsg = '<div class="alert alert-danger">Password change failed!!</div>';
					}
					
				}
			}else{
				$ErrorMsg = '<div class="alert alert-danger">You have no email this username</div>';
			}

		}else{
			$ErrorMsg = '<div class="alert alert-danger">Both Passwords do not match!</div>';
		}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

	<br><br><br><br>
	<div class="container">
		<?php if (isset($msg)) { echo $msg; }  ?>
		<?php if (isset($ErrorMsg)) { echo $ErrorMsg; } ?>
		<form action="" method="post">
			<center><h1>Reset Your Password</h1></center>
				<hr>
			<div class="col-md-12" style="width: 40%">
				

				<div class="form-group" >
					<label>New Password</label>
					<input class="form-control" type="password" name="newPass" placeholder="Enter New Password">
				</div>

				<div class="form-group" >
					<label>Confirm New Password</label>
					<input class="form-control" type="password" name="rePass" placeholder="Enter Re type Password">
				</div>
				
				<div class="form-group">
					<input class="btn btn-success pull-left" type="submit" name="forget" value="Submit">
					<a href="login.php" class="btn btn-warning pull-right">Log In</a>
				</div>
			</div>
			
		</form>
	</div>


</body>
</html>
