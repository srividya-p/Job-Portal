<?php 
	require('PHPMailer/PHPMailerAutoload.php'); 
	require('credentials.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<?php 
$conn = mysqli_connect("localhost","root","selin@1234","login_register");

if(isset($_POST['login'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$select = "SELECT * FROM register WHERE email = '$email' AND password = '$password' AND status = 'Active'";
	$result = mysqli_query($conn,$select);
	$count = mysqli_num_rows($result);
	$data = mysqli_fetch_array($result);

	if ($count == 1) {

		header("location:welcome.php");
	}else{
		$msg = '<div class="alert alert-danger">Please enter a valid username or password!</div>';
	}

}

?>

	<br><br><br><br>
	<div class="container">
		<?php if (isset($msg)) { echo $msg; } ?>
		<form action="" method="post">
			<h1>User Login</h1>
				<hr>
			<div class="col-md-12" style="width: 40%">
				<div class="form-group">
					<label>Enter Email</label>
					<input class="form-control" type="text" name="email" placeholder="Enter Email">
				</div>
				
				<div class="form-group">
					<label>Enter Password</label>
					<input class="form-control" type="password" name="password" placeholder="Enter Password">
				</div>

				<div class="form-group">
					<input class="btn btn-success pull-left" type="submit" name="login" value="Log In">
					<a href="index.php" class="btn btn-warning pull-right">Forgot password?</a>
				</div>
			</div>
			
		</form>
	</div>
				
</body>
</html>
